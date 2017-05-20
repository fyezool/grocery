<?php
//including the database connection file
require('includes/config.php');

//fetching data in descending order (lastest entry first)
$result = $db->query("SELECT * FROM customers ORDER BY cust_id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="register-customer.php">Add New Data</a>
<a href="memberpage.php">back to admin page</a><br/><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Customer Name</td>
		<td>Customer Address</td>
		<td>Customer Email</td>
		<td>Customer Contact</td>

	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['cust_name']."</td>";
		echo "<td>".$row['cust_address']."</td>";
		echo "<td>".$row['cust_email']."</td>";
		echo "<td>".$row['cust_contact']."</td>";	
echo "<td><a href=\"edit.php?cust_id=$row[cust_id]\">Edit</a> | <a href=\"delete.php?cust_id=$row[cust_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
