<?php
session_start();
unset($_SESSION["user"]);//session starts with setting username and password , here it unsets the username and password
unset($_SESSION["password"]);
header("Location:login.html");
?>
