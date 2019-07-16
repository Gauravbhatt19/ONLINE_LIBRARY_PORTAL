<?php
session_start();
$conn=mysqli_connect("localhost","root","","internal_exam_portal");
$id=mysqli_escape_string($conn,$_POST["adm_id"]);
$pass=mysqli_escape_string($conn,$_POST["pass"]);
$result=mysqli_query($conn,"SELECT * FROM admin WHERE id='$id'");
if ( $result->num_rows== 0 )
{ 	header("location: error.php");
}
else {  $result_id = $result->fetch_assoc();
if(password_verify($pass,$result_id['pass']))
{       
		$_SESSION['id'] = $result_id['id'];
     header("location: login.php");
    }
  else {
    header("location: error.php");
    }
}

?>