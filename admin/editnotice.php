<?php
session_start();
$conn=mysqli_connect('localhost','root','','internal_exam_portal');
$qry="SELECT * FROM news ORDER BY utime DESC";
$result=mysqli_query($conn,$qry);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Notices | ADMIN</title>
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
			<h1>Edit Notices</h1>
			<div class="prtl">
							<form class="ddd">	<?php
	      		while($row=mysqli_fetch_assoc($result))
	      		{	
	      		echo "<div><label>News ID:".$row['id']."</label></div>";
	      		echo "<div><label for='hdr'>Heading:</label><input type='text' id='hdr' value='".$row['hdr']."'/></div>";
	      		echo "<div><label for='msg'>Message:</label><textarea id='msg'>".$row['msg']."</textarea></div>";
	      		if($row['filename']){
	      		echo "<div><label for='attch'>Attachment name:</label><input type='text' id='attch' value='".$row['filename'].".pdf'/></div>";
	      			}
	      			else
	      			{
	      				echo "<div><label for='attch'>Upload Attachment:</label><input type='file' id='attch'/></div>";
	      			}
	      		echo "<div><label for='sts'>Status:</label>";
	      		if($row['status']==='true')
	      			{	echo"<select id='sts'><option selected >".$row['status']."</option><option >false</option></select></div>";
	      				}
	      				else
	      				{
	      					echo"<select id='sts'><option>true</option><option selected>".$row['status']."</option></select></div>";
	      				}

	      		echo "<span style='border-bottom:1px dotted #000;padding:10px 0px 20px 0px;'><input type='button' value='Save'>
	      		<input type='button' value='Delete'></span>";
	      		}	
	      		?>	
	      		<input type="button" value="Add new"/>	
	      	</form>
			</div>
		</div>
	</div>	
	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>