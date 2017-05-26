<?php
//including the database connection file
require('includes/config.php');

//getting id of the data from url
$id = $_GET['supp_id'];

//deleting the row from table
$sql = "DELETE FROM supplier WHERE supp_id=:supp_id";
$query = $db->prepare($sql);
$query->execute(array(':supp_id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:view_supplier.php");
?>
