<? session_start();
if ($_GET['error']==1) {
	echo "<script>alert('Item has been deleted successfully !')</script>";
}elseif($_GET['error']==2){
	echo "<script>alert('All items have been deleted successfully !')</script>";
}elseif($_GET['error']==3){
   echo "<script>alert('Thank you for shopping with us !')</script>";
   for ($i=1; $i<=$_SESSION['itemsnumber'] ; $i++) { 
      $_SESSION['item'.$i] = "0";
}
}
$conn = mysql_connect("localhost" , "root", "12345678") ;
     mysql_select_db("info" , $conn) ;

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
height:600px;
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
.check{
border-style:solid;
}
.check{
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
input.button{
	 border-radius: 7px ; 
      height: 30px;
      width: 70px;
      color : #fff;
      font-size: 16px ;
      font-weight: bold ;  
      background-color: #282828;
      width:110px; ;
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
<li><a href="maintenance.php">Maintenance Department</a></li>
<?
if (isset($_SESSION['login'])){
	echo "<li><a href='logout.php'>Log out</a></li>";
	echo "<li style='background-color:#7A201E; border-radius:10px;'><a href='showmyitems.php'><img src='img/showcart.png' width='25px' height='25px' ></a></li>";
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
echo "";
$price="";
$count=0;
$table=array("mobile_info" , "pc_info" , "printer_info" , "accessories_info");
if ($_SESSION['itemsnumber']!=0) {
for($i=1;$i<=$_SESSION['itemsnumber'];$i++){
$item=$_SESSION['item'.$i];
if($item != "0"){
for ($j=0; $j <4 ; $j++) { 
$query="select price from ".$table[$j]." where path='$item'";
$result=mysql_query($query , $conn);
$row=mysql_fetch_row($result);
if($row){
 
echo "
<table>
<tr><td>
<img src=\"".$item."\" height='200px' width='240px' ></td><td style='font-weight:bold;'>Price : <span style='color:red;'> ".$row[0]." </span> JD</td><td style='padding-left:100px;'><a href='delete.php?id=".$_SESSION['item'.$i]."'><input type='button' value='Delete Item' class='button' ></a></td></tr></table><br><br><br>"; break;}


}
/*$select = "select price from  mobile_info where path = '$item'";
$q=mysql_query($select , $conn);
$price=mysql_fetch_row($q);*/

}
else{
   $count++;
}
}if($count != $_SESSION['itemsnumber']){
echo "<br><br><br><center><a href='buyAll.php'><input type='button' value='BUY NOW' name='buyAll' class='button'></a>
<a href='deleteall.php'><input type='button' value='DELETE All' class='button'></a>
</center>";}else 
echo "<center><h2 style='color:red'>There Are No Items !!!</h2></center>";

}
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