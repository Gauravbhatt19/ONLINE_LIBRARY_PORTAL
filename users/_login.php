<?php
session_start();
$conn=mysqli_connect("localhost","root","","library_thdcihet");
$id=mysqli_escape_string($conn,$_POST["Id"]);
$pass=mysqli_escape_string($conn,$_POST["pass"]);
$result=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
if ( $result->num_rows== 0 )
{ 
 	header("location: error.php");
}
else {  $result_id = $result->fetch_assoc();
if(password_verify($pass,$result_id['pass']))
{       
		$_SESSION['id'] = $result_id['id'];
        $_SESSION['name'] = $result_id['name'];
        $_SESSION['logged_in'] = true;
    	   header("location: ../index.php");
    }
  else {
      header("location: error.php");
    }
}

?>