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
`padding:0;
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
<li style="background-color:#7A201E; border-radius:10px;"><a href="pc.php">Computers &amp; Labtops</a></li>
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
<table>
<tr><td><h3><img src="img/Dell logo.png" height="70px" width="110px" ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 4500U 2.4 GHZ.</td>
<td rowspan="9"><img src="img/Dell core i5.jpg" height="300px" width="500px"><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 920m 2GB.</td></tr>
<tr><td><b>RAM:</b> 8 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>
<?php

 $id = 1 ; 
 $query = "select * from  pc_info where id=$id " ;
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;

 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Dell core i5.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Dell core i5.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
    }else{ echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
  }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}
echo"</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/Dell logo.png' height='70px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 4500U 2.4 GHZ.</td>
<td rowspan='9'><img src='img/Dell core i7.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Amd Radion 2GB.</td></tr>
<tr><td><b>RAM:</b> 6 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> WD 500GB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 8.1 X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

 $id = 2 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if ($user==1) {
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Dell core i7.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Dell core i7.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/Dell logo.png' height='70px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i7 5500U 2.5 GHZ.</td>
<td rowspan='9'><img src='img/Dell core i7 Touch screen.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 940m 4GB.</td></tr>
<tr><td><b>RAM:</b> 8 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> WD 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 3 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
   if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Dell core i7 Touch screen.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Dell core i7 Touch screen.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/Dell logo.png' height='70px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i7 6500U 3.0 GHZ.</td>
<td rowspan='9'><img src='img/Dell desktop-computer.jpg' height='300px' width='400px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GTX 1080 2GB.</td></tr>
<tr><td><b>RAM:</b> 16 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '22' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 4 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Dell desktop-computer.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Dell desktop-computer.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/Dell logo.png' height='70px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i7 6500K 3.4 GHZ.</td>
<td rowspan='9'><img src='img/Dell Gaming pc.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GTX 1080 4GB.</td></tr>
<tr><td><b>RAM:</b> 32 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> WD 4TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '19' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 5 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Dell Gaming pc.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Dell Gaming pc.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{
   echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>"; 
}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/Dell logo.png' height='70px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i3 4500U 3.0 GHZ.</td>
<td rowspan='9'><img src='img/Dell  desktop computer.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 940 2GB.</td></tr>
<tr><td><b>RAM:</b> 8 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 500GB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '19' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 6 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Dell  desktop computer.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Dell  desktop computer.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/HP logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 5500U 3.0 GHZ.</td>
<td rowspan='9'><img src='img/Hp core i5.png' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> AMD Radion 4GB.</td></tr>
<tr><td><b>RAM:</b> 12 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '17' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 7 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Hp core i5.png&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp core i5.png&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/HP logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i3 4500U 2.0 GHZ.</td>
<td rowspan='9'><img src='img/Hp core i7 Touchscreen.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 2GB.</td></tr>
<tr><td><b>RAM:</b> 6 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> WD 500GB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 8.1 X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 8 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Hp core i7 Touchscreen.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp core i7 Touchscreen.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/HP logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel Quad-core 2.4 GHZ.</td>
<td rowspan='9'><img src='img/Hp core i7.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> AMD Radion 2GB.</td></tr>
<tr><td><b>RAM:</b> 4 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 500GB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 9 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Hp core i7.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp core i7.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/HP logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i7 6500U 2.4 GHZ.</td>
<td rowspan='9'><img src='img/Hp core-i5.jpeg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 980m 2GB.</td></tr>
<tr><td><b>RAM:</b> 16 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 10 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Hp core-i5.jpeg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp core-i5.jpeg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/HP logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 5500U 2.4 GHZ.</td>
<td rowspan='9'><img src='img/Hp mini desktop computer.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 940 2GB.</td></tr>
<tr><td><b>RAM:</b> 8 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '19' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 11 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Hp mini desktop computer.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp mini desktop computer.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/HP logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 5500U 3.0 GHZ.</td>
<td rowspan='9'><img src='img/Hp desktop computer.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Screen:</b> Touch Screen</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 980 4GB.</td></tr>
<tr><td><b>RAM:</b> 32 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '22' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 12 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Hp desktop computer.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp desktop computer.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/HP logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i3 4500U 2.0 GHZ.</td>
<td rowspan='9'><img src='img/Hp Gaming desktop computer.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Amd Radion 2GB.</td></tr>
<tr><td><b>RAM:</b> 4 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> WD 500GB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 13 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Hp Gaming desktop computer.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Hp Gaming desktop computer.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<br><br><hr>
<table>
<tr><td><h3><img src='img/Lenovo Logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 6500U 3.0 GHZ.</td>
<td rowspan='9'><img src='img/lenovo-core i7 Gaming.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> AMD Radion 8GB.</td></tr>
<tr><td><b>RAM:</b> 32 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> WD 2TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '17' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 14 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/lenovo-core i7 Gaming.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/lenovo-core i7 Gaming.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<table>
<br><br><hr>
<tr><td><h3><img src='img/Lenovo Logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i3 3500U 2.4 GHZ.</td>
<td rowspan='9'><img src='img/lenovo core i3.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Amd Radion 2GB.</td></tr>
<tr><td><b>RAM:</b> 4 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 500GB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0  .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 15 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/lenovo core i3.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/lenovo core i3.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<table>
<br><br><hr>
<tr><td><h3><img src='img/Lenovo Logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 4500U 2.4 GHZ.</td>
<td rowspan='9'><img src='img/lenovo core i5.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 920m 2GB.</td></tr>
<tr><td><b>RAM:</b> 8 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 16 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/lenovo core i5.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/lenovo core i5.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<table>
<br><br><hr>
<tr><td><h3><img src='img/Lenovo Logo.png' height='80px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i5 6500U 2.4 GHZ.</td>
<td rowspan='9'><img src='img/lenovo core i7 Touchscreen.png' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 940m 2GB.</td></tr>
<tr><td><b>RAM:</b> 6 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 1TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '15.6' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

$id = 17 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
   if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/lenovo core i7 Touchscreen.png&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/lenovo core i7 Touchscreen.png&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}

echo "</center>
<table>
<br><br><hr>
<tr><td><h3><img src='img/Microsoft logo.png' height='40px' width='110px' ></h3></tr></td>
<tr><td><b>Cpu:</b> Intel core i7 6500U 3.0 GHZ.</td>
<td rowspan='9'><img src='img/Microsoft surface-book.jpg' height='300px' width='500px'><td></tr>
<tr><td><b>Graphics card:</b> Intel(R) HD Graphics.</td></tr>
<tr><td><b>GPU:</b> Nvidia Geforce GT 980m 2GB.</td></tr>
<tr><td><b>RAM:</b> 16 GB DDR3. </td></tr>
<tr><td><b>HDD:</b> Toshiba 2TB HDD.</td></tr>
<tr><td><b>Dispaly:</b> '17' LED.</td></tr>
<tr><td><b>USB:</b> USB 2.0 / USB 3.0 .</td></tr>
<tr><td><b>OS:</b> Windows 10 pro X64. </td></tr>
<tr><td><b>Warranty:</b> 1 year. </td></tr>
</table>
<center>";

 $id = 18 ; 
 $query = "select * from  pc_info where id=$id " ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ;
 if (strcmp($row[1], "OUT OF STOCK")!=0) {
    echo "<br><h3>JUST FOR <span style='color:red;'>".$row[1]."</span> JD</h3>";
    if($user==1){
    echo"<table>
<tr>
<td><a href='buynow2.php?id=img/Microsoft surface-book.jpg&Location=pc'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
<td><a href='add.php?id=img/Microsoft surface-book.jpg&Location=pc'><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>
</table>";
}else{echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";}
 }else{
    echo "<br><h3 style='color:red;'>$row[1]</h3>";
}
 ?>
</center>
<br>
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