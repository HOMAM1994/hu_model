<?php 
    $conn = mysql_connect("localhost" , "root", "12345678") ;
     mysql_select_db("info" , $conn) ;  
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"]; 
    $user = $_POST["user"]; 
    $pass = $_POST["pass"]; 
    $email = $_POST["email"]; 
    $poffice = $_POST["poffice"]; 
    $code = $_POST["code"]; 
    $tel = $_POST["tel"]; 
    $adress = $_POST["address"]; 
    $check="select user from customer_info";
    $checkrow= mysql_query($check);
    $count=0;
    while ($r=mysql_fetch_row($checkrow)){
        foreach ($r as $v) {
            if ($user === $v) {
             $count=$count+1;   
            }
        }
    }
    if ($count==0) {   
     $query = " insert into customer_info values (null ,'$fname','$lname','$user','$pass','$email','$poffice','$code','$tel','$adress')"; 
      $result =  mysql_query($query , $conn) ; 
     header("Location: http://localhost/project/login.php"); 
    }else
    echo "<script>alert('User is already exsist')</script>";
 ?>