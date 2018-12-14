<?php session_start();
if (isset($_GET['id'])){  
for ($i=1; $i<=$_SESSION['itemsnumber'] ; $i++) { 
	if($_SESSION['item'.$i] === $_GET['id'])
		$_SESSION['item'.$i] = "0";
}
header("Location: http://localhost/project/showmyitems.php?error=1");
}
?>