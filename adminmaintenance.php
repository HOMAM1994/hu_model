<?session_start();
if (isset($_GET["error"])){
if ($_GET["error"]==1){
  echo "<script>alert('The device is already inserted !')</script>";
  }
  elseif ($_GET["error"]==2)
    echo "<script>alert('The device dose not inserted !')</script>";
  else
    echo "<script>alert('The device is already repaired !')</script>";
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
table {
  text-align: left;
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
    <li><a href="admin.php">Update & Delete</a> </li>
    <li style="background-color: #7A201E; border-radius:10px;
"><a href="adminmaintenance.php">Maintenance</a></li>
    <li><a href="orders.php">Orders</a></li>
    <li><a href="logout.php">Logout</a></li>

  </ul>

</div>
</header>
<div class="content">
<h2 style="color:red;">Insert Device :-</h2>
<form method="POST" action="insert.php">
<table style="height: 200px">
<tr><th><label>Device Name :- </th><th><input type="text" name="deviceName" required></th></label></tr>
<tr><th><label>Device IMEI :- </th><th><input type="text" name="deviceIMEI" required></th></label></tr>
<tr><th><label>Customer Name :- </th><th><input type="text" name="customerName" required></th></label></tr>
<tr><th><label>Phone Number :- </th><th><input type="text" name="phoneNumber" required></th></label></tr>
<tr><th><label>Voucher's number :- </th><th><input type="text" name="vouchernumber" required></th></label></tr>
<tr><th colspan="2" style="text-align: center;"><input type="submit" value="insert"></th></tr>
</table>
</form>
<br><hr><br>
<h2 style="color:red;">Repaired Devices :-</h2>
<form method="POST" action="repaired.php">
<table style="height: 200px">
<tr><th><label>Device IMEI :- </th><th><input type="text" name="deviceIMEI" required></th></label></tr>
<tr><th><label>Status :- </th><th><input type="text" name="deviceName" required></th></label></tr>
<tr><th><label>Failer element :- </th><th><input type="text" name="phoneNumber" required></th></label></tr>
<tr><th><label>Cost :- </th><th><input type="text" name="customerName" required></th></label></tr>
<tr><th><label>Voucher's number :- </th><th><input type="text" name="vouchernumber" required></th></label></tr>
<tr><th colspan="2" style="text-align: center;"><input type="submit" value="save"></th></tr>
</table>
</form>
</div>
</body>
</html>