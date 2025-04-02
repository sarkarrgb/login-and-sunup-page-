<?php

session_start();

define('LOCALHOST', 'localhost');
define('ROOT', 'root');
define('PASSWORD', '');
define('DATABASE', 'login_db');
define('SITEURL', 'http://localhost/php.ac/');


$conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE);
 
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>