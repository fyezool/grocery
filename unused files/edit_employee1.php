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

?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="view_employee.php">View all employee information</a>
	<br/><br/>

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
</body>
</html>

<?php
//include header template
require('layout/footer.php');
?>
