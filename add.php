<?
session_start();
if (isset($_GET['id'])){  
$_SESSION['itemsnumber']+=1;
$itemnumbersession=$_SESSION['itemsnumber'];
$_SESSION['item'.$itemnumbersession]=$_GET['id'];
$Location=$_GET['Location'];
header('Location: http://localhost/project/'.$Location.'.php?id='.$_GET["id"].'&error=1');
}
?>