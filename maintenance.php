<?session_start();
if (isset($_GET["error"])){
if ($_GET["error"]==1){
  echo "<script>alert('Vouchers number or IMEI is incorrect !')</script>";
}
}
?>
<!doctype html>
<html>
<head>
<title>Computers &amp; labtops</title>
<meta charset="utf-8">
<style type="text/css">
body{
margin:0px 200px;
padding:0;
background-color:#ADADAD;
alert:"Hello world!";
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
padding:50px;
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
.check{
border-style:solid;
}
.check{
border-style:dotted;
border-width:2px;
padding:10px;
margin:-20px;
color:#cc0000;
font-size:21px;

}
footer{
background-color: #1a1a1a;
width:100%;
height:150px ;

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
<li><a href="home.php" ><img src="img/Home.png" height="20" width="20" ></a></li>
<li><a href="samsung.php" >Smart phones &amp; Tablets</a></li>
<li><a href="pc.php">Computers &amp; Labtops</a></li>
<li><a href="printers.php">Printers</a></li>
<li><a href="accessories.php">Accessories</a></li>
<li style="background-color:#7A201E; border-radius:10px;"><a href="maintenance.php">Maintenance Department</a></li>
<?php
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
<div class="check">
<p>If you have a device under maintenance, Please Enter the voucher's number to be able to check the status of your device.</p> 
<form method="GET" action="check.php">
<input type="text" name="check1" placeholder="Enter The Voucher's Number" style="width:200px" required>&nbsp;
<input type="text" name="check2" placeholder="Enter The Device IMEI" style="width:200px" required>&nbsp;
<input type="submit" value="Check Now">
</form>
</div>
<br>
<h1>Special Discounts !!!! </h1>
<table>
<tr>
<td><h2>Batterys:-</h2><h3><br>50% discount of replacement any internal smartphone's battery.<br><img src="img/battery.jpg" height="300px" width="400px"></h3></td>
</tr>
<tr>
<td><h2>Screens:-</h2><h3><br>40% discount of replacement any smartphone's screen.<br><img src="img/screen.jpg" height="300px" width="400px"></h3></td>
</tr>
<tr>
<td><h2>laptops &amp; Computers:-</h2><h3><br>30% discount of laptops &amp; Computers Maintenance.<br><img src="img/laptops.jpg" height="300px" width="400px"></h3></td>
</tr>
</table>
</div>
<footer>
<table class="contactus">
	<tr><td><img src="img/facebook.png" height="40px" width="40px"></td>
	<td><img src="img/twitter.png" height="40px" width="40px"></td>
	<td><img src="img/google.png" height="40px" width="40px"></td>
	<td><img src="img/outlook.png" height="40px" width="40px"></td></tr>
</table>
<hr style="margin: 40px 80px 0px 80px;">	
<p style="color: white; text-align: center;">CopyRight &copy; FASTER LINK &nbsp; 2016</p>
</footer>
</body>
</html>