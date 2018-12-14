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
<li style="background-color:#7A201E; border-radius:10px;"><a href="samsung.php">Samsung</a></li>
<li><a href="iphone.php">Iphone</a></li>
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
<td><figure><figcaption>Samsung Galaxy S6</figcaption><a href="http://localhost/project/table.php?id=1"><img src="img/S6.jpeg" height="200" width="250" alt="Samsung Galaxy S6" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy S6 edge</figcaption><a href="http://localhost/project/table.php?id=2"><img src="img/S6 edge.jpeg" height="200" width="250" alt="Samsung Galaxy S6 edge" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy S6 edge+</figcaption><a href="http://localhost/project/table.php?id=3"><img src="img/S6 edge plus.jpg" height="200" width="250" alt="Samsung Galaxy S6 edge+" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Samsung Galaxy Note4</figcaption><a href="http://localhost/project/table.php?id=4"><img src="img/Note 4.jpeg" height="200" width="250" alt="Samsung Galaxy Note4"  ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy Note5</figcaption><a href="http://localhost/project/table.php?id=5"><img src="img/Note 5.jpeg" height="200" width="250" alt="Samsung Galaxy Note5" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy Note edge</figcaption><a href="http://localhost/project/table.php?id=6"><img src="img/Note edge.jpeg" height="200" width="250" alt="Samsung Galaxy Note edge" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Samsung Galaxy A3 2016</figcaption><a href="http://localhost/project/table.php?id=7"><img src="img/A3 2016.jpeg" height="200" width="250" alt="Samsung Galaxy A3 2016" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy A5 2016</figcaption><a href="http://localhost/project/table.php?id=8"><img src="img/A5 2016.jpeg" height="200" width="250" alt="Samsung Galaxy A5 2016" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy A7 2016</figcaption><a href="http://localhost/project/table.php?id=9"><img src="img/A7 2016.jpeg" height="200" width="250" alt="Samsung Galaxy A7 2016" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Samsung Galaxy J3 2016</figcaption><a href="http://localhost/project/table.php?id=10"><img src="img/j3 2016.jpeg" height="200" width="250" alt="Samsung Galaxy J3 2016" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy J5 2016</figcaption><a href="http://localhost/project/table.php?id=11"><img src="img/j5 2016.jpeg" height="200" width="250" alt="Samsung Galaxy J5 2016" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy J7 2016</figcaption><a href="http://localhost/project/table.php?id=12"><img src="img/j7 2016.jpeg" height="200" width="250" alt="Samsung Galaxy J7 2016" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Samsung Galaxy J1 2016</figcaption><a href="http://localhost/project/table.php?id=13"><img src="img/j1 2016.jpeg" height="200" width="250" alt="Samsung Galaxy J1 2016" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy J1 ace</figcaption><a href="http://localhost/project/table.php?id=14"><img src="img/j1 ace.jpeg" height="200" width="250" alt="Samsung Galaxy J1 ace" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy J1 mini</figcaption><a href="http://localhost/project/table.php?id=15"><img src="img/j1 mini.jpeg" height="200" width="250" alt="Samsung Galaxy J1 mini" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Samsung Galaxy J2</figcaption><a href="http://localhost/project/table.php?id=16"><img src="img/j2.jpeg" height="200" width="250" alt="Samsung Galaxy J2" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy J7 prime</figcaption><a href="http://localhost/project/table.php?id=17"><img src="img/j7 prime.jpeg" height="200" width="250" alt="Samsung Galaxy J7 prime" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy A8 2016</figcaption><a href="http://localhost/project/table.php?id=18"><img src="img/A8 2016.jpeg" height="200" width="250" alt="Samsung Galaxy A8 2016" ></a></figure></td>
</tr>
<tr>
<td><figure><figcaption>Samsung Galaxy S7</figcaption><a href="http://localhost/project/table.php?id=19"><img src="img/S7.jpg" height="200" width="250" alt="Samsung Galaxy S7" ></a></figure></td>
<td><figure><figcaption>Samsung Galaxy S7 edge</figcaption><a href="http://localhost/project/table.php?id=20"><img src="img/S7 edge.jpeg" height="200" width="250" alt="Samsung Galaxy S7 edge" ></a></figure></td>
</tr>
</table>
</center>
</div>
<footer>
<table class="contactus">
	<tr><td><a href="https://www.facebook.com/Fox.OF.Programing"><img src="img/facebook.png" height="40px" width="40px"></a></td>
	<td><a href="https://www.twitter.com"><img src="img/twitter.png" height="40px" width="40px"></a></td>
	<td><img src="img/google.png" height="40px" width="40px"></td>
	<td><a href="mailto:ahed.mamoum.96@hotmail.com"><img src="img/outlook.png" height="40px" width="40px"></a></td></tr>
</table>
<hr style="margin: 40px 80px 0px 80px;">	
<p style="color: white; text-align: center;">CopyRight &copy; FASTER LINK &nbsp; 2016</p>
</footer>
</body>
</html>