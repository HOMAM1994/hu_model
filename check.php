<?session_start();
extract($_POST);
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$query1 = "select * from insert_device where voucher_number = $check1";
$query2 = "select * from repaired_devices where voucher_number = $check1";
$result1=mysql_query($query1 , $conn);
$result2=mysql_query($query2 , $conn);
$row1=mysql_fetch_row($result1);
$row2=mysql_fetch_row($result2);
if ($row1[4] != $check1 || $row1[0] != $check2) {
   header('Location: http://localhost/project/maintenance.php?error=1');
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
height: 550px;
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
.check1{
border-style:solid;
}
.check1{
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
/*.info{
   text-align: left;
   height: 250px;
   width: 400px;
   font-size: 22px;
   margin: auto;
}*/
.table1 {
   font-family: verdana,arial,sans-serif;
   font-size:11px;
   color:#333333;
   width: 40% ; 
   border-width: 1px;
   border-color: #999999;
   border-collapse: collapse;
   margin: auto;
}
.table1 th {
   text-align: left;
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
   text-align: center;
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
<?php
  echo "<table class='table1' border='2'>
<tr><th>Customer Name</th><td style='color:red;'> $row1[2]</td></tr> 
<tr><th>Phone Number</th><td style='color:red;'> 0$row1[3]</td></tr>
<tr><th>Device Name</th><td style='color:red;'> $row1[1]</td></tr>
<tr><th>Device IMEI</th><td style='color:red;'> $row1[0]</td></tr>"; 
if($row2[4]==$check1){
echo"<tr><th>Failer Element</th><td style='color:red;'> $row2[2]</td></tr>
<tr><th>Device Status</th><td style='color:red;'> $row2[1]</td></tr>
<tr><th>Cost</th><td style='color:red;'> $row2[3]</td></tr>";
}
else{
echo"<tr><th>Failer Element</th><td>under maintenance</td></tr>
<tr><th>Device Status</th><td>under maintenance</td></tr>
<tr><th>Cost</th><td>-----</td></tr>";

}

echo "</table>";
?>
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