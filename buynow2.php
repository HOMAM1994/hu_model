<?php session_start();
$buy=$_GET['id'];
$Location=$_GET['Location']."_info";
$user=$_SESSION['login'];
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$query="select Device_name from $Location where path='$buy'";
$result=mysql_query($query , $conn);
$row=mysql_fetch_row($result);
$query2="insert into orders values (null , '$user' , '$row[0]')";
$result2=mysql_query($query2 , $conn);
if(strcmp($_GET['Location'],"printer")==0){
$_GET['Location']="printers";}
header("Location:http://localhost/project/".$_GET['Location'].".php?error=2");

?>