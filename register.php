
<!doctype html>
<html>
<head>
<title>Register</title>
<meta charset="utf-8">
<Style type="text/css">
.table tr{
height:35px;
}
*{
margin:0;
padding:0;
}
.table{
	 border: 2px solid #000 ;
    border-radius: 7.1px ;
    background-color:rgba(131, 136, 138, 0.15);  
    border-style:solid;
    border-width:2px;
    padding:40px 60px 30px 60px;
    margin:100px 0px;
}
body{
 background-image: url("img/bg1.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
td{
  color: white;
}
</style>
</head>
<body>
<center>
<form method="post" action="reg.php">
<table class="table">
<tr>
<td>First name : </td>
<td><input type="text" name="fname" required></td>
</tr>
<tr>
<td>Last name :  </td>
<td><input type="text" name="lname" required></td>
</tr>
<tr>
<td>User name :  </td>
<td><input type="text" name="user" required></td>
</tr>
<tr>
<td>Password : </td>
<td><input type="password" name="pass" ></td>
</tr>
<tr>
<td>Email :  </td>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td>Post office : </td>
<td><input type="text" name="poffice" required></td>
</tr>
<tr>
<td>Country code :</td>
<td><input type="text" name="code" required></td>
</tr>
<tr>
<td>Phone number : </td>
<td><input type="tel" pattern="07\d{8}" name="tel" required></td>
</tr>
<tr>
<td>Address :  </td>
<td><textarea cols="20" rows="5" name="address" required></textarea></td>
</tr>
<tr></tr>
<tr><td colspan="2"><center><input type="submit" style="border-radius: 7px ; 
      height: 30px;
      width: 70px;
      color : #fff;
      font-size: 16px ;
      font-weight: bold ;  
      background-color: #282828;">
<input type="reset" value="clear all" style="border-radius: 7px ; 
      height: 30px;
      width: 70px;
      color : #fff;
      font-size: 16px ;
      font-weight: bold ;  
      background-color: #282828;"></center></td></tr>
</table>
</form>
</center>
</body>
</html>