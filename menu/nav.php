 <?php
session_start();
if(isset($_SESSION['myusername'])){
include("nav_members.php"); 
}else{
include("nav_public.php");    
}
?>