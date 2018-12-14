<?
session_start();
session_destroy();
header('Location: http://localhost/project/home.php?error=1');
?>