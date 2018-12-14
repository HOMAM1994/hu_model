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
<li><a href="htc.php">HTC</a></li>
<li><a href="lG.php">LG</a></li>
<li style="background-color:#7A201E; border-radius:10px;"><a href="sony.php">Sony</a></li>
</ul>
</div>
</header>
<div class="content">
<center>
<table class="table">
<tr>
<td><figure><figcaption>Sony-Xperia-M2</figcaption><a href="http://localhost/project/table.php?id=82"><img src="img/Sony-Xperia-M2.jpg" height="200" width="250" alt="Sony-Xperia-M2" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-Z2</figcaption><a href="http://localhost/project/table.php?id=83"><img src="img/Sony-Xperia-Z2.jpg" height="200" width="250" alt="Sony-Xperia-Z2" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-T2-Ultra</figcaption><a href="http://localhost/project/table.php?id=84"><img src="img/Sony-Xperia-T2-Ultra.jpg" height="200" width="250" alt="Sony-Xperia-T2-Ultra" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Sony-Xperia-T3</figcaption><a href="http://localhost/project/table.php?id=85"><img src="img/Sony-Xperia-T3.jpg" height="200" width="250" alt="Sony-Xperia-T3"  ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-C3</figcaption><a href="http://localhost/project/table.php?id=86"><img src="img/Sony-Xperia-C3.jpg" height="200" width="250" alt="Sony-Xperia-C3" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-Z3</figcaption><a href="http://localhost/project/table.php?id=87"><img src="img/Sony-Xperia-Z3.jpg" height="200" width="250" alt="Sony-Xperia-Z3" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Sony-Xperia-M5</figcaption><a href="http://localhost/project/table.php?id=88"><img src="img/Sony-Xperia-M5.jpg" height="200" width="250" alt="Sony-Xperia-M5" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-Z5-Compact</figcaption><a href="http://localhost/project/table.php?id=89"><img src="img/Sony-Xperia-Z5-Compact.jpg" height="200" width="250" alt="Sony-Xperia-Z5-Compact" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-Z5</figcaption><a href="http://localhost/project/table.php?id=90"><img src="img/Sony-Xperia-Z5.jpg" height="200" width="250" alt="Sony-Xperia-Z5" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Sony-Xperia-Z5-Premium</figcaption><a href="http://localhost/project/table.php?id=91"><img src="img/Sony-Xperia-Z5-Premium.jpg" height="200" width="250" alt="Sony-Xperia-Z5-Premium" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-X</figcaption><a href="http://localhost/project/table.php?id=92"><img src="img/Sony-Xperia-X.jpg" height="200" width="250" alt="Sony-Xperia-X" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-XA-Ultra</figcaption><a href="http://localhost/project/table.php?id=93"><img src="img/Sony-Xperia-XA-Ultra.jpg" height="200" width="250" alt="Sony-Xperia-XA-Ultra" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Sony-Xperia-E5</figcaption><a href="http://localhost/project/table.php?id=94"><img src="img/Sony-Xperia-E5.jpg" height="200" width="250" alt="Sony-Xperia-E5" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-X-Compact</figcaption><a href="http://localhost/project/table.php?id=95"><img src="img/Sony-Xperia-X-Compact.jpg" height="200" width="250" alt="Sony-Xperia-X-Compact" ></a></figure></td>
<td><figure><figcaption>Sony-Xperia-XZ</figcaption><a href="http://localhost/project/table.php?id=96"><img src="img/Sony-Xperia-XZ.jpg" height="200" width="250" alt="Sony-Xperia-XZ" ></a></figure></td>
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