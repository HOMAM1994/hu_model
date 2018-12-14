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
?></ul>
</div>
<div class="header3">
<ul>
<li><a href="samsung.php">Samsung</a></li>
<li><a href="iphone.php">Iphone</a></li>
<li><a href="huawei.php">Huawei</a></li>
<li><a href="htc.php">HTC</a></li>
<li style="background-color:#7A201E; border-radius:10px;"><a href="lG.php">LG</a></li>
<li><a href="sony.php">Sony</a></li>
</ul>
</div>
</header>
<div class="content">
<center>
<table class="table">
<table class="table">
<tr>
<td><figure><figcaption>LG-V20</figcaption><a href="http://localhost/project/table.php?id=70"><img src="img/LG-V20.jpg" height="200" width="250" alt="LG-V20" ></a></figure></td>
<td><figure><figcaption>LG-G5</figcaption><a href="http://localhost/project/table.php?id=71"><img src="img/LG-G5.jpg" height="200" width="250" alt="LG-G5" ></a></figure></td>
<td><figure><figcaption>LG-G2</figcaption><a href="http://localhost/project/table.php?id=72"><img src="img/LG-G2.jpg" height="200" width="250" alt="LG-G2" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>LG-G-Flex</figcaption><a href="http://localhost/project/table.php?id=73"><img src="img/LG-G-Flex.jpg" height="200" width="250" alt="LG-G-Flex"  ></a></figure></td>
<td><figure><figcaption>LG-G3</figcaption><a href="http://localhost/project/table.php?id=74"><img src="img/LG-G3.jpg" height="200" width="250" alt="LG-G3" ></a></figure></td>
<td><figure><figcaption>LG-G3-s</figcaption><a href="http://localhost/project/table.php?id=75"><img src="img/LG-G3-s.jpg" height="200" width="250" alt="LG-G3-s" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>LG-G3-Stylus</figcaption><a href="http://localhost/project/table.php?id=76"><img src="img/LG-G3-Stylus.jpg" height="200" width="250" alt="LG-G3-Stylus" ></a></figure></td>
<td><figure><figcaption>LG-G4</figcaption><a href="http://localhost/project/table.php?id=77"><img src="img/LG-G4.jpg" height="200.jpg" width="250" alt="LG-G4" ></a></figure></td>
<td><figure><figcaption>LG-G4-Beat</figcaption><a href="http://localhost/project/table.php?id=78"><img src="img/LG-G4-Beat.jpg" height="200" width="250" alt="LG-G4-Beat" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>LG-K10</figcaption><a href="http://localhost/project/table.php?id=78"><img src="img/LG-K10.jpg" height="200" width="250" alt="LG-K10" ></a></figure></td>
<td><figure><figcaption>LG-K8</figcaption><a href="http://localhost/project/table.php?id=80"><img src="img/LG-K8.jpg" height="200" width="250" alt="LG-K8" ></a></figure></td>
<td><figure><figcaption>LG-K8V</figcaption><a href="http://localhost/project/table.php?id=81"><img src="img/LG-K8V.jpg" height="200" width="250" alt="LG-K8V" ></a></figure></td>
</tr>

</table>
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