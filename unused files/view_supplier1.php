<?php
//including the database connection file
require('includes/config.php');

//fetching data in descending order (lastest entry first)
$result = $db->query("SELECT * FROM supplier ORDER BY supp_id DESC");
?>

<html>
<head>
	<title>Product</title>
</head>

<body>
<a href="register_supplier.php">Add New Data</a> ||
<a href="memberpage.php">Back to admin page</a><br/><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Supplier Name</td>
		<td>Supplier Type</td>
		<td>Supplier Email</td>
		<td>Supplier Contact</td>
		<td>Supplier City</td>
		<td>Supplier State</td>

	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['supp_name']."</td>";
		echo "<td>".$row['supp_type']."</td>";
		echo "<td>".$row['supp_email']."</td>";
		echo "<td>".$row['supp_contact']."</td>";
		echo "<td>".$row['supp_city']."</td>";
		echo "<td>".$row['supp_state']."</td>";
echo "<td><a href=\"edit_supplier.php?supp_id=$row[supp_id]\">Edit</a> | <a href=\"delete_supplier.php?supp_id=$row[supp_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
