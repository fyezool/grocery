<?php
//including the database connection file
require('includes/config.php');

//getting id of the data from url
$id = $_GET['emp_id'];

//deleting the row from table
$sql = "DELETE FROM employees WHERE emp_id=:emp_id";
$query = $db->prepare($sql);
$query->execute(array(':emp_id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:view_employee.php");
?>
