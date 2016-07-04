<?php
//update link
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");

$UpdateDB = "INSERT INTO people (people_fname, people_lname,
people_email, people_msg) VALUES ('". $_POST['fname'] . "',
'". $_POST['lname'] . "',
'". $_POST['email'] . "',
'". $_POST['msg'] . "')";
$results = mysqli_query($link,$UpdateDB) or die(mysql_error());
header("location:index.php");
?>
