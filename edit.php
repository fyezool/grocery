<?php
// including the database connection file
require('includes/config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];

	// checking empty fields
	if(empty($name) || empty($email) || empty($address) || empty($contact))
	{

		if(empty($name))
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($email))
		{
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($address))
		{
			echo "<font color='red'>Address field is empty.</font><br/>";
		}

		if(empty($contact))
		{
			echo "<font color='red'>Contact field is empty.</font><br/>";
		}

	} else

	{
		//updating the table
		$sql = "UPDATE customers SET cust_name=:cust_name, cust_email=:cust_email, cust_address=:cust_address, cust_contact=:cust_contact WHERE cust_id=:cust_id";
		$query = $db->prepare($sql);

		$query->bindparam(':cust_id', $id);
		$query->bindparam(':cust_name', $name);
		$query->bindparam(':cust_email', $email);
		$query->bindparam(':cust_address', $address);
		$query->bindparam(':cust_contact', $contact);
		$query->execute();

		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));

		//redirectig to the display page. In our case, it is index.php
		header("Location: view.php");
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
	$address = $row['cust_address'];
	$contact = $row['cust_contact'];

}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="view.php">View all customers information</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
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
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address;?>"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['cust_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
