<?php
//set the level of error reporting
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
session_start();
if(!isset($_SESSION['myusername'])){
header("location:../index.php");
}
echo '<font color="red">';
echo $_SESSION['myusername'];
?>
<html>
<body>
, you have Logged in Successful | <a href="members/Logout.php">logout</a></a>
</font>
</body>
</html>