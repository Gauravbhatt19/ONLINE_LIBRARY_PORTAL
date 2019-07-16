<?php
$conn=mysqli_connect('localhost','root','','library_thdcihet'); 
$nme=mysqli_escape_string($conn,$_POST['nm']);
$id=mysqli_escape_string($conn,$_POST['id']);
$pss=mysqli_escape_string($conn,$_POST['pss']);
$pss=password_hash($pss,PASSWORD_DEFAULT);
$qry="INSERT INTO users(id,pass,name) VALUES('{$id}','{$pss}','{$nme}')";
$result=mysqli_query($conn,$qry);
if($result){
	echo"<script> alert('Success...!');</script>";
}
else
{echo"<script> alert('Some Error...!');</script>";
}

?>