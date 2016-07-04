<?PHP
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");

	  $id = $_POST["id"];
      $email = $_POST["email"];
      $name = $_POST["appname"];
      $applink = $_POST["applink"];
       $desc= $_POST["appdesc"];

      $sql = "UPDATE apps SET apps_email='$email',apps_appname='$name',apps_link='$applink', apps_desc='$desc' WHERE apps_id=$id";

      $result = mysqli_query($link, $sql); 
	  header('refresh:4;url=index.php');
	  echo "Updating...please wait"; 
?>