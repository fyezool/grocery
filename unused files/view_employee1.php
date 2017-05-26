<?php
//including the database connection file
require('includes/config.php');

//fetching data in descending order (lastest entry first)
$result = $db->query("SELECT * FROM employees ORDER BY emp_id DESC");
?>

<html>
<head>
	<title>Employee</title>
</head>

<body>
<a href="register_employee.php">Add New Data</a> ||
<a href="memberpage.php">back to admin page</a><br/><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Role</td>
		<td>Email</td>
		<td>Contact</td>
		<td>Salary</td>
		<td>City</td>
		<td>State</td>
		<td>Country</td>

	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['emp_name']."</td>";
		echo "<td>".$row['emp_role']."</td>";
		echo "<td>".$row['emp_email']."</td>";
		echo "<td>".$row['emp_contact']."</td>";
		echo "<td>".$row['emp_salary']."</td>";
		echo "<td>".$row['emp_city']."</td>";
		echo "<td>".$row['emp_state']."</td>";
		echo "<td>".$row['emp_country']."</td>";
echo "<td><a href=\"edit_employee.php?emp_id=$row[emp_id]\">Edit</a> | <a href=\"delete_employee.php?emp_id=$row[emp_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
