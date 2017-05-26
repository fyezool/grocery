<?php
// including the database connection file
require('includes/config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];

	// checking empty fields
	if(empty($name) || empty($email) || empty($contact) || empty($city) || empty($state) || empty($country))
	{

		if(empty($name))
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($email))
		{
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($contact))
		{
			echo "<font color='red'>Contact field is empty.</font><br/>";
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
		$sql = "UPDATE customers SET cust_name=:cust_name, cust_email=:cust_email, cust_contact=:cust_contact, cust_city=:cust_city, cust_state=:cust_state, cust_country=:cust_country WHERE cust_id=:cust_id";
		$query = $db->prepare($sql);

		$query->bindparam(':cust_id', $id);
		$query->bindparam(':cust_name', $name);
		$query->bindparam(':cust_email', $email);
		$query->bindparam(':cust_contact', $contact);
		$query->bindparam(':cust_city', $city);
		$query->bindparam(':cust_state', $state);
		$query->bindparam(':cust_country', $country);
		$query->execute();

		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));

		//redirectig to the display page. In our case, it is index.php
		header("Location: view_customer.php");
	}
}

?>
<?php
//getting id from url
$id = $_GET['cust_id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM customers WHERE cust_id=:cust_id";
$query = $db->prepare($sql);
$query->execute(array(':cust_id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$name = $row['cust_name'];
	$email = $row['cust_email'];
	$contact = $row['cust_contact'];
	$city = $row['cust_city'];
	$state = $row['cust_state'];
	$country = $row['cust_country'];

}
 require('layout/header.php');
?>

<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="view.php">View all customers information</a>
	<br/><br/>

	<form name="form1" method="post" action="edit_customer.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
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
				<td><input type="hidden" name="id" value=<?php echo $_GET['cust_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
