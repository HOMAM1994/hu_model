<?php
extract($_POST);
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$query="select * from mytable where user='$username'";
$result=mysql_query($query , $conn);
$row=mysql_fetch_row($result);
$numrows=mysql_num_rows($result);
if ($numrows!=0) {

if (strcmp($row[4] , $username)==0 && strcmp($row[5] , $password)==0) {
	echo "<script>alert('Welcome');</script>";
	// header("Location:");
}else
echo"<script>alert('incorrect username or password');</script>";
}
?>