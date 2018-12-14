<?php 
session_start();
if (isset($_POST['user'])){
$userName = $_POST['user'];
    $password = $_POST['pass'] ;  
    $conn = mysql_connect("localhost" , "root" , "12345678") ;
    mysql_select_db("info" , $conn) ;
    $s="";
    if (isset($choose) && $choose=="admin") $s="admin";
    else $s="customer_info"; 
    $query  = "select * from $s where user = '$userName' and pass = '$password'";
    $result=mysql_query($query , $conn);
    if(mysql_num_rows($result)==1){
      $_SESSION['login']=$userName;
      if($s==="admin")header('Location: http://localhost/project/admin.php');
      else header('Location: http://localhost/project/home.php');
   }
   else {
     echo "<script>alert('incorrect user name or password')</script>";
   }
}

?>
<!doctype html>
<html>
<head>

<title>Log in</title>
<meta charset="utf-8">
<Style type="text/css">
.table tr{
    height:35px;
}
.table{
    border: 2px solid #000 ;
    border-radius: 7.1px ;
    background-color:rgba(131, 136, 138, 0.10);  
    border-style:solid;
    border-width:2px;
    padding:40px 60px 30px 60px;
    margin:200px 0px;
}
body{ 
    background-image: url("img/bg1.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
label,h4{
  color: white;
}
a{
  text-decoration: none;
  color: yellow;
}
</style>
</head>

<body>


<center>
<form method="post" action="login.php" id="form">
<table class="table">
<tr>
<td><label>user name:</td>
<td><input type="text" name="user" id="username" placeholder="Enter user name"  required></label></td>
</tr>
<tr>
<td><label>password:</td>
<td><input type="password" name="pass" id="password" placeholder="Enter password" required></label></td>
</tr>
<tr>
<td colspan="2">
<center>
<table>
<tr>
<td>
<label><input type="radio" name="choose" value="admin">pharmes</label>
<label><input type="radio" name="choose" value="member" checked>user</label>
</td>
</table>
  <br><input type='submit' value='Log in' style="border-radius: 7px ; 
      height: 30px;
      width: 70px;
      color : #fff;
      font-size: 16px ;
      font-weight: bold ;  
      background-color: #282828;"> 
</form>
</center>
</td>
</tr>
<tr><td colspan="2"><center><h4>If you don't have an account <a href="register.php">Sign Up</a> Now</h4></center></td></tr>
</table>
</center>
</body>
</html>