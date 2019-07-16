<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin | EXAM PORTAL</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="icon" href="/img/logo.png" type="image/png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<header>
		<div class="logo">
			<img src="/img/logo.png">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1>
		</div>
		<div class="menu">
			<nav>
				<a class="st blkhvr" href="../">Home</a>
				<a class="st blkhvr" href="../student/">Student</a>
				<a class="st blkhvr" href="../faculty/">Faculty</a>
			</nav>
		</div>
	</header>
			<div class="frmm">
	      	<h1>Login</h1>
	      	<form id="frm1" action="_login.php" method="POST">
	        		<div>
	      			<label for="Id">Admin Id:</label>
	      		<input type="text" name="adm_id" id="Id" placeholder="Admin Id">
	      		</div>	      		
	      		<div>
	      			<label for="pass">Password:</label>
	      		<input type="password" name="pass" id="pass" placeholder="Password">
	      		</div>
	      			   
	      		<span class="spc">
	      			<input type="submit" name="submit" value="Login" class="btn">
	      		</span>	      		
	      	</form>
	</div>	
	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>