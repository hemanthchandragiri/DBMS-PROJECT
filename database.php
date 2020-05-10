<?php
$url='localhost';
$username='hemanth';
$password='';
$dbname='testproject';
$conn=mysqli_connect($url,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_error());
}
?>