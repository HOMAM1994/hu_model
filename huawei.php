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
<li style="background-color:#7A201E; border-radius:10px;"><a href="huawei.php">Huawei</a></li>
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
<td><figure><figcaption>Huawei Y635 </figcaption><a href="http://localhost/project/table.php?id=35"><img src="img/Huawei Y635.jpg" height="200" width="250" alt="Huawei Y635" ></a></figure></td>
<td><figure><figcaption>Huawei-Y625</figcaption><a href="http://localhost/project/table.php?id=36"><img src="img/Huawei-Y625.jpg" height="200" width="250" alt="Huawei-Y625" ></a></figure></td>
<td><figure><figcaption>Huawei G8</figcaption><a href="http://localhost/project/table.php?id=37"><img src="img/Huawei G8.jpg" height="200" width="250" alt="Huawei G8" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Huawei Y6 pro</figcaption><a href="http://localhost/project/table.php?id=38"><img src="img/Huawei Y6 pro.jpg" height="200" width="250" alt="Huawei Y6 pro"  ></a></figure></td>
<td><figure><figcaption>Huawei-GR3</figcaption><a href="http://localhost/project/table.php?id=39"><img src="img/Huawei-GR3.jpg" height="200" width="250" alt="Huawei-GR3" ></a></figure></td>
<td><figure><figcaption>Huawei-G7-Plus2</figcaption><a href="http://localhost/project/table.php?id=40"><img src="img/Huawei-G7-Plus2.jpg" height="200" width="250" alt="Huawei-G7-Plus2" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Huawei-GR5-5</figcaption><a href="http://localhost/project/table.php?id=41"><img src="img/Huawei-GR5-5.jpg" height="200" width="250" alt="Huawei-GR5-5" ></a></figure></td>
<td><figure><figcaption>Huawei-Honor-8</figcaption><a href="http://localhost/project/table.php?id=42"><img src="img/Huawei-Honor-8.jpg" height="200" width="250" alt="Huawei-Honor-8" ></a></figure></td>
<td><figure><figcaption>Huawei_p9_lite</figcaption><a href="http://localhost/project/table.php?id=43"><img src="img/huawei_p9_lite.jpeg" height="200" width="250" alt="huawei_p9_lite" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Huawei-P8-Lite</figcaption><a href="http://localhost/project/table.php?id=44"><img src="img/Huawei-P8-Lite.jpg" height="200" width="250" alt="Huawei-P8-Lite" ></a></figure></td>
<td><figure><figcaption>Huawei G7</figcaption><a href="http://localhost/project/table.php?id=45"><img src="img/Huawei G7.jpg" height="200" width="250" alt="Huawei G7" ></a></figure></td>
<td><figure><figcaption>Huawei-Mate-S</figcaption><a href="http://localhost/project/table.php?id=46"><img src="img/Huawei-Mate-S.png" height="200" width="250" alt="Huawei-Mate-S" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Huawei Y3c</figcaption><a href="http://localhost/project/table.php?id=47"><img src="img/Huawei Y3c.jpg" height="200" width="250" alt="Huawei Y3c" ></a></figure></td>
<td><figure><figcaption>Huawei-Mate8</figcaption><a href="http://localhost/project/table.php?id=48"><img src="img/Huawei-m8.jpg" height="200" width="250" alt="Huawei-Mate8" ></a></figure></td>
<td><figure><figcaption>Huawei mate7</figcaption><a href="http://localhost/project/table.php?id=49"><img src="img/Huawei mate7.jpg" height="200" width="250" alt="Huawei mate7" ></a></figure></td>
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