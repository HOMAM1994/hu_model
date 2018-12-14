<? session_start();
if (isset($_GET["error"])){
if ($_GET["error"]==1){

   echo "<script>alert('Item Added Succefully !')</script>";
}
if ($_GET["error"]==2){

   echo "<script>alert('Thank you for shopping with us  !')</script>";
}
}

$conn = mysql_connect("localhost" , "root" , "12345678");
 mysql_select_db("info", $conn) ;
 if ($_SESSION['login']) {
    $user=1;
}else{
    $user=0;
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
.buy{
	margin-left: 150px;
float:right;
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
a{
    text-decoration: none;
    color:red;
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
<li style="background-color:#7A201E; border-radius:10px;"><a href="accessories.php">Accessories</a></li>
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

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>USB 3.0 Car Charger.</h3></figcaption><img src="img/car charger.jpg" height="250px" width="250px"></figure></td>
<td>
Support with:
<ul>
<li>Samsung note3</li>
<li>Samsung S5</li>
</ul>

<?php
$id = 1 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/car charger.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/car charger.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?>

<hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>USB charger 2.0A.</h3></figcaption><img src="img/samsung charger.jpg" height="250px" width="250px"></figure></td>
<td>
Support with:
<ul>
<li>All Android Devices</li>
</ul>
<?php
$id = 2 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/samsung charger.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/samsung charger.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Micro USB Cable.</h3></figcaption><img src="img/usb.jpg" height="250px" width="350px"></figure></td>
<td>
Support with:
<ul>
<li>All Android Devices</li>
</ul>
<?php
$id = 3 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
  echo "<table>
<tr>
<td><a href='buynow2.php?id=img/usb.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/usb.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption> <h3>Samsung Headphone.</h3></figcaption><img src="img/headphone.jpg" height="250px" width="250px"></figure></td>
<td>
Support with:
<ul>
<li>All Android Devices</li>
<li>All Laptops &amp; Computers</li>
</ul>
<?php
$id = 4 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/headphone.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/headphone.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>OTG Adabter.</h3></figcaption><img src="img/otg adabter.jpg" height="250px" width="250px"></figure></td>
<td>
Support with:
<ul>
<li>Android 4.4 or higher</li>
</ul>
<?php
$id = 5 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/otg adabter.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/otg adabter.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>OTG Flash type-c 32GB.</h3></figcaption><img src="img/otg type-c.png" height="250px" width="250px"></figure></td>
<td>
Support with:
<ul>
<li>Android 4.4 or higher</li>
</ul>
<?php
$id = 6 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/otg type-c.png&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/otg type-c.png&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Battery.</h3></figcaption><img src="img/samsung-battery.jpg" height="250px" width="250px"></figure></td>
<td>
For:
<ul>
<li> Any Samsung Mobile</li>
</ul>
<?php
$id = 7 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/samsung-battery.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/samsung-battery.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Screen protictor.</h3></figcaption><img src="img/Screen protector.png" height="250px" width="250px"></figure></td>
<td>
For:
<ul>
<li>All Smartphones</li>
<li>All Tablets</li>
</ul>
<?php
$id = 8 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/Screen protector.png&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Screen protector.png&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Flash memory.</h3></figcaption><img src="img/flash-memory-01.jpg" height="250px" width="250px"></figure></td>
<td>
Support with:
<ul>
<li>Microsoft</li>
<li>Mac book</li>
<li>linux</li>
</ul>
<?php
$id = 9 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/flash-memory-01.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/flash-memory-01.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>TP-LINK WiFi Router.</h3></figcaption><img src="img/TP-LINK WiFi.jpg" height="250px" width="250px"></figure></td>
<td>
<ul>
<li>150M/S</li>
<li>2 Antenna</li>
</ul>
<?php
$id = 10 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/TP-LINK WiFi.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/TP-LINK WiFi.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>HDMI Cable.</h3></figcaption><img src="img/HDMI-1.jpg" height="250px" width="250px"></figure></td>
<td>
<ul>
<li>1.5M</li>
<li>Black</li>
</ul>
<?php
$id = 11 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/HDMI-1.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/HDMI-1.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Printers Ink.</h3></figcaption><img src="img/ink.png" height="250px" width="350px"></figure></td>
<td>
<ul>
<li>Red</li>
<li>Blue</li>
<li>yellow</li>
<li>Black</li>
</ul>
<?php
$id = 12 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/ink.png&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/ink.png&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Laptop Charger.</h3></figcaption><img src="img/laptop charger.jpg" height="250px" width="250px"></figure></td>
<td>
For:
<ul>
<li>HP</li>
<li>Dell</li>
<li>Lenovo</li>
<li>Toshiba</li>
<li>Sony</li>
<li>LG</li>
</ul>
<?php
$id = 13 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/laptop charger.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/laptop charger.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Laptop Battery.</h3></figcaption><img src="img/laptop battery.jpg" height="250px" width="250px"></figure></td>
<td>
For:
<ul>
<li>HP</li>
<li>Dell</li>
<li>Lenovo</li>
<li>Toshiba</li>
</ul>
<?php
$id = 14 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/laptop battery.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/laptop battery.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Mouse.</h3></figcaption><img src="img/mouse.png" height="250px" width="250px"></figure></td>
<td>
<ul>
<li>1.5M</li>
<li>Black</li>
</ul>
<?php
$id = 15 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/mouse.png&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/mouse.png&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Gaming Keyboard .</h3></figcaption><img src="img/keyboard gaming.png" height="250px" width="250px"></figure></td>
<td>
<ul>
<li>2.0M</li>
<li>Black &amp; Red</li>
</ul>
<?php
$id = 16 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/keyboard gaming.png&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/keyboard gaming.png&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Microsoft wierless 800.</h3></figcaption><img src="img/Microsoft wierless 800.jpg" height="250px" width="250px"></figure></td>
<td>
<ul>
<li>Black</li>
</ul>
<?php
$id = 17 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/Microsoft wierless 800.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Microsoft wierless 800.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption> <h3>Graphics Card.</h3></figcaption><img src="img/graphicscard1.gif" height="250px" width="250px"></figure></td>
<td>
<ul>
<li>AMD</li>
<li>NVIDIA</li>
</ul>
<?php
$id = 18 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/graphicscard1.gif&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/graphicscard1.gif&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Samsung Monitor.</h3></figcaption><img src="img/samsung screen.jpg" height="250px" width="300px"></figure></td>
<td>
<ul>
<li>LED</li>
<li>"19"</li>
</ul>
<?php
$id = 19 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/samsung screen.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/samsung screen.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>RAM.</h3></figcaption><img src="img/ram.jpg" height="250px" width="300px"></figure></td>
<td>
DDR3
<ul>
<li>4GB</li>
</ul>
<?php
$id = 20 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/ram.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/ram.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Hard Disk SSD.</h3></figcaption><img src="img/SSD.jpg" height="250px" width="300px"></figure></td>
<td>
Kingston
<ul>
<li>480GB</li>
</ul>
<?php
$id = 21 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/SSD.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/SSD.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Hard Disk HDD.</h3></figcaption><img src="img/HDD 1TB.jpg" height="250px" width="300px"></figure></td>
<td>
WD
<ul>
<li>1TB</li>
</ul>
<?php
$id = 22 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/HDD 1TB.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/HDD 1TB.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>LG_DVD_ROM.</h3></figcaption><img src="img/LG_DVD_ROM.jpg" height="250px" width="300px"></figure></td>
<td>
<?php
$id = 23 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/LG_DVD_ROM.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/LG_DVD_ROM.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?><hr>

<table class="table">
<tr>
<td rowspan="2"><figure><figcaption><h3>Speakers.</h3></figcaption><img src="img/speaker.jpg" height="250px" width="300px"></figure></td>
<td>
<ul>
<li>2 Speaker</li>
<li>Subwoofer</li>
</ul>
<?php
$id = 24 ; 
 $query = "select * from   accessories_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
echo "<tr><td><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3></td></tr>
</td>
<td></td>
</tr>
</table>
<center>";
if($user==1){
echo "<table>
<tr>
<td><a href='buynow2.php?id=img/speaker.jpg&Location=accessories'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/speaker.jpg&Location=accessories'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>
";
}else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}

}else 
echo "<tr><td><h3><span style='color:red;'>".$row[1]."</span></h3></td></tr>
</td>
<td></td>
</tr>
</table>";
echo "</center>";
?>
<hr>
</div>
<footer>
<table class="contactus">
	<tr><td><a href="https://www.facebook.com/Fox.OF.Programing"><img src="img/facebook.png" height="40px" width="40px"></a></td>
	<td><a href="www.twitter.com"><img src="img/twitter.png" height="40px" width="40px"></a></td>
	<td><img src="img/google.png" height="40px" width="40px"></td>
	<td><a href="mailto:ahed.mamoum.96@hotmail.com"><img src="img/outlook.png" height="40px" width="40px"></a></td></tr>
</table>
<hr style="margin: 40px 80px 0px 80px;">	
<p style="color: white; text-align: center;">CopyRight &copy; FASTER LINK &nbsp; 2016</p>
</footer>
</body>
</html>