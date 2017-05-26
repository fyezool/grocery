<?php
//including the database connection file
require('includes/config.php');

//fetching data in descending order (lastest entry first)
$result = $db->query("SELECT * FROM products ORDER BY pro_type ASC");
?>

<html>
<head>
	<title>Product</title>
</head>

<body>
<a href="register_product.php">Add New Data</a> ||
<a href="memberpage.php">back to admin page</a><br/><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Product Type</td>
		<td>Product Name</td>
		<td>Product Price</td>
		<td>Product Member Price</td>
		<td>Product Description</td>
		<td>Product Quantity</td>

	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['pro_type']."</td>";
		echo "<td>".$row['pro_name']."</td>";
		echo "<td>".$row['pro_price']."</td>";
		echo "<td>".$row['pro_mem_price']."</td>";
		echo "<td>".$row['pro_description']."</td>";
		echo "<td>".$row['quantity']."</td>";
echo "<td><a href=\"edit_product.php?pro_id=$row[pro_id]\">Edit</a> | <a href=\"delete_product.php?pro_id=$row[pro_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
