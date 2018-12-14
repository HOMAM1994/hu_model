<?php session_start();
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$name=array("");
$order="";
$table=array("mobile_info" , "pc_info" , "printer_info" , "accessories_info");
for($i=1;$i<=$_SESSION['itemsnumber'];$i++){
$item=$_SESSION['item'.$i];
if(strcmp($item,"0")!=0){
	for ($j=0; $j <4 ; $j++) { 
$query="select Device_name from ".$table[$j]." where path='$item'";
$result=mysql_query($query , $conn);
$row=mysql_fetch_row($result);
if($row){
 $order=$order." "."(".$row[0].")";
break;
}
else{} 

}
}
}
$user=$_SESSION['login'];
$query2="insert into orders values (null , '$user' , '$order')";
$result2=mysql_query($query2);
header("Location:http://localhost/project/showmyitems.php?error=3");
?>