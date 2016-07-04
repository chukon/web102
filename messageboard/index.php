<html>
<head>
<title>Contacts</title>
</head>
<body>
<center>
<h1>My GuestBook</h1>
<FORM NAME="People" ACTION="contact.php" METHOD="POST">
<table border="1" width="400">
<tr>
<td>First Name</td>
<td><INPUT TYPE="text" NAME="fname" SIZE=43></td>
</tr>
<tr>
<td>Last Name</td>
<td><INPUT TYPE="text" NAME="lname" SIZE=43></td>
</tr>
<tr>
<td>Email</td>
<td><INPUT TYPE="text" NAME="email" SIZE=43></td>
</tr>
<tr>
<td>Message</td>
<td><textarea name="msg" style="width:280px; height:75px;">Enter message here...</textarea></td>
</tr>
</table> 
<P><INPUT TYPE="submit" VALUE="Add Contact"></P>
</FORM>
</body>
</html>
<?php
//see if people table exists, if not create
    
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");

$check = mysqli_query ($link, "SELECT * FROM `people` LIMIT 0,1"); 
if ($check){
// query was legal and table exist
}else{
// something wrong, so:
// create the table
$peoples = "CREATE TABLE people(
  people_id int(11) NOT NULL auto_increment, 
  people_fname varchar(32) NOT NULL, 
  people_lname varchar(32) NOT NULL,
  people_email varchar(32) NOT NULL,
  people_msg varchar(255) NOT NULL,
  PRIMARY KEY  (people_id))";
  $results = mysqli_query($link, $peoples)
  or die (mysqli_error());
}


//query all of people table
$query="SELECT * FROM people";
$result=mysqli_query($link, $query);

mysqli_close($link);
//first row
echo "<table border='1' CELLPADDING=5 width='400' STYLE='font-size:13px'>";
echo "<tr><td><H3>First Name</h3></td>";
echo "<td><H3>Last Name</H3></td>";
echo "<td><H3>Email</H3></td>";
echo "<td><H3>Message</H3></td>";
echo "<td><H3>Edit</H3></td></tr>";
//second row
// keeps getting the next row until there are no more to get
while ($row = mysqli_fetch_array($result)) {
// Print out the contents of each row into a table
echo "<tr><td>";
echo $row['people_fname'];
echo "</td><td>";
echo $row['people_lname'];
echo "</td><td>";
echo $row['people_email'];
echo "</td><td>";
echo $row['people_msg'];
echo "</td><td>";
echo '<a href="edit.php?id='.$row['people_id'].'">Edit</a>';
echo "</td></tr>";
}
echo "</table>";
?>
</center>