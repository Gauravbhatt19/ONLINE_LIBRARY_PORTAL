<?php
$id="admin@123";
$pass="admin@123";
$pass=password_hash($pass, PASSWORD_DEFAULT);
$conn=mysqli_connect("localhost",'root','','internal_exam_portal');
$qry="INSERT INTO admin(id,pass) VALUES('{$id}','{$pass}')";
$result=mysqli_query($conn,$qry);
?>