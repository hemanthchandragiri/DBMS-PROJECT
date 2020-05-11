<?php
$url='localhost';
$username='hemanth';
$password='';
$dbname='testproject';
$conn=mysqli_connect($url,$username,$password,$dbname);//basically connects with the database using the defined variables above
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_error());
}
?>