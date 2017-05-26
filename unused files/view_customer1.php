<?php
//including the database connection file
require('includes/config.php');

//fetching data in descending order (lastest entry first)
$result = $db->query("SELECT * FROM customers ORDER BY cust_id DESC");
?>

<html>
<head>
	<title>Customer</title>
</head>

<body>
<a href="register_customer.php">Add New Data</a> ||
<a href="memberpage.php">back to admin page</a><br/><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Email</td>
		<td>Contact</td>
		<td>City</td>
		<td>State</td>
		<td>Country</td>

	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['cust_name']."</td>";
		echo "<td>".$row['cust_email']."</td>";
		echo "<td>".$row['cust_contact']."</td>";
		echo "<td>".$row['cust_city']."</td>";
		echo "<td>".$row['cust_state']."</td>";
		echo "<td>".$row['cust_country']."</td>";
echo "<td><a href=\"edit_customer.php?cust_id=$row[cust_id]\">Edit</a> | <a href=\"delete_customer.php?cust_id=$row[cust_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
