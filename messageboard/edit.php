<?php
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");
//get id from index
$id=$_GET["id"];
// Ask the database for the information from the links table
$sql = "SELECT * FROM people WHERE people_id=$id";
$result = mysqli_query($link,$sql);
$num = mysqli_fetch_array($result);
?>
<h1>Edit Post</h1>
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $num['people_id']?>">
First Name:&nbsp&nbsp<input type="text" name="fname" value="<?php echo $num['people_fname']?>"><br>
Last Name:&nbsp&nbsp<input type="text" name="lname" value="<?php echo $num['people_lname']?>"><br>
Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" value="<?php echo $num['people_email']?>"><br>
Message:<br><textarea name="msg" style="width:280px; height:75px;"><?php echo $num['people_msg']?></textarea><br>
<input type="submit" name="submit" value="submit">
</form>
<? 
?>