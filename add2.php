<?php
extract($_POST);
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$query="insert into mytable values (null ,'$firstname','$lastname','$email' ,'$username','$password')";
$result=mysql_query($query , $conn);
if ($result) {
	echo "<script>alert('you create new account successfully');</script>";
	// header("Location:");
}else{
echo"<script>alert('error');</script>";
}
?>