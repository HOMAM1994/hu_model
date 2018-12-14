<?php session_start();
$buy=$_GET['id'];
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$query="select Device_name from mobile_info where id='$buy'";
$result=mysql_query($query);
$row = mysql_fetch_row($result);
$name = $row[0];
$user=$_SESSION['login'];
$query2="insert into orders values (null , '$user' , '$row[0]')";
$result2=mysql_query($query2);
header("Location:http://localhost/project/table.php?id=".$_GET['id']."&Location=".$_GET['Location']."&error=2");

?>