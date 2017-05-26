<?php require('includes/feedbackconfig.php');


//if form has been submitted process it
if(isset($_POST['submit']))
{

//very basic validation
	if(strlen($_POST['name']) < 3)

	{
		$error[] = 'Customer Name too short.';
	} else

	{
		$stmt = $db->prepare('SELECT fb_name FROM Feedback WHERE fb_name = :name');
		$stmt->execute(array(':name' => $_POST['name']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	//if no errors have been created carry on
	if(!isset($error))
	{

		try
		{

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO Feedback (fb_name,fb_contact,fb_email,fb_comment) VALUES (:name, :contact, :email, :comment)');
			$stmt->execute(array(
				':name' => $_POST['name'],
				':contact' => $_POST['contact'],
				':email' => $_POST['email'],
				':comment' => $_POST['comment'],

			));



			//redirect to index page
			header('Location: pages/feedback.php?action=joined');
			exit;

		//else catch the exception and show the error.
		}
		catch(PDOException $e)
		{
		    $error[] = $e->getMessage();
		}

	}

}



//include header template
require('layout/header.php');
?>


<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>User Feedback Registration</h2>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

								//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){
					echo "<h2 class='bg-success'>Feedback successful.</h2>";
				}

				?>

				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Customer Name" value="<?php if(isset($error)){ echo $_POST['name']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="contact" id="contact" class="form-control input-lg" placeholder="Customer contact" value="<?php if(isset($error)){ echo $_POST['contact']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Customer email" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<textarea name="email" rows="5" id="comment" class="form-control input-lg" placeholder="Customer Comment" value="<?php if(isset($error)){ echo $_POST['comment']; } ?>" tabindex="1"></textarea>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>

</div>

<?php
//include header template
require('layout/footer.php');
?>
