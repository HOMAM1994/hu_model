<?php session_start();
for ($i=1; $i<=$_SESSION['itemsnumber'] ; $i++) { 
		$_SESSION['item'.$i] = "0";
}
header("Location: http://localhost/project/showmyitems.php?error=2");
?>