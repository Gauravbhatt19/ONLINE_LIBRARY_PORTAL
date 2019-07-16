<?php
$flg='0';
$conn=mysqli_connect("localhost",'root','','library_thdcihet');
$search=mysqli_escape_string($conn,$_POST['search']);
$qry="SELECT * from books WHERE title='$search'";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($result);
if($row)
{
	$flg='1';
}
$link="/thumbnails/".$row['BID'].".jpg";
$thmb=$link;
$bid=$row['BID'];
$ttl=$row['title'];
$noc=$row['no_of_copies'];
$athr=$row['author'];
$descp=$row['decription'];
	echo '{"flg":"'.$flg.'","bid":"'.$bid.'","thmb":"'.$thmb.'","ttl":"'.$ttl.'","noc":"'.$noc.'","athr":"'.$athr.'","descp":"'.$descp.'"}';
?>