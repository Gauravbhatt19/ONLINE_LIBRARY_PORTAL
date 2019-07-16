<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Manage Faculty | ADMIN</title>
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
			<h1>Manage Faculty</h1>
			<div class="prtl">
				<table>
						<tbody class="text-center">
							<tr>
								<th>Name</th>
								<th>Department</th>
								<th>Login ID</th>
								<th>Class Incharge</th>
								<th>Subject Alloted</th>
								<th>Last Login</th>
								<th>Action</th>
							</tr>
							<tr>
								<td>Vivek Kumar</td>
								<td>CSE</td>
								<td>vivek1234</td>
								<td>No</td>
								<td>TCS 202,TCS 401, TCS 301</td>
								<td>30-July-2018 12:58:00 AM</td>
								<td>Edit Profile</td>
							</tr>							
														<tr>
								<td>Vivek Kumar</td>
								<td>CSE</td>
								<td>vivek1234</td>
								<td>No</td>
								<td>TCS 202,TCS 401, TCS 301</td>
								<td>30-July-2018 12:58:00 AM</td>
								<td>Edit Profile</td>
							</tr>	
						</tbody>

					</table>
			</div>
		</div>
	</div>	
	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>