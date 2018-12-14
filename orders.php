<?session_start();
$error=$_GET['error'];
if ($error==1) {
  echo"<script>alert('order deleted')</script>";
}
?>
<!doctype html>
<html>
<head>
<title>Smart phones &amp; Tablets</title>
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
height: 600px;
overflow: auto;
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
.red{
color: red;
font-size: 18px;
}
.order{
  width: 300px;
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
    <li ><a href="admin.php">Update & Delete</a> </li>
    <li><a href="adminmaintenance.php">Maintenance</a></li>
    <li style="background-color: #7A201E; border-radius:10px;
"><a href="orders.php">Orders</a></li>
    <li><a href="logout.php">Logout</a></li>

  </ul>

</div>
</header>
<div class="content">
<?php
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$query="select * from orders";
$result=mysql_query($query);
if($result){
echo "<center><table class='order' border='1'><tr><td>ID</td><td>USER</td><td>ORDER</td><td>Delete</td></tr>";
while($r=mysql_fetch_row($result)){
echo "<tr>";
foreach($r as $v){
echo "
<td>$v</td>
";
}
echo "<td><a href='deleteorder.php?id=$r[0]'><input type='button' value='Delete order'></a></td>";
echo "</tr>";
}
echo "</table></center>";
}
?>
</div>
</body>
</html>