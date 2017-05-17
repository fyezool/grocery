<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2>Admin page - Welcome <?php echo $_SESSION['username']; ?></h2>
				<p><a href='register-customer.php'>Register New Customer</p>
				<p><a href='view-customer.php'>View customer</p>
				<p><a href='register-employee.php'>Register New Employee</p>
				<p><a href='view-employee.php'>View customer</p>
				<p><a href='register-product.php'>Register New Product</p>
				<p><a href='view-product.php'>View customer</p>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				
				
				
				
				
				
				
				
				
				
				<p><a href='logout.php'>Logout</a></p>
				<hr>

		</div>
	</div>


</div>

<?php 
//include header template
require('layout/footer.php'); 
?>
