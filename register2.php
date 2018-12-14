<html>
<head>
<title> sign up  </title>
<meta charset="UTF-8">
<link href="css.css" rel="stylesheet" type="text/css"></link>
<style>
#form{
float:right;
margin-right:200px;
label{

font-size:20px;
}

</style>
</head>
<body background="signin.jpg">
<div id="navbar">
 <div id="logo"><img src="log.png"/> </div>
<ul id="navbarmenu" class="cnmuajm">
<li><a class="hmenulin" href="firstpage.html"></a></li>

 <li style = "color : #694B5F"><a href="home.html">الصفحة الرئيسية
<img src="homelogo.jpg"></a></a></li>
<li style = "color : #694B5F" ><a href="conectUs.html">تواصل معنا 
<img src="conclogo.jpg"></a>
</a></li>
 <li><a href="about.html">عن موقع خدماتي
 <img src=" aboutlogo.jpg">
</a></li>

</ul>
</div>

<form method="post" action="add2.php">
<div id="form">
<h1> انشاء حساب </h1>
<h3> إنه مجـاني , و سيبقى مجاني </h3>
<input type="text" size="20px" placeholder="الإسم الأول " name="firstname"></input> 
<input type="text" size="20px" placeholder="الإسم الأخير " name="lastname"></input> <br><br>
<input type="email" size="40px" placeholder="البريد الإلكتروني " name="email"></input> <br><br>
<input type="text" size="40px" placeholder="اسم المستخدم " name="username"></input> <br><br>
<input type="Password" size="40px" placeholder="كلمة المرور " name="password"></input> <br><br>

<center>
<input  type="submit" value="إنشاء حساب "></input></center>
</label>

</div>
</form>
</body>
</html>