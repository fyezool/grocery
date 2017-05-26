<?php
// including the database connection file
require('includes/config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$name=$_POST['name'];
	$type=$_POST['type'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$state=$_POST['state'];

	// checking empty fields
	if(empty($name) || empty($type) || empty($email) || empty($contact) || empty($city) || empty($state))
	{

		if(empty($name))
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($type))
		{
			echo "<font color='red'>Supply type is empty.</font><br/>";
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

	} else

	{
		//updating the table
		$sql = "UPDATE supplier SET supp_name=:supp_name, supp_type=:supp_type, supp_email=:supp_email, supp_contact=:supp_contact, supp_city=:supp_city, supp_state=:supp_state WHERE supp_id=:supp_id";
		$query = $db->prepare($sql);

		$query->bindparam(':supp_id', $id);
		$query->bindparam(':supp_name', $name);
		$query->bindparam(':supp_type', $type);
		$query->bindparam(':supp_email', $email);
		$query->bindparam(':supp_contact', $contact);
		$query->bindparam(':supp_city', $city);
		$query->bindparam(':supp_state', $state);
		$query->execute();

		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));

		//redirectig to the display page. In our case, it is index.php
		header("Location: view_supplier.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['supp_id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM supplier WHERE supp_id=:supp_id";
$query = $db->prepare($sql);
$query->execute(array(':supp_id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
		$name = $row['supp_name'];
		$type = $row['supp_type'];
		$email = $row['supp_email'];
		$contact = $row['supp_contact'];
		$city = $row['supp_city'];
		$state = $row['supp_state'];
	}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="view_supplier.php">View all supplier information</a>
	<br/><br/>

	<form name="form1" method="post" action="edit_supplier.php">
		<table border="0">
			<tr>
				<td>Supplier Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Supplier type</td>
				<td><input type="text" name="type" value="<?php echo $type;?>"></td>
			</tr>
			<tr>
				<td>Supplier email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>Product contact</td>
				<td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
			</tr>
			<tr>
				<td>Supplier city</td>
				<td><input type="text" name="city" value="<?php echo $city;?>"></td>
			</tr>
			<tr>
				<td>Supplier State</td>
				<td><input type="text" name="state" value="<?php echo $state;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['supp_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
