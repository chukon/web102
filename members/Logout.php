<?php
session_start();
session_destroy();
?>
<html>
<head>
<meta http-equiv="REFRESH" content="3;url=../index.php">
<title>Successfully Logged Out</title>
</head>
<body>
You have logged out successfully.
<br><br>
<a href="../index.php">Login Again</a>
</body>
</html>