<html>
<head>
	<meta charset="UTF-8">
	<title>Library | THDCIHET</title>
	<link rel="icon" type="image/png" href="/image/logo.png">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		function show(chck){
			var SID=document.getElementById(chck);
			SID.classList.toggle('show');
		}
		function search(item){	
			var SRCHID=document.getElementById(item);
			var SRCHITM=SRCHID.value;
			if(SRCHITM){
			var BXID=document.getElementById('bx');
			BXID.style.display="none";			
			var SRID=document.getElementById('srch');
			SRID.style.display="block";
			var xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if(this.readyState==4&&this.status==200){
					var obj=JSON.parse(this.responseText);
					if(obj.flg=='1'){
					document.getElementById('thmbnl').style.display="inline";	
					document.getElementById('thmbnl').src=obj.thmb;
					document.getElementById('bid').style.display="inline";	
					document.getElementById('bid').innerHTML='Book Id:'+obj.bid;
					document.getElementById('title').innerHTML=obj.ttl;
					document.getElementById('noc').style.display="inline";	
					document.getElementById('btt').style.display="inline";
					document.getElementById('noc').innerHTML="No. of Copies left:"+obj.noc;
					document.getElementById('author').style.display="inline";	
					document.getElementById('author').innerHTML="Author:"+obj.athr;
					document.getElementById('description').style.display="inline";	
					document.getElementById('description').innerHTML="Description:"+obj.descp;

				}
				else
				{	document.getElementById('bid').style.display="none";
					document.getElementById('noc').style.display="none";						
					document.getElementById('author').style.display="none";	
					document.getElementById('description').style.display="none";						
					document.getElementById('thmbnl').style.display="none";	
					document.getElementById('btt').style.display="none";
					document.getElementById('title').innerHTML="No book found..!";
				}
			}
			};
			xhttp.open("POST","search.php",true);
			xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			var str_send="&search="+SRCHITM;
			xhttp.send(str_send);
		}
		else
		{
			var BXID=document.getElementById('bx');
			BXID.style.display="block";			
			var SRID=document.getElementById('srch');
			SRID.style.display="none";
		}
	}
	</script>
</head>
<body>
	<header>
		<img src="image/logo.png" alt="logo" width=100>
		<h1>Online Library Portal</h1>
		<div class="searchbox">
		<input type="text" placeholder="Book Title" id="itm"  />
		<input type="button" onclick="search('itm')" value="Search" class="btn">
	</div>
		<nav>
		<a href="javascript:void(0)" onclick="show('logid')">Login</a>
		<a href="/staff/">Staff</a>
	</nav>
	</header>
	<div class="register" id="logid" hidden>
	       	<h1 onclick="show('logid')" style="float:right;"> &#8999;  </h1>      
	       	<h2>User Login</h2>
      <div class="prtl">
        <form action="_login.php" method="POST">  
            <div>    
            <input type="text"  id="uid" name="uid" placeholder="Login Id" />
            </div>
            <div>    
            <input type="password"  id="pass" name="pass" placeholder="Password" />
            </div>           
            <div>  
            <span class="spc">
              <input type="submit" name="submit" value="Login" class="btn">
            </span> 
            </div>          
          </form>
        </div>
    </div>
	<section>
		
	</section>
	<div class="box" id="bx">
		<?php
		$conn=mysqli_connect("localhost",'root','','library_thdcihet');
		$qry="SELECT * FROM books";
		$result=mysqli_query($conn,$qry);
		while($row=mysqli_fetch_assoc($result))
		{	$link="/thumbnails/".$row['BID'].".jpg";
			echo "<span class='container'><a href='javascript:void(0)' id='{$row['BID']}' ><img src='$link' alt='img' height=250 width=180/></a><h2>".$row['title']."</h2><p>Book Id:".$row['BID']."</p><p>No. of Copies left:".$row['no_of_copies']."</p><p>Author:".$row['author']."</p><p>Description:".$row['decription']."</p>"."<input type='button' value='Book Now' class='btn bk'></span>";
		}
		?>
	</div>
	<div  id="srch" class="box" hidden>
	<span id='cntnr' hidden >
		<a href='javascript:void(0)'><img src="" id="thmbnl" alt="img" height=250 width=180/></a>
			 <h2 id="title"></h2><p id="bid"></p><br /><p id="noc"></p><br /><p id="author"></p><br /><p id="description"></p><br /><input type='button' value='Book Now' id='btt' class='btn bk'></span>
			</div>
</body>
</html>