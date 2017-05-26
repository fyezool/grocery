<?php
// including the database connection file
require('includes/config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$type = $_POST['type'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];

	// checking empty fields
	if(empty($name) || empty($price) || empty($description) || empty($quantity))
	{

		if(empty($type))
		{
			echo "<font color='red'>Type field is empty.</font><br/>";
		}

		if(empty($name))
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($price))
		{
			echo "<font color='red'>Price field is empty.</font><br/>";
		}

		if(empty($description))
		{
			echo "<font color='red'>Description field is empty.</font><br/>";
		}

		if(empty($quantity))
		{
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}

	} else

	{
		//updating the table
		$sql = "UPDATE products SET pro_type=:pro_type, pro_name=:pro_name, pro_price=:pro_price, pro_description=:pro_description, quantity=:quantity WHERE pro_id=:pro_id";
		$query = $db->prepare($sql);

		$query->bindparam(':pro_id', $id);
		$query->bindparam(':pro_type', $type);
		$query->bindparam(':pro_name', $name);
		$query->bindparam(':pro_price', $price);
		$query->bindparam(':pro_description', $description);
		$query->bindparam(':quantity', $quantity);
		$query->execute();

		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));

		//redirectig to the display page. In our case, it is index.php
		header("Location: view_product.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['pro_id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM products WHERE pro_id=:pro_id";
$query = $db->prepare($sql);
$query->execute(array(':pro_id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$type = $row['pro_type'];
	$name = $row['pro_name'];
	$price = $row['pro_price'];
	$description = $row['pro_description'];
	$quantity = $row['quantity'];

}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="view_product.php">View all product information</a>
	<br/><br/>

	<form name="form1" method="post" action="edit_product.php">
		<table border="0">
			<tr>
				<td>Product Type</td>
				<td><input type="type" name="type" value="<?php echo $type;?>"></td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><input type="text" name="price" value="<?php echo $price;?>"></td>
			</tr>
			<tr>
				<td>Product Description</td>
				<td><input type="text" name="description" value="<?php echo $description;?>"></td>
			</tr>
			<tr>
				<td>Product Quantity</td>
				<td><input type="text" name="quantity" value="<?php echo $quantity;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['pro_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
