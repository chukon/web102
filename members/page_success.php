<?php
//set the level of error reporting
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
session_start();
if(!isset($_SESSION['myusername'])){
header("location:../index.php");
}
?>