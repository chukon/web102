<?php
//Turn on buffering, no output sent but stored internallu
ob_start(); 
session_start();
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");
$tbl_name="members"; // Table name
// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$mypage = $_SESSION['page'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
//http://php.net/manual/en/function.mysql-real-escape-string.php
$myusername = mysqli_real_escape_string($link,$myusername);
$mypassword = mysqli_real_escape_string($link,$mypassword);
$sql="SELECT * FROM $tbl_name WHERE Members_Username='$myusername' and Members_Password='$mypassword'";
$result=mysqli_query ($link, $sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
echo $page;
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
header($mypage);
}
else {
echo "Wrong Username or Password";
}
//turn off buffering
ob_end_flush();
?>