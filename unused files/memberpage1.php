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
				<a href='view_customer.php'><img src="images/customer.ico">Customer
				<a href='view_employee.php'><img src="images/employee.png">Employee
				<a href='view_product.php'><img src="images/products.png">Product
				<a href='view_supplier.php'><img src="images/supplier.png">Supplier
				<a href='view_feedback.php'><img src="images/feedback.jpg">Feedback</br>
				<a href='view_supplying.php'><img src="images/stock.jpg">Stock
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
