<?php
//including the database connection file
require('includes/config.php');

//getting id of the data from url
$id = $_GET['cust_id'];

//deleting the row from table
$sql = "DELETE FROM customers WHERE cust_id=:cust_id";
$query = $db->prepare($sql);
$query->execute(array(':cust_id' => $id));

//redirecting to the display page
header("Location:view_customer.php");
?>
