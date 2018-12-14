<?session_start();?>
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
<div class="header3">
<ul>
<li><a href="samsung.php">Samsung</a></li>
<li><a href="iphone.php">Iphone</a></li>
<li><a href="huawei.php">Huawei</a></li>
<li style="background-color:#7A201E; border-radius:10px;"><a href="htc.php">HTC</a></li>
<li><a href="lG.php">LG</a></li>
<li><a href="sony.php">Sony</a></li>
</ul>
</div>
</header>
<div class="content">
<center>
<table class="table">
<tr>
<td><figure><figcaption>HTC-Desire-EYE</figcaption><a href="http://localhost/project/table.php?id=50"><img src="img/HTC-Desire-EYE.jpg" height="200" width="250" alt="HTC-Desire-EYE" ></a></figure></td>
<td><figure><figcaption>HTC-One-E9</figcaption><a href="http://localhost/project/table.php?id=51"><img src="img/HTC-One-E9.jpg" height="200" width="250" alt="HTC-One-E9" ></a></figure></td>
<td><figure><figcaption>HTC-One-M8s</figcaption><a href="http://localhost/project/table.php?id=52"><img src="img/HTC-One-M8s.jpg" height="200" width="250" alt="HTC-One-M8s" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>HTC-One-X9</figcaption><a href="http://localhost/project/table.php?id=53"><img src="img/HTC-One-X9.jpg" height="200" width="250" alt="HTC-One-X9"  ></a></figure></td>
<td><figure><figcaption>HTC-Desire-530</figcaption><a href="http://localhost/project/table.php?id=54"><img src="img/HTC-Desire-530.jpg" height="200" width="250" alt="HTC-Desire-530" ></a></figure></td>
<td><figure><figcaption>HTC-Desire-516</figcaption><a href="55"><img src="img/HTC-Desire-516.jpg" height="200" width="250" alt="HTC-Desire-516" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>HTC-Desire-210</figcaption><a href="http://localhost/project/table.php?id=56"><img src="img/HTC-Desire-210.jpg" height="200" width="250" alt="HTC-Desire-210" ></a></figure></td>
<td><figure><figcaption>HTC-One-M8-for-Windows</figcaption><a href="http://localhost/project/table.php?id=57"><img src="img/HTC-One-M8-for-Windows.jpg" height="200" width="250" alt="HTC-One-M8-for-Windows" ></a></figure></td>
<td><figure><figcaption>HTC-Desire-510</figcaption><a href="http://localhost/project/table.php?id=58"><img src="img/HTC-Desire-510.jpg" height="200" width="250" alt="HTC-Desire-510" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>HTC-Desire-820</figcaption><a href="http://localhost/project/table.php?id=59"><img src="img/HTC-Desire-820.jpg" height="200" width="250" alt="HTC-Desire-820" ></a></figure></td>
<td><figure><figcaption>HTC-Desire-620</figcaption><a href="http://localhost/project/table.php?id=60"><img src="img/HTC-Desire-620.jpg" height="200" width="250" alt="HTC-Desire-620" ></a></figure></td>
<td><figure><figcaption>HTC-Desire-320</figcaption><a href="http://localhost/project/table.php?id=61"><img src="img/HTC-Desire-320.jpg" height="200" width="250" alt="HTC-Desire-320" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>HTC-One-ME</figcaption><a href="http://localhost/project/table.php?id=62"><img src="img/HTC-One-ME.jpg" height="200" width="250" alt="HTC-One-ME" ></a></figure></td>
<td><figure><figcaption>HTC-Desire-825</figcaption><a href="http://localhost/project/table.php?id=63"><img src="img/HTC-Desire-825.jpg" height="200" width="250" alt="HTC-Desire-825" ></a></figure></td>
<td><figure><figcaption>HTC-10</figcaption><a href="http://localhost/project/table.php?id=64"><img src="img/HTC-10.jpg" height="200" width="250" alt="HTC-10" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>HTC-One-S9</figcaption><a href="http://localhost/project/table.php?id=65"><img src="img/HTC-One-S9.jpg" height="200" width="250" alt="HTC-One-S9" ></a></figure></td>
<td><figure><figcaption>HTC-One-M9-Prime-Camera-Edition</figcaption><a href="http://localhost/project/table.php?id=66"><img src="img/HTC-One-M9-Prime-Camera-Edition.jpg" height="200" width="250" alt="HTC-One-M9-Prime-Camera-Edition" ></a></figure></td>
<td><figure><figcaption>HTC-One-A9s</figcaption><a href="http://localhost/project/table.php?id=67"><img src="img/HTC-One-A9s.jpg" height="200" width="250" alt="HTC-One-A9s" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>HTC-Desire-10-pro</figcaption><a href="http://localhost/project/table.php?id=68"><img src="img/HTC-Desire-10-pro.jpg" height="200" width="250" alt="HTC-Desire-10-pro" ></a></figure></td>
<td><figure><figcaption>HTC-Desire-10-lifestyle</figcaption><a href="http://localhost/project/table.php?id=69"><img src="img/HTC-Desire-10-lifestyle.jpg" height="200" width="250" alt="HTC-Desire-10-lifestyle" ></a></figure></td>
</tr>
</table>
</center>
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