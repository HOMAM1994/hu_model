<? session_start();
if (isset($_GET["error"])){
if ($_GET['error']==1){

	echo "<script>alert('Item Added Succefully !')</script>";
}
if ($_GET["error"]==2){

   echo "<script>alert('Thank you for shopping with us  !')</script>";
}
}
if ($_SESSION['login']) {
    $user=1;
}else{
    $user=0;
}
?>
<!doctype html>
<html>
<head>
<title>Smart phones &amp; Tablets</title>
<meta charset="utf-8">
<style type="text/css">


.table1 {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	width: 65% ; 
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
.table1 th {
	padding: 5px;
	background: #d5e3e4;
	font-size: 17px ; 

	font-weight: lighter ; 
	background: linear-gradient(to bottom,  #d5e3e4 0%,#ccdee0 40%,#b3c8cc 100%);
	border: 1px solid #999999;
}
.table1 td {
	font-size: 16px ; 
	padding: 5px;
	background: #ebecda;
	background: linear-gradient(to bottom,  #ebecda 0%,#e0e0c6 40%,#ceceb7 100%);
	border: 1px solid #999999;
}

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
.header3 ul{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#555;
}
.header3 li{
float:left;
}
.header3 a{
display:block;
text-decoration:none;
color:white;
padding:14px 16px;
}
.header3 a:hover{
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
.table img{
    border-style: solid;
    border-color: gray;
    border-width: 2px;
}

.special{
width: 70%; 
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
<li><a href="home.php"><img src="img/Home.png" height="20" width="20" ></a></li>
<li style="background-color:#7A201E; border-radius:10px;"><a href="samsung.php">Smart phones &amp; Tablets</a></li>
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
<center>
 

<?php 
 $id = $_GET['id'] ; 
 $conn = mysql_connect("localhost" , "root" , "12345678");
 mysql_select_db("info", $conn) ;
 $query = "select * from mobile_info where id=$id" ; 
 $result = mysql_query($query , $conn) ; 
 $row = mysql_fetch_row($result) ; 
 
 echo  "<table border='2' class='table1'>" ; 
 echo " <caption><h1>$row[44]</h1> </caption>"; 
echo "
<tr><th colspan='2'>DESIGN</th></tr>
<tr><th>Device Type</th><td>$row[1]</td></tr>
<tr><th>OS</th><td class='special'>$row[2]</td></tr>
<tr><th>dimensions</th><td>$row[3]</td></tr>
<tr><th>weight</th><td>$row[4]</td></tr>
<tr><th>materials</th><td>$row[5]</td></tr>
<tr><th>features</th><td>$row[6]</td></tr>
<tr><th>colors</th><td>$row[7]</td></tr>
<tr><th colspan='2'>DISPLAY</th></tr>
<tr><th>physical_size</th><td>$row[8]</td></tr>
<tr><th>resolution</th><td>$row[9]</td></tr>
<tr><th>pixel</th><td>$row[10]</td></tr>
<tr><th>technology</th><td>$row[11]</td></tr>
<tr><th>screen_ratio</th><td>$row[12]</td></tr>
<tr><th colspan='2'>CAMERA</th></tr>
<tr><th>camera_quality</th><td>$row[13]</td></tr>
<tr><th>setting</th><td>$row[14]</td></tr>
<tr><th>shooting_mood</th><td>$row[15]</td></tr>
<tr><th>front_camera</th><td>$row[16]</td></tr>
<tr><th colspan='2'>HARDWARE</th></tr>
<tr><th>system_chip</th><td>$row[17]</td></tr>
<tr><th>processor</th><td>$row[18]</td></tr>
<tr><th>graphic</th><td>$row[19]</td></tr>
<tr><th>ram</th><td>$row[20]</td></tr>
<tr><th>memory</th><td>$row[21]</td></tr>
<tr><th colspan='2'>BATTERY</th></tr>
<tr><th>capacity</th><td>$row[22]</td></tr>
<tr><th>battery_type</th><td>$row[23]</td></tr>
<tr><th>wireless_charging</th><td>$row[24]</td></tr>
<tr><th>talk_time</th><td>$row[25]</td></tr>
<tr><th>music</th><td>$row[26]</td></tr>
<tr><th>vedio</th><td>$row[27]</td></tr>
<tr><th colspan='2'>MULTIMEDIA</th></tr>
<tr><th>mirroring</th><td>$row[28]</td></tr>
<tr><th>speakers</th><td>$row[29]</td></tr>
<tr><th>microphone</th><td>$row[30]</td></tr>
<tr><th colspan='2'>CELLULAR</th></tr>
<tr><th>GSM</th><td>$row[31]</td></tr>
<tr><th>UMTS</th><td>$row[32]</td></tr>
<tr><th>LTE</th><td>$row[33]</td></tr>
<tr><th>data</th><td>$row[34]</td></tr>
<tr><th>sim_type</th><td>$row[35]</td></tr>
<tr><th colspan='2'>PHONE FEATURES</th></tr>
<tr><th>sensors</th><td>$row[36]</td></tr>
<tr><th>notifications</th><td>$row[37]</td></tr>
<tr><th colspan='2'>CONNECTIVITY</th></tr>
<tr><th>bluetooth</th><td>$row[38]</td></tr>
<tr><th>wi_fi</th><td>$row[39]</td></tr>
<tr><th>usb</th><td>$row[40]</td></tr>
<tr><th>positioning</th><td>$row[41]</td></tr>
<tr><th>navigation</th><td>$row[42]</td></tr>
<tr><th>other</th><td>$row[43]</td></tr>" ; 
echo "</table>";
if (strcmp($row[45], "OUT OF STOCK")!=0) {
	 echo "<br><h3>JUST FOR <span style='color:red;'>".$row[45]."</span> JD</h3>";
     $Location ='';
     if ($id<=20) 
     	$Location ='samsung';
     elseif ($id>20&&$id<=34)
     	$Location ='iphone';
     elseif ($id>34&&$id<=49)
     	$Location ='huawei';
     elseif ($id>49&&$id<=69)
     	$Location ='htc';
     elseif ($id>69&&$id<=81)
     	$Location ='lg';
     elseif ($id>81&&$id<=96)
     	$Location ='sony';
     else{ }
     	$query2 = "select path from mobile_info where id=$id" ; 
        $result2 = mysql_query($query2 , $conn) ; 
        $row2 = mysql_fetch_row($result2) ;
        $path=$row2[0];
     if($user==1){
     echo " 
     <table>
     <tr>
     <td><a href='buynow.php?id=$id&Location=$Location'><img src='img/BuyNow.png' height='150px' width='150px'></a></td>
     <td><a href='add.php?id=".$path."&Location=$Location'
     ><img src='img/cart.png' height='150px' width='150px'></a></td>
</tr>

</table>";}else echo "<h3 style='color:blue'>To buy This device or any another you must <a href='login.php'>login </a>!!</h3>";

}else
echo "<br><h3 style='color:red;'>$row[45]</h3>";


?>

</center>
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