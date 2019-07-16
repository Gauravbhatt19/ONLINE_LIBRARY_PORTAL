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
	<title>Library | THDC-IHET</title>
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
	<div class="stbda" style=" text-align:center; padding:150px;  ">
			<h1>Sorry, Error in logging ....! Wanna <a href="/users/" class="lnk">Try again </a> ?</h1>
</div>
	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>