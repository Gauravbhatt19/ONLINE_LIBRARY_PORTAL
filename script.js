var count=0;
function slide()
{	
	var SID=document.getElementById('slide');
	count=(count+1)%5;
	var file=count+1;
	var file='img/slider/'+file+'.jpg';
	SID.src=file;
	var t = setTimeout(slide,3000);
}
var flg=1;
function menu(chck)
{
 if(chck=='stud')
 {
 	var drp=document.getElementsByClassName('hide')[0];
 	drp.classList.toggle("show");
 	var chng=document.getElementsByClassName('chnges')[0];
 	if(flg)
 	{chng.innerHTML='&#9206;'; flg=0;}
 else
 {
chng.innerHTML='&#9207;';
flg=1;
 }
 }
}
function chnge(check)
{
var DID=document.getElementById('dd1');
 if(check=='regis')
 {
 	DID.innerHTML="Register";
 	document.getElementById('frm1').style.display="none";
 	document.getElementById('frm2').style.display="block";
 	document.getElementById('slide').style.marginTop="80px";
 }
 else if(check=='log')
 {
	DID.innerHTML="Login";
 	document.getElementById('frm2').style.display="none";
 	document.getElementById('frm1').style.display="block";
 	document.getElementById('slide').style.marginTop="0";
 }
}
function chnge1(check)
{
	var DID=document.getElementById('dd1');
 if(check=='regis')
 {
 	DID.innerHTML="Register";
 	document.getElementById('frm1').style.display="none";
 	document.getElementById('frm2').style.display="block";
 }
 else if(check=='log')
 {
	DID.innerHTML="Login";
 	document.getElementById('frm2').style.display="none";
 	document.getElementById('frm1').style.display="block";
 }
}
var slctd=new Array();
var i=-1,j;
function selct(th)
{
var SID=document.getElementsByClassName('hdn');
var k=0;
while(SID[k])
{
	SID[k].classList.toggle('shw');
	k++;
}
}
function slt(th)
{

	var flg=1;
	for(j=-1;j<=i&&flg;j++)
	{
		if(slctd[j]==th.innerHTML)
		{	flg=0;
			i--;
		}
		else
		{
			flg=1;
		}
	}
	for(var k=j-1;k<=i&&!flg;k++)
	{
		slctd[k]=slctd[k+1];
	}
	if(flg)
	{		i++;
			slctd[i]=th.innerHTML;
	}
	var PID=document.getElementById('sub');
	var str='';
	for(j=-1;j<=i;j++)
	{ if(j==-1)
		{
			 PID.value='None';
		}
		else{
		str=str+" "+slctd[j];		
				PID.value=str;}
			}
			th.nextSibling.classList.toggle('shw');
}
function shww()
{
	document.getElementById('chgn').classList.toggle('shw');
}

		function search(item){	
			var SRCHID=document.getElementById(item);
			var SRCHITM=SRCHID.value;
			if(SRCHITM){
			var BXID=document.getElementById('unsrtd');
			BXID.style.display="none";			
			var SRID=document.getElementById('srch');
			SRID.style.display="block";
			var xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if(this.readyState==4&&this.status==200){
					var obj=JSON.parse(this.responseText);
					if(obj.flg=='1'){
					document.getElementById('thmbnl').src=obj.thmb;
					document.getElementById('thmbnl').style.display="inline";	
					document.getElementById('bid').style.display="inline";	
					document.getElementById('bid').innerHTML='Book Id:'+obj.bid;
					document.getElementById('title').innerHTML=obj.ttl;
					document.getElementById('noc').style.display="inline";
					document.getElementById('noc').innerHTML="No. of Copies left:"+obj.noc;
					document.getElementById('author').style.display="inline";	
					document.getElementById('author').innerHTML="Author:"+obj.athr;
					document.getElementById('description').style.display="inline";	
					document.getElementById('bkk').style.display="inline";	
					document.getElementById('description').innerHTML="Description:"+obj.descp;

				}
				else
				{	document.getElementById('bid').style.display="none";
					document.getElementById('noc').style.display="none";						
					document.getElementById('author').style.display="none";	
					document.getElementById('description').style.display="none";						
					document.getElementById('thmbnl').style.display="none";	
					document.getElementById('bkk').style.display="none";	
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