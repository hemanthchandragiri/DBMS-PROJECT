<?php
define('DB_SERVER','localhost');
define('DB_USER','hemanth');
define('DB_PASS' ,'');
define('DB_NAME', 'testproject');
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>