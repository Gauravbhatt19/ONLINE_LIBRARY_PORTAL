<?php 
session_start();
if(!isset($_SESSION['logged_in']))
{
	header('location:../');
}
				$conn=mysqli_connect('localhost','root','','internal_exam_portal');
						$qry="SELECT * FROM control_data WHERE name='portal_status'";
						$result=mysqli_query($conn,$qry);
						$resultfetch=mysqli_fetch_assoc($result);
						if($resultfetch['value']==0){
					header("location: down.php");
					}
$id=$_SESSION['id']; 
$name=$_SESSION['name'];
$brnch=$_SESSION['branch'];
$roll=$_SESSION['roll'];
$batch=$_SESSION['batch'];
$sem=$_SESSION['current_sem'];
?> 
<html>
<head>
	<meta charset="UTF-8">
	<title>Student | EXAM PORTAL </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/png" href="../img/logo.png">
	<script src="../script.js"></script>
</head>
<body>
	<header class="header1">
		<div class="logo"><img src="../img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1></div>
		<nav class="men">
			<h1><marquee>Hi, <?php  echo $name;?></marquee></h1>
			<div onclick="menu('stud')">	
			<a href="javascript:void(0)" class="cng">Menu <span id="chngd" class="chnges">&#9207;</span></a>
			<ul class="hide">
				<li><a href="javascript:void(0)" onclick="shww()">Change Password</a></li>
				<li><a href="index.php">LogOut</a></li>
			</ul>
			</div>	
		</nav>
	</header>
	  <div class="popp hdn" id="chgn" >
	       	<h1 onclick="shww()" style="float:right;" class="hovi"> &#8999;  </h1>      
	       <center>	<h1 style="padding:20px; color:rgba(0,53,147,1); font-family: Times New Roman
Georgia;  ">Change Password</h1></center>
      <div class="prtl">
        <form>  
            <div>
             
            <input type="password"  id="crnt" placeholder="Current Password">
            </div>           
            <div >
              
            <input type="password"  id="new" placeholder="New Password">
            </div>          
            <div >
              
            <input type="password"  id="cnfrm" placeholder="Confirm Password">
            </div>   
            <span class="spc">
              <input type="submit" name="submit" value="Change &#9997;" class="btn">
            </span>           
          </form>
        </div>
    </div>
	<div class="rsz text-center">
			<div class="box">
	      	<h1>Personal Details</h1>
	      	<div class="grd">
	      	<div>
	      		<label for="fname">Full  Name:</label>
	      		<span><?php echo $name;?></span>
	      		</div>
	      		<div>
	      			<label for="brnch">Branch:</label>
	      	<span><?php echo $brnch;?></span>
	      		</div>	      		
	      		<div>
	      			<label for="Id">Student Id:</label>
	      	<span><?php echo $id;?></span>
	      		</div>	      		
	      		<div>
	      			<label for="rno">Roll No:</label>
	      		<span><?php echo $roll;?></span>
	      		</div>	      		
	      		<div>
	      			<label for="batch">Batch:</label>
	      			<span><?php echo $batch;?></span>
	      		</div>
	      			  <div>
	      			<label for="csem">Current Semester:</label>
	      			<span><?php echo $sem;?></span>
	      		</div>	      	
	      </div>
	  </div>
	      
	      </div>
	   				<div class="box">
	      	<h1>Academics Details</h1>
	      	<div class="grd">
	      	<div>
			<table>
				   	<tbody>
				      				<tr> <th>Subjects</th>
				      				<th>Sesional 1</th>
				      				<th>Sesional 2</th>
				      				<th>Assignment</th>
				      				<th>Attendance</th> 
				      				<th>Total</th></tr>
				      				<tr><td>TCS501</td>
				      				<td>25</td>
				      				<td>18</td>
				      				<td>7/10</td>
				      				<td>8/10</td>
				      				<td>40/50</td></tr>
				      				<tr><td>TCS501</td>
				      				<td>25</td>
				      				<td>18</td>
				      				<td>7/10</td>
				      				<td>8/10</td><td>40/50</td></tr>
				      				<tr><td>TCS501</td>
				      				<td>25</td>
				      				<td>18</td>
				      				<td>7/10</td>
				      				<td>8/10</td><td>40/50</td></tr>
				      				<tr><td>TCS501</td>
				      				<td>25</td>
				      				<td>18</td>
				      				<td>7/10</td>
				      				<td>8/10</td><td>40/50</td></tr>
				      				<tr><td>TCS501</td>
				      				<td>25</td>
				      				<td>18</td>
				      				<td>7/10</td>
				      				<td>8/10</td><td>40/50</td></tr>
				      			</tbody>
				      		</table>	      		
	      </div>
	  </div> 
	   </div>
	<footer><p>Designed by Spiders, Copyright &copy; Examination Department, 2018 </p></footer>
</body>
</html>