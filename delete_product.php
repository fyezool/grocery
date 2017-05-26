<?php
//including the database connection file
require('includes/config.php');

//getting id of the data from url
$id = $_GET['pro_id'];

//deleting the row from table
$sql = "DELETE FROM products WHERE pro_id=:pro_id";
$query = $db->prepare($sql);
$query->execute(array(':pro_id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:view_product.php");
?>
