<?php
session_start();
$page = 'location:../index.php';
$_SESSION['page'] = $page;
if(!isset($_SESSION['myusername'])){
include("members/main_login.php"); 
}
else
{
include("members/login_success.php"); 
}
?>