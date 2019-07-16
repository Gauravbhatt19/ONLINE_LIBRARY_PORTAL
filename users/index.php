<!-- <?php 
// session_start();
// if(isset($_SESSION['id']))
// {
// 	if($_SESSION['type']=='student')
// 	{
// 		header('location:/student/login.php');
// 	}
// 	else
// 	{
// 	header('location:/faculty');
// 	}
// }
?> -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Users | Library </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/png" href="../img/logo.png">
	<script src="../script.js"></script>
</head>
<body>
	<header class="header1">
		<div class="logo"><img src="../img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1></div>
		<nav class="men">
			<h1>Online Library Portal</h1>
			<div onclick="menu('stud')">	
					<a href="javascript:void(0)" class="cng">Users <span id="chngd" class="chnges">&#9207;</span></a>
			<ul class="hide">
				<li><a href="../">Home</a></li>
				<li><a href="#" onclick="chnge('log')">Login</a></li>
				<li><a href="#" onclick="chnge('regis')">Register</a></li>
			</ul>
			</div>	
		</nav>
	</header>
	<div class="stbda">
			<div class="frmm">
	      	<h1 id="dd1">Login</h1>
	      	<form id="frm1" action="_login.php" method="POST">
	      		
	      		<div>
	      			<label for="Id">Id:</label>
	      		<input type="text" name="Id" id="Id" placeholder="Id">
	      		</div>	      		
	      		<div>
	      			<label for="pass">Password:</label>
	      		<input type="password" name="pass" id="pass" placeholder="Password">
	      		</div>
	      			   
	      		<span class="spc">
	      			<p><span class="rr">Not Registered Yet ?</span> <a href="#" onclick="chnge('regis')">Register now</a></p>
	      			<input type="submit" name="submit" value="Login" class="btn">
	      		</span>	      		
	      	</form>
	      	<form id="frm2" action="_regstud.php" method="POST">
	      		<div>
	      		<label for="frst-name">First Name:</label>
	      		<input type="text" name="frst-name" placeholder="First Name" id="frstname" onkeyup="check1(this.value)" required>
	      		<p id="msg1" hidden></p>
	      		</div>
	      		<div>
	      			<label for="lst-name">Last Name:</label>
	      		<input type="text" name="lst-name"  placeholder="Last Name" id="lstname" onkeyup="check2(this.value)" required>
	      		<p id="msg2" hidden></p>
	      		</div>	      		
	      		<div>
	      			<label for="Id">Id:</label>
	      		<input type="text" name="Id" id="Id" placeholder="Id" required>
	      		</div>	      		      		
	      		<div>
	      			<label for="pass">Password:</label>
	      		<input type="password" name="pass" id="pass" placeholder="Password" required>
	      		</div>
	      			   <div>
	      			<label for="cpass">Confirm Password:</label>
	      		<input type="password" name="cpass" id="cpass" placeholder="Confirm Password" onkeyup="check(this.value)" required>
	      		<p id="msg" hidden></p>
	      		</div>	      			   
	      		<span class="spc">
	      			<p><span class="rr">Already Registered ? </span> <a href="#" onclick="chnge('log')">Log in</a></p><input type="submit" name="submit" value="Register" class="btn">
	      		</span>	      		
	      	</form>	      	

	      </div>
	      </div>

	<footer><p>Designed by Spiders, Copyright &copy; Gaurav Bhatt, 2018 </p></footer>
</body>
</html>