<?php
//including the database connection file
require('includes/config.php');

//fetching data in descending order (lastest entry first)
$result = $db->query("SELECT * FROM Feedback ORDER BY fb_id DESC");
?>

<html>
<head>
	<title>Customer</title>
</head>

<body>

<a href="memberpage.php">back to admin page</a><br/><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Contact</td>
		<td>Email</td>
		<td>Comment</td>


	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
		echo "<td>".$row['fb_name']."</td>";
		echo "<td>".$row['fb_contact']."</td>";
		echo "<td>".$row['fb_email']."</td>";
		echo "<td>".$row['comment']."</td>";

	}
	?>
	</table>
</body>
</html>
