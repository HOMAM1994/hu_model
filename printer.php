<? session_start();
if (isset($_GET["error"])){
if ($_GET["error"]==1){

   echo "<script>alert('Item Added Succefully !')</script>";
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
<title>printers</title>
<meta charset="utf-8">
<style type="text/css">
body{
margin:0px 200px;
padding:0;
background-color:#ADADAD;
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
.content table img{
margin-left:20px;
padding:0px;
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
<li><a href="home.php"><img src="img/Home.png" height="20" width="20" ></a></li>
<li><a href="samsung.php">Smart phones &amp; Tablets</a></li>
<li><a href="pc.php">Computers &amp; Labtops</a></li>
<li style="background-color:#7A201E; border-radius:10px;"><a href="printers.php">Printers</a></li>
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

<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/hp logo.png" height="70px" width="110px" ></figcaption><img src="img/Hp printer 1.png" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Color Printer</li>
</ul>
<?php
 $id = 1 ; 
 $query = "select * from  printer_info where id=$id " ;
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
echo "
<table>
<tr>
<td><a href='buynow2.php?id=img/Hp printer 1.png&Location=printers'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp printer 1.png&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
<br><br><hr>

 <table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/hp logo.png" height="70px" width="110px" ></figcaption><img src="img/Hp printer 2.jpg" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Color Printer</li>
</ul>
<?php
 $id = 2 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp printer 2.jpg&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
<br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/hp logo.png" height="70px" width="110px" ></figcaption><img src="img/Hp printer 3.png" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Color Printer</li>
</ul>
<?php
 $id = 3 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp printer 3.png&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
?><br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/hp logo.png" height="70px" width="110px" ></figcaption><img src="img/Hp printer 4.png" height="300px" width="400px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Black &amp; White Printer</li>
</ul>
<?php
 $id = 4 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp printer 4.png&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
<br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/hp logo.png" height="70px" width="110px" ></figcaption><img src="img/Hp personal printer.jpg" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Personal</li>
<li><b>Color:</b> Color Printer</li>
</ul>
<?php
$id = 5 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp personal printer.jpg&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
<br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/canon logo.png" height="80px" width="110px" ></figcaption><img src="img/canon printer 1.jpg" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Black &amp; White Printer</li>
</ul>
<?php
$id = 6 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/canon printer 1.jpg&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
<br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/canon logo.png" height="80px" width="110px" ></figcaption><img src="img/canon printer 2.jpg" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Black &amp; White Printer</li>
</ul>
<?php
$id = 7 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/canon printer 2.jpg&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
echo "</center>"
?>
<br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/brother logo.png" height="80px" width="160px" ></figcaption><img src="img/brother printer 2.jpg" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Black &amp; White Printer</li>
</ul>
<?php
$id = 8 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/brother printer 2.jpg&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
<br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/brother logo.png" height="80px" width="160px" ></figcaption><img src="img/brother printer 3.png" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> Laser</li>
<li><b>Color:</b> Color Printer</li>
</ul>
<?php
$id = 9 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/brother printer 3.png&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
?><br><br><hr>
 
<table>
<tr>
<td rowspan="2"><figure><figcaption><img src="img/LG logo.png" height="110px" width="175px" ></figcaption><img src="img/LG Pocket Photo.jpg" height="300px" width="500px"></figure></td>
<td>
<ul>
<li><b>Type:</b> personal</li>
<li><b>Color:</b> Color Printer</li>
</ul>
<?php
$id = 10 ; 
 $query = "select * from  printer_info where id=$id " ;
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
<td><a href=''><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/LG Pocket Photo.jpg&Location=printers'><img src='img/cart.png' height='150px' width='150px'></a></td>
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
<br><br><hr>
 

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