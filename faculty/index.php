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
// 	header('location:/faculty/login.php');
// 	}
// }
?> -->
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
	</header>
	<div class="stbda">
			<div class="frmm">
	      	<h1 id="dd1">Login</h1>
	      	<form id="frm1" action="login.php">
	      		
	      		<div>
	      			<label for="Id">Login Id:</label>
	      		<input type="text" name="Id" id="Id" placeholder="Student Id">
	      		</div>	      		
	      		<div>
	      			<label for="pass">Password:</label>
	      		<input type="password" name="pass" id="pass" placeholder="Password">
	      		</div>
	      			   
	      		<span class="spc">
	      			<p><span class="rr">Not Registered Yet ?</span> <a href="#" onclick="chnge1('regis')">Register now</a></p>
	      			<input type="submit" name="submit" value="Login" class="btn">
	      		</span>	      		
	      	</form>
	      	<form id="frm2">
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
	      			<label for="brnch">Department:</label>
	      		<select type="dropdown" name="brnch" id="brnch" required> 
	      			<option value="" disabled selected>Department</option>
	      			<option value="CSE">Computer Science & Enginneering</option>
	      			<option value="CE">Civil Enginneering</option>
	      			<option value="EE">Electrical Enginneering</option>
	      			<option value="ECE">Electronics & Communcation Enginneering</option>
	      			<option value="ME">Mechanical Enginneering</option>
	      			</select>
	      		</div>	      		
	      		<div>
	      			<label for="Id">Login Id:</label>
	      		<input type="text" name="Id" id="Id" placeholder="Login Id" required>
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
	      			<div >
	      			<label for="ci">Class Incharge:</label>
	      			<select type="dropdown" name="ci" id="ci" required> 
	      			<option value="0" disabled selected>Class Incharge</option>
	      			<option value="1" >Yes</option>	
	      			<option value="2">No</option>
	      			</select>
	      		</div>	      			
	      		<div>
	      			<label for="sub">Subjects Alloted:</label>
	      			<ul> 
	       			<li ><input onclick="selct()"  id ="sub" name="sub" type='text' placeholder="Subjects Alloted : "   /></li>
	      			<li onclick="slt(this.firstChild)" class="drpd hdn" ><span  >TCS 401 Discrete Mathematics</span><span class="hddn" > &#9989;</span></li>
	      			<li onclick="slt(this.firstChild)" class="drpd hdn" ><span  >TCS 402 Digital Electronics</span><span class="hddn"> &#9989;</span></li>
	      			<li onclick="slt(this.firstChild)" class="drpd hdn" ><span   >TCS 403 Data Structure</span><span class="hddn"> &#9989;</span></li>
	      			<li onclick="slt(this.firstChild)" class="drpd hdn"><span    >TCS 404 OOP</span><span class="hddn"> &#9989;</span></li>
	      			<li onclick="slt(this.firstChild)" class="drpd hdn"><span    >TCS 405 Environment</span><span class="hddn"> &#9989;</span></li>		
	      			</ul>
	      		</div>
	      			  
	      		<span class="spc">
	      			<p><span class="rr">Already Registered ? </span> <a href="#" onclick="chnge1('log')">Log in</a></p><input type="submit" name="submit" value="Register" class="btn">
	      		</span>	      		
	      	</form>	      	
	      </div>
	      </div>

	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>