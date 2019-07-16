<?php
$conn=mysqli_connect('localhost','root','','library_thdcihet'); 
$id=mysqli_escape_string($conn,$_POST['uid']);
$pass=mysqli_escape_string($conn,$_POST['pass']);
$qry="SELECT * FROM users WHERE id='{$id}'";
$result=mysqli_query($conn,$qry);
if ( $result->num_rows== 0)
{ 
 echo "Error..!";
}
else {  $result_id = $result->fetch_assoc();
if(password_verify($pass,$result_id['pass']))
{       
		$_SESSION['id'] = $result_id['id'];
        $_SESSION['name'] = $result_id['name'];
        $_SESSION['logged_in'] = true;
   		echo "<marquee>Hello...".$_SESSION['name']."</marquee>";
    }
  else {
 
 echo "Error2..!";   }
}

?>	