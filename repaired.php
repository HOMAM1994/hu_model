<?php session_start();
extract($_POST);
$conn=mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$check1="select device_IMEI from insert_device where device_IMEI = $deviceIMEI";
$checkResult1=mysql_query($check1 ,$conn);
$check2="select device_IMEI from repaired_devices where device_IMEI = $deviceIMEI";
$checkResult2=mysql_query($check2 ,$conn);
if (mysql_num_rows($checkResult1)==1 && mysql_num_rows($checkResult2)==0){ 
 $query="insert into repaired_devices values ('$deviceIMEI','$deviceName','$phoneNumber','$customerName','$vouchernumber')";
 $result=mysql_query($query ,$conn);
 header('Location: http://localhost/project/adminmaintenance.php'); } 
else{
	if(mysql_num_rows($checkResult1)!=1)
	 header('Location: http://localhost/project/adminmaintenance.php?error=2'); 
	 else  
	 header('Location: http://localhost/project/adminmaintenance.php?error=3'); 

}
	


?>