<?php
session_start();
if(!isset($_SESSION['id']))
{
header("location: index.php");
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin | EXAM PORTAL</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="icon" href="/img/logo.png" type="image/png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<header>
		<div class="logo">
			<img src="/img/logo.png">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1>
		</div>
		<div class="menu">
			<nav>
				<div style="grid-column:1/3" class="st"><marquee>Hello User</marquee></div>
				<div class="st"><a href="#" onclick="drp()">Menu &#9207;</a>
					<ul class="hdn" id="ddp">
			<li><a href="chngepswd.php">Change Password</a></li>
			<li><a href="index.php">LogOut</a></li>
		</ul></div>
			</nav>
		
		</div>
	</header>
			<div class="center-div">
				<div class="frmm box left-box">
			<h1>Control Panel</h1>
			<ul>
				<li><a href="verify.php">Verify Faculties</a></li>
				<li><a href="searchstud.php">Find Student</a></li>
				<li><a href="editnotice.php">Edit Notices</a></li>
				<li><a href="managefaculty.php">Manage Faculty</a></li>
				<li><a href="debar.php">Debarred List</a></li>
				<li><a href="question.php">Question Papers</a></li>	
			</ul>
		</div>
		<div class="frmm box">
			<h1>Portal Details</h1>
			<div class="prtl">
					<div> <span>Portal Status : </span>
						<?php 
						$conn=mysqli_connect('localhost','root','','internal_exam_portal');
						$qry="SELECT * FROM control_data WHERE name='portal_status'";
						$result=mysqli_query($conn,$qry);
						$resultfetch=mysqli_fetch_assoc($result);
						if($resultfetch['value']==1){
					echo"<a href='javascript:void(0)' onclick='portal_down();' ><span class='green'>Active </span></a>";
					}
					else
						{	echo"<a href='javascript:void(0)' onclick='portal_up();' name='down'><span class='red'>Down </span></a>";
					
						}	?>
				</div>
					<div class="ptrn">
					<span class="blue">Verified Accounts </span>
					<span class="red"> Unverified Accounts </span>
					</div>
					<div class="mx"> <span> Students</span>
					 <span> Faculties</span> <span> Students </span>
					<span> Faculties </span></div>
					<div class="mx"> <span class="blue"> 10</span><span  class="blue"> 30</span>
					<span  class="red"> 4 </span>
					<span  class="red"> 2 </span></div>
				</div>
		</div>
	</div>	
	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>