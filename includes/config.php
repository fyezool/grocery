<?php
ob_start();
session_start();



//database credentials for connections

//db host and related port
define('DBHOST','mysql');

//db username
define('DBUSER','root');
define('DBPASS','root');
define('DBNAME','grocery1');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);

	//PDO attributes
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');

$user = new User($db);
?>
