<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Question Paper | ADMIN</title>
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
			<h1>Question Paper</h1>
			<div class="prtl">
				<table>
						<tbody class="text-center">
							<tr>
								<th>Subject Title</th>
								<th>Department</th>
								<th>Faculty</th>
								<th>Semester</th>
								<th>Session</th>
								<th>UploadTime</th>
								<th>Download Link</th>
							</tr>
							<tr>
								<td>TCS 401</td>
								<td>CSE</td>
								<td>Vivek Kumar</td>
								<td>4</td>
								<td>1</td>
								<td>30-July-2018 12:58:00 AM</td>
								<td><a href="#" id="dwn">Download</a></td>
							</tr>							
							
						</tbody>

					</table>
			</div>
		</div>
	</div>	
	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>