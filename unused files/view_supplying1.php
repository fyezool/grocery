<?php
//including the database connection file
require('includes/config.php');

//fetching data in descending order (lastest entry first)
$result = $db->query("SELECT supplying.stock_id, supplying.stock_date, supplying.stock_product, supplying.quantity, supplier.supp_name, employees.emp_name FROM supplying INNER JOIN employees ON supplying.emp_id = employees.emp_id INNER JOIN supplier on supplying.supp_id = supplier.supp_id");
?>

<html>
<head>
	<title>Customer</title>
</head>

<body>
<a href="memberpage.php">back to admin page</a><br/><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Stock ID</td>
		<td>Stock Date</td>
		<td>Stock Product</td>
		<td>Stock Quantity</td>
		<td>Supplier Name</td>
		<td>Employee Name</td>

	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['stock_id']."</td>";
		echo "<td>".$row['stock_date']."</td>";
		echo "<td>".$row['stock_product']."</td>";
		echo "<td>".$row['quantity']."</td>";
		echo "<td>".$row['supp_name']."</td>";
		echo "<td>".$row['emp_name']."</td>";

	}
	?>
	</table>
</body>
</html>
