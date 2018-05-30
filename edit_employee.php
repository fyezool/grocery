<?php
// including the database connection file
require('includes/config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$name=$_POST['name'];
	$role=$_POST['role'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$salary = $_POST['salary'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];

	// checking empty fields
	if(empty($name) || empty($role) || empty($email) || empty($contact) || empty($salary) || empty($city) || empty($state) || empty($country))
	{

		if(empty($name))
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($role))
		{
			echo "<font color='red'>Role field is empty.</font><br/>";
		}

		if(empty($email))
		{
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($contact))
		{
			echo "<font color='red'>Contact field is empty.</font><br/>";
		}

		if(empty($salary))
		{
			echo "<font color='red'>Salary field is empty.</font><br/>";
		}

		if(empty($city))
		{
			echo "<font color='red'>City field is empty.</font><br/>";
		}

		if(empty($state))
		{
			echo "<font color='red'>State field is empty.</font><br/>";
		}

		if(empty($country))
		{
			echo "<font color='red'>Country field is empty.</font><br/>";
		}

	} else

	{
		//updating the table
		$sql = "UPDATE employees SET emp_name=:emp_name, emp_role=:emp_role, emp_email=:emp_email, emp_contact=:emp_contact, emp_salary=:emp_salary, emp_city=:emp_city, emp_state=:emp_state, emp_country=:emp_country WHERE emp_id=:emp_id";
		$query = $db->prepare($sql);

		$query->bindparam(':emp_id', $id);
		$query->bindparam(':emp_name', $name);
		$query->bindparam(':emp_role', $role);
		$query->bindparam(':emp_email', $email);
		$query->bindparam(':emp_contact', $contact);
		$query->bindparam(':emp_salary', $salary);
		$query->bindparam(':emp_city', $city);
		$query->bindparam(':emp_state', $state);
		$query->bindparam(':emp_country', $country);
		$query->execute();

		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));

		//redirectig to the display page. In our case, it is index.php
		header("Location: view_employee.php");
	}
}
require('layout/header.php');
?>

<?php
//getting id from url
$id = $_GET['emp_id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM employees WHERE emp_id=:emp_id";
$query = $db->prepare($sql);
$query->execute(array(':emp_id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$name = $row['emp_name'];
	$role = $row['emp_role'];
	$email = $row['emp_email'];
	$contact = $row['emp_contact'];
	$salary = $row['emp_salary'];
	$city = $row['emp_city'];
	$state = $row['emp_state'];
	$country = $row['emp_country'];
}

require('layout/header.php');
?>




<!DOCTYPE html>
<html>
<head>
<title>Baseu Grocery Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i>+60 84-367 300</li>
        <li><i class="fa fa-envelope-o"></i>baseugrocer@gg.com</li>

      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Baseu Grocery Store</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Phone :</strong><br> +60 84-367 300</li>
        <li><strong>Tax :</strong><br> +60 84-367 301</li>
        <li><a class="btn" href="login.php">Admin Login</a></li>

      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="memberpage.php">Admin Page</a></li>
			<li class="active"><a href="view_employee.php">View Employee</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <!-- ################################################################################################ -->



			<form name="form1" method="post" action="edit_employee.php">
				<table border="0">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php echo $name;?>"></td>
					</tr>
					<tr>
						<td>Type</td>
						<td><input type="text" name="role" value="<?php echo $role;?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
					</tr>
					<tr>
						<td>Salary</td>
						<td><input type="text" name="salary" value="<?php echo $salary;?>"></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="city" value="<?php echo $city;?>"></td>
					</tr>
					<tr>
						<td>State</td>
						<td><input type="text" name="state" value="<?php echo $state;?>"></td>
					</tr>
					<tr>
						<td>Country</td>
						<td><input type="text" name="country" value="<?php echo $country;?>"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['emp_id'];?>></td>
						<td><input type="submit" name="update" value="Update"></td>
					</tr>
				</table>
			</form>


      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->

<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Contacts with Baseu</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          University Street &amp; 101, Sibu, Sarawak, 96000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +60 84-367 300<br></li>
        <li><i class="fa fa-fax"></i> +60 84-367 301</li>
        <li><i class="fa fa-envelope-o"></i> baseugrocer@gg.com</li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Newsletter</h6>
      <p class="btmspace-30">Keep in touch with the Baseu Grocery News and receive the latest updates of new products</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Baseu Grocery Store</a></p>

    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
