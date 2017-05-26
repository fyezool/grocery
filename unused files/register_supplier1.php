	<?php require('includes/config.php');


//if form has been submitted process it
if(isset($_POST['submit'])){

//very basic validation
	if(strlen($_POST['name']) < 3)
	{
		$error[] = 'Customer name is too short.';
	} else
	{
		$stmt = $db->prepare('SELECT supp_name FROM supplier WHERE supp_name = :name');
		$stmt->execute(array(':name' => $_POST['name']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	//if no errors have been created carry on
	if(!isset($error)){



		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO supplier (supp_name,supp_type,supp_email,supp_contact,supp_city,supp_state) VALUES (:name, :type, :email, :contact, :city, :state)');
			$stmt->execute(array(
				':name' => $_POST['name'],
				':type' => $_POST['type'],
				':email' => $_POST['email'],
				':contact' => $_POST['contact'],
				':city' => $_POST['city'],
				':state' => $_POST['state'],

			));



			//redirect to index page
			header('Location: view_supplier.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Demo';

//include header template
require('layout/header.php');
?>


<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Supplier registration</h2>
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
					echo "<h2 class='bg-success'>Supplier Registration.</h2>";
					//redirecting to the display page
				}

				?>

				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Supplier name" value="<?php if(isset($error)){ echo $_POST['name']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="type" id="type" class="form-control input-lg" placeholder="Supplier type" value="<?php if(isset($error)){ echo $_POST['type']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Supplier email" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="contact" id="contact" class="form-control input-lg" placeholder="Supplier contact" value="<?php if(isset($error)){ echo $_POST['contact']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="city" id="city" class="form-control input-lg" placeholder="Supplier city" value="<?php if(isset($error)){ echo $_POST['city']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="state" id="state" class="form-control input-lg" placeholder="Supplier state" value="<?php if(isset($error)){ echo $_POST['state']; } ?>" tabindex="1">
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
