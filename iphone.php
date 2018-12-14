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
<li style="background-color:#7A201E; border-radius:10px;"><a href="iphone.php">Iphone</a></li>
<li><a href="huawei.php">Huawei</a></li>
<li><a href="htc.php">HTC</a></li>
<li><a href="lG.php">LG</a></li>
<li><a href="sony.php">Sony</a></li>
</ul>
</div>
</header>
<div class="content">
<center>
<table class="table">
<tr>
<td><figure><figcaption>Iphone 5S</figcaption><a href="http://localhost/project/table.php?id=21"><img src="img/5s.jpg" height="150" width="250" alt="Iphone 5S" ></a></figure></td>
<td><figure><figcaption>Iphone 6</figcaption><a href="http://localhost/project/table.php?id=22"><img src="img/6S.jpg" height="150" width="250" alt="Iphone 6" ></a></figure></td>
<td><figure><figcaption>Iphone 6S</figcaption><a href="http://localhost/project/table.php?id=23"><img src="img/6S.jpg" height="150" width="250" alt="Iphone 6S" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Iphone 6 plus</figcaption><a href="http://localhost/project/table.php?id=24"><img src="img/6S plus.jpg" height="150" width="250" alt="Iphone 6 plus"  ></a></figure></td>
<td><figure><figcaption>Iphone 6S plus</figcaption><a href="http://localhost/project/table.php?id=25"><img src="img/6S plus.jpg" height="150" width="250" alt="Iphone 6 plus" ></a></figure></td>
<td><figure><figcaption>Iphone 7</figcaption><a href="http://localhost/project/table.php?id=26"><img src="img/7.jpeg" height="150" width="250" alt="Iphone 7" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Iphone 7 plus</figcaption><a href="http://localhost/project/table.php?id=27"><img src="img/7 plus.jpg" height="150" width="250" alt="Iphone 7 plus" ></a></figure></td>
<td><figure><figcaption>Iphone SE</figcaption><a href="http://localhost/project/table.php?id=28"><img src="img/SE.jpg" height="150" width="250" alt="Iphone SE" ></a></figure></td>
<td><figure><figcaption>Ipad mini</figcaption><a href="http://localhost/project/table.php?id=29"><img src="img/mini.jpg" height="150" width="250" alt="Ipad mini" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Ipad mini 2</figcaption><a href="http://localhost/project/table.php?id=30"><img src="img/mini 2.jpg" height="150" width="250" alt="Ipad mini 2" ></a></figure></td>
<td><figure><figcaption>Ipad mini 3</figcaption><a href="http://localhost/project/table.php?id=31"><img src="img/mini 3.jpg" height="150" width="250" alt="Ipad mini 3" ></a></figure></td>
<td><figure><figcaption>Ipad mini 4</figcaption><a href="http://localhost/project/table.php?id=32"><img src="img/mini 4.jpg" height="150" width="250" alt="Ipad mini 4" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Ipad Air </figcaption><a href="http://localhost/project/table.php?id=33"><img src="img/air.jpg" height="150" width="250" alt="Ipad Air" ></a></figure></td>
<td><figure><figcaption>Ipad Pro</figcaption><a href="http://localhost/project/table.php?id=34"><img src="img/pro.png" height="150" width="250" alt="Ipad Pro" ></a></figure></td>
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