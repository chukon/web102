<?php
//update link
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");

$UpdateDB = "INSERT INTO apps (apps_email, apps_appname,
apps_link, apps_desc) VALUES ('". $_POST['email'] . "',
'". $_POST['appname'] . "',
'". $_POST['applink'] . "',
'". $_POST['appdesc'] . "')";
$results = mysqli_query($link,$UpdateDB) or die(mysql_error());
header("location:index.php");
?>
