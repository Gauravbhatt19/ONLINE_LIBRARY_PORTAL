<?php
$conn=mysqli_connect("localhost","root","","internal_exam_portal");
$fn=mysqli_escape_string($conn,$_POST["frst-name"]);
$ln=mysqli_escape_string($conn,$_POST["lst-name"]);
$brnch=mysqli_escape_string($conn,$_POST["brnch"]);
$id=mysqli_escape_string($conn,$_POST["Id"]);
$rno=mysqli_escape_string($conn,$_POST["rno"]);
$pass=mysqli_escape_string($conn,$_POST["cpass"]);
$pass= password_hash($pass, PASSWORD_DEFAULT);
$batch=mysqli_escape_string($conn,$_POST["batch"]);
$csem=mysqli_escape_string($conn,$_POST["csem"]);



$qry="INSERT INTO student_unverified (fname,lname,branch,stud_id,roll,pass,batch,current_sem) VALUES ('{$fn}','{$ln}','{$brnch}','{$id}','{$rno}','{$pass}','{$batch}','{$csem}')";

$result=mysqli_query($conn,$qry);
if($result)
{ echo "Hello ".$fn." ".$ln." , Succesfully Registered";
}
else
{	$first=mysqli_error($conn);
	$second='Duplicate';
	if( (strpos($first,$second) !== false)) {
	echo "Duplicate Entry";
}
else {
	echo "Some Error.!";}
}
// echo "first name:".$_POST["frst-name"]." <br />";
// echo "last name:".$_POST["lst-name"]." <br />";
// echo "brnch:".$_POST["brnch"]." <br />"; 
// echo "id:".$_POST["Id"]." <br />";
// echo "rno:".$_POST["rno"]." <br />";
// echo "pass:".$_POST["pass"]." <br />";
// echo "cpass:".$_POST["cpass"]." <br />";
// echo "batch:".$_POST["batch"]." <br />";
// echo "csem:".$_POST["csem"];




?>