<?php 
session_start();
// if(isset($_SESSION['id']))
// {
// 	if($_SESSION['type']=='student')
// 	{
// 		header('location:/student');
// 	}
// 	else
// 	{
// 	header('location:/faculty');
// 	}
// }
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Library | THDC-IHET</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="img/logo.png">
	<script src="script.js"></script>
</head>
<body>
	<header>
		<div class="logo"><img src="img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1></div>
		<nav>
			<h1>Online Library Portal</h1>
			<div>	
			<a href="users/" >Login</a>
			<a href="faculty/" >Staff</a>
			</div>	
		</nav>
	</header>
	<div class="bd">
		<div class="bx" id="log">
	      	<h1>Books<div class="searchbox">
		<input type="text" placeholder="Book Title" id="itm"  />
		<input type="button" onclick="search('itm')" value="Search" class="btn">
	</div></h1>
	      	<ul id='unsrtd'>
<?php
		$conn=mysqli_connect("localhost",'root','','library_thdcihet');
		$qry="SELECT * FROM books";
		$result=mysqli_query($conn,$qry);
		while($row=mysqli_fetch_assoc($result))
		{	$link="/thumbnails/".$row['BID'].".jpg";
			echo "<li> <a href='javascript:void(0)' id='{$row['BID']}' ><img src='$link' alt='img' style='height:250px; width:180px;'/></a><h3>".$row['title']."</h3><p>Book Id:".$row['BID']."</p><br /><p>No. of Copies left:".$row['no_of_copies']."</p><br /><p>Author:".$row['author']."</p><br /><p>Description:".$row['decription']."</p>"."<input type='button' value='Book Now' class='btn bk'></li>";
		}?>
	      		</ul>
	      		<ul id='srch' hidden>
				<li> <a href='javascript:void(0)' id='' ><img id='thmbnl' src='' alt='img' style='height:250px; width:180px;'/></a>
					<h3 id='title'></h3>
					<p id='bid'></p>
					<br /><p id='noc'></p>
					<br /><p id='author'></p><br />
					<p id='description'></p>
					<input type='button' value='Book Now' id='bkk' class='btn bk'></li>
				</ul>
	      	</div>
	      </div>
	<footer><p>Designed by Spiders, Copyright &copy; Gaurav Bhatt, 2018 </p></footer>
</body>
</html>