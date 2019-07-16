<?php
session_start();
$conn=mysqli_connect('localhost','root','','internal_exam_portal');
if($_POST['todo']=='up'){
	$val=1;
}
else{
$val=0;
}
						$qry="UPDATE control_data SET value='{$val}' WHERE name='portal_status'";
						$result=mysqli_query($conn,$qry);
?>