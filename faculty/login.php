<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Faculty Area | EXAM PORTAL </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/png" href="../img/logo.png">
	<script src="../script.js"></script>
</head>
<body>
	<header class="header1">
		<div class="logo"><img src="../img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1></div>
		<nav class="men">
			<h1>Faculty Area</h1>
			<div onclick="menu('stud')">	
					<a href="javascript:void(0)" class="cng" >Faculty <span id="chngd" class="chnges">&#9207;</span></a>
			<ul class="hide">
				<li><a href="../">Home</a></li>
				<li><a href="#" onclick="chnge1('log')">Login</a></li>
				<li><a href="#" onclick="chnge1('regis')">Register</a></li>
			</ul>
			</div>	
		</nav>
	</header>	<header>
		<div class="logo">
			<img src="../img/logo.png">
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
					<span class="green">Active </span></div>
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