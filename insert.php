<?php session_start();
extract($_POST);
$conn=mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$check="select device_IMEI from insert_device where device_IMEI = $deviceIMEI";
$checkResult=mysql_query($check ,$conn);
if (!mysql_num_rows($checkResult)>0){ 
 $query="insert into insert_device values ('$deviceIMEI','$deviceName','$customerName','$phoneNumber','$vouchernumber')";
 $result=mysql_query($query ,$conn);
 header('Location: http://localhost/project/adminmaintenance.php'); } 
else{
	 header('Location: http://localhost/project/adminmaintenance.php?error=1');  
}
	


?>