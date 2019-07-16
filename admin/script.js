function drp()
{
	var DID=document.getElementById('ddp');
	DID.classList.toggle('shww');
}
function portal_down()
{	if (confirm("Are you sure to disable the portal .?")) {
			var xhttp= new XMLHttpRequest();
				var xhttp= new XMLHttpRequest();
	 		xhttp.onreadystatechange=function(){
	 	if(this.readyState==4&&this.status==200){
	 			window.location="/pprreeessiiiddeeenntt/login.php";
	 		}
	 };
	 xhttp.open("POST","updown.php",true);
	 xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	 var str_send="&todo=down";
	 xhttp.send(str_send);
	 }
		}
function portal_up()
{
if (confirm("Are you sure to enable the portal .?")) {
			var xhttp= new XMLHttpRequest();
				var xhttp= new XMLHttpRequest();
	 		xhttp.onreadystatechange=function(){
	 	if(this.readyState==4&&this.status==200){
	 			window.location="/pprreeessiiiddeeenntt/login.php";
	 		}
	 };
	 xhttp.open("POST","updown.php",true);
	 xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	 var str_send="&todo=up";
	 xhttp.send(str_send);
	 }
}