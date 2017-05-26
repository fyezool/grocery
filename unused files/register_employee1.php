<?php require('includes/config.php');


//if form has been submitted process it
if(isset($_POST['submit']))
{

//very basic validation
	if(strlen($_POST['name']) < 3)
	{
		$error[] = 'Employee name is too short.';
	} else

	{
		$stmt = $db->prepare('SELECT emp_name FROM employees WHERE emp_name = :name');
		$stmt->execute(array(':name' => $_POST['name']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	//if no errors have been created carry on
	if(!isset($error))
	{

		try
		{

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO employees (emp_name,emp_role,emp_email,emp_contact,emp_salary,emp_city,emp_state,emp_country) VALUES (:name, :role, :email, :contact, :salary, :city, :state, :country)');
			$stmt->execute(array(
				':name' => $_POST['name'],
				':role' => $_POST['role'],
				':email' => $_POST['email'],
				':contact' => $_POST['contact'],
				':salary' => $_POST['salary'],
				':city' => $_POST['city'],
				':state' => $_POST['state'],
				':country' => $_POST['country'],
			));



			//redirect to index page
			header('Location: view_employee.php?action=joined');
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
				<h2>Customer registration</h2>
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
					echo "<h2 class='bg-success'>Employee registration successful.</h2>";

				}

				?>

				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Employee Name" value="<?php if(isset($error)){ echo $_POST['name']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="role" id="role" class="form-control input-lg" placeholder="Employee Role" value="<?php if(isset($error)){ echo $_POST['role']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Employee Email" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="contact" id="contact" class="form-control input-lg" placeholder="Employee Contact no" value="<?php if(isset($error)){ echo $_POST['contact']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="salary" id="salary" class="form-control input-lg" placeholder="Employee salary" value="<?php if(isset($error)){ echo $_POST['salary']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="city" id="city" class="form-control input-lg" placeholder="Employee city" value="<?php if(isset($error)){ echo $_POST['city']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="state" id="state" class="form-control input-lg" placeholder="Employee State" value="<?php if(isset($error)){ echo $_POST['state']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="country" id="country" class="form-control input-lg" placeholder="Employee Country" value="<?php if(isset($error)){ echo $_POST['country']; } ?>" tabindex="1">
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
