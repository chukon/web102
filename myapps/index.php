<html>
<head>
<title>My Apps</title>
</head>
<body>
<center>
<h1>My Apps</h1>
<FORM NAME="Apps" ACTION="contact.php" METHOD="POST">
<table border="1" width="400">
<tr>
<td>Email</td>
<td><INPUT TYPE="text" NAME="email" SIZE=43></td>
</tr>
<tr>
<td>App Name</td>
<td><INPUT TYPE="text" NAME="appname" SIZE=43></td>
</tr>
<tr>
<td>App Link</td>
<td><INPUT TYPE="text" NAME="applink" SIZE=43></td>
</tr>
<tr>
<td>App Description</td>
<td><textarea name="appdesc" style="width:280px; height:75px;">Enter app description here...</textarea></td>
</tr>
</table> 
<P><INPUT TYPE="submit" VALUE="Add App"></P>
</FORM>
</body>
</html>
<?php
//see if people table exists, if not create
    
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");

$check = mysqli_query ($link, "SELECT * FROM `apps` LIMIT 0,1"); 
if ($check){
// query was legal and table exist
}else{
// something wrong, so:
// create the table
$apps = "CREATE TABLE apps(
  apps_id int(11) NOT NULL auto_increment, 
  apps_email varchar(32) NOT NULL, 
  apps_appname varchar(32) NOT NULL,
  apps_link varchar(32) NOT NULL,
  apps_desc varchar(255) NOT NULL,
  PRIMARY KEY  (apps_id))";
  $results = mysqli_query($link, $apps)
  or die (mysqli_error());
}


//query all of people table
$query="SELECT * FROM apps";
$result=mysqli_query($link, $query);

mysqli_close($link);
//first row
echo "<table border='1' CELLPADDING=5 width='400' STYLE='font-size:13px'>";
echo "<tr><td><H3>Email</h3></td>";
echo "<td><H3>App Name</H3></td>";
echo "<td><H3>App Link</H3></td>";
echo "<td><H3>App Decription</H3></td>";
echo "<td><H3>Edit</H3></td></tr>";
//second row
// keeps getting the next row until there are no more to get
while ($row = mysqli_fetch_array($result)) {
// Print out the contents of each row into a table
echo "<tr><td>";
echo $row['apps_email'];
echo "</td><td>";
echo $row['apps_appname'];
echo "</td><td>";
echo $row['apps_link'];
echo "</td><td>";
echo $row['apps_desc'];
echo "</td><td>";
echo '<a href="edit.php?id='.$row['apps_id'].'">Edit</a>';
echo "</td></tr>";
}
echo "</table>";
?>
</center>