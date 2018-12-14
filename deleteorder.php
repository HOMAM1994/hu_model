<?
extract($_GET);
$conn = mysql_connect("localhost" , "root" , "12345678");
mysql_select_db("info" , $conn);
$query="delete from orders where id='$id'";
mysql_query($query);
header("Location:http://localhost/project/orders.php?error=1");

?>