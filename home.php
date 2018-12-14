<?session_start();
if (isset($_GET['error'])){
	if ($_GET['error']==1){echo "<script>alert('You just Logged out !')</script>";}
}
?>
<!doctype html>
<html>
<head>
<title>Faster Link For Computers &amp; Smart phones</title>
<meta charset="utf-8">
<style type="text/css">
body{
margin:0;
padding:0;

}
.header2 ul{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#333;
}
.header2 li{
float:left;
}
.header2 a{
display:block;
text-decoration:none;
color:white;
padding:14px 16px;
}
.header2 a:hover{
background-color:#7A201E;
border-radius:10px;
}
.content{
background-color:white;
}
.search{
font-family:Gill Sans, sans-serif;
color:white;
}
header .search input{
border-radius:7px;

}
.header1{
background-color:#1a1a1a;
color:white;
}
.content img{
margin:0px;
padding:0px;
width:100%;
z-index:-1;

}
.table{
z-index:5;
color:#222222;
margin-top:50px;
text-align:center;
}
.table a{
text-decoration:none;
color:black;
}
.table img{
margin:0px 100px;
}
.maintenance,.smartphone,.printer,.accessories,.computer{
margin-left:30px;
}
.maintenance-offers img{
margin-right:300px;
}
footer{
background-color: #1a1a1a;
width:100%;
height:160px ;

}
.contactus{
   margin-left: 70px;
   width: 300px;
   position:relative; 
   top:25px;
   margin-left: auto;
   margin-right: auto;
}
</style>


</head>
<body>
<header>
<div class="header1">

<h1 style="margin:0;padding:0">
<table>
<td><img src="img/logo.png" height="75px" width="100px" alt="Faster Link"></td>
<td>FASTER LINK</td>
</h1>
</table>
</div>
<div class="header2">
<ul>
<li><a href="home.php"><img src="img/Home.png" height="25" width="25" ></a></li>
<li><a href="samsung.php">Smart phones &amp; Tablets</a></li>
<li><a href="pc.php">Computers &amp; Labtops</a></li>
<li><a href="printers.php">Printers</a></li>
<li><a href="accessories.php">Accessories</a></li>
<li><a href="maintenance.php">Maintenance Department</a></li>

<?
if (isset($_SESSION['login'])){
	echo "<li><a href='logout.php'>Log out</a></li>";
	echo "<li><a href='showmyitems.php'><img src='img/showcart.png' width='25px' height='25px' ></a></li>";
}
	else {
	echo "<li><a href='login.php'>Log in</a></li>";	
	}
?>

</ul>
</div>
</header>
<div class="content">
<img src="img/background2.jpg">
</div>
<div>

<center>
<hr style="margin:100px">
<table class="table">

<tr>
<td><a href="#A"><img src="img/tablet-icon.png" height="60" width="70px"><br><b>Smart phones <br>&amp;<br> Tablets</b></a></td>
<td><a href="#B"><img src="img/Computer-Repair-Services-icon.png" height="60" width="70px"><b>Computers <br>&amp;<br> Labtops</b></a></td>
<td><a href="#C"><img src="img/Hardware-Printer-Red-icon.png" height="60" width="70px"><b>Printers</b></a></td>
<td><a href="#D"><img src="img/audio_big_icons.png" height="60" width="70px"><b>Accessories</b></a></td>
<td><a href="#E"><img src="img/maintain.png" height="60" width="70px"><b>Maintenance</b></a></td>
</tr>
</table>
</center>

</div>
<hr style="margin:100px">

<div>

<table  class="smartphone" id="A">
<td><a href="samsung.php"><img src="img/tablet-icon.png" height="60" width="70px"></a></td>
<td><h1>Smart phones &amp; Tablets</h1></td>
</table>
<br>
</div>
<img src="img/smart.jpg" width="100%">
<hr style="margin:100px">

<div>

<table class="computer" id="B">
<td><a href="pc.php"><img src="img/Computer-Repair-Services-icon.png" height="60" width="70px"></a></td>
<td><h1>Computers &amp; Labtops</h1></td>
</table>
<br>
<img src="img/gaming-pc-wallpaper-21.jpg" width="100%">
</div>


<hr style="margin:100px">

<div>
<table  class="printer" id="C">
<td><a href="printers.php"><img src="img/Hardware-Printer-Red-icon.png" height="60" width="70px"></a></td>
<td><h1>Printers</h1></td>
</table>
<br>
<img src="img/printers.jpg" width="100%">
</div>
<hr style="margin:100px">

<div>
<table class="accessories" id="D">
<td><a href="accessories.php"><img src="img/audio_big_icons.png" height="60" width="70px"></a></td>
<td><h1>Accessories</h1></td>
</table>
<br>
<img src="img/accessories.jpg" width="100%">
</div>
<hr style="margin:100px">

<div class="maintenance">

<a href="maintenance.php"><img src="img/maintanance2016.png" height="70px" width="200px"></a>
<h2>Special offers :-</h2>
<table class="maintenance-offers" id="E">
<td><h2>Batterys:-</h2><h3><br>50% discount of replacement <br>any internal smartphone's battery.<br><img src="img/battery.jpg" height="300px" width="400px"></h3></td>
<td><h2>Screens:-</h2><h3><br>40% discount of replacement <br>any smartphone's screen.<br><img src="img/screen.jpg" height="300px" width="400px"></h3></td>
<td></td>
</table>

</div>
<footer>
<table class="contactus">
	<tr><td><a href="https://www.facebook.com/Fox.OF.Programing"><img src="img/facebook.png" height="40px" width="40px"></a></td>
	<td><a href="www.twitter.com"><img src="img/twitter.png" height="40px" width="40px"></a></td>
	<td><img src="img/google.png" height="40px" width="40px"></td>
	<td><a href="mailto:ahed.mamoum.96@hotmail.com"><img src="img/outlook.png" height="40px" width="40px"></a></td></tr>
</table>
<hr style="margin: 40px 100px 0px 100px;">	
<p style="color: white; text-align: center;">CopyRight &copy; FASTER LINK &nbsp; 2016</p>
</footer>

</body>
</html>