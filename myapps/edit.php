<?php
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");
//get id from index
$id=$_GET["id"];
// Ask the database for the information from the links table
$sql = "SELECT * FROM apps WHERE apps_id=$id";
$result = mysqli_query($link,$sql);
$num = mysqli_fetch_array($result);
?>
<h1>Edit Post</h1>
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $num['apps_id']?>">
First Name:&nbsp&nbsp<input type="text" name="email" value="<?php echo $num['apps_email']?>"><br>
Last Name:&nbsp&nbsp<input type="text" name="appname" value="<?php echo $num['apps_appname']?>"><br>
Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="applink" value="<?php echo $num['apps_link']?>"><br>
Message:<br><textarea name="appdesc" style="width:280px; height:75px;"><?php echo $num['apps_desc']?></textarea><br>
<input type="submit" name="submit" value="submit">
</form>
<? 
?>