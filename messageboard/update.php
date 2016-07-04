<?PHP
//Update link to database
$link = mysqli_connect("localhost", "ckonkol", "ckonkol", "ckonkol");

	  $id = $_POST["id"];
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
       $msg = $_POST["msg"];

      $sql = "UPDATE people SET people_fname='$fname',people_lname='$lname',people_email='$email', people_msg='$msg' WHERE people_id=$id";

      $result = mysqli_query($link, $sql); 
	  header('refresh:4;url=index.php');
	  echo "Updating...please wait"; 
?>