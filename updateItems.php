<?php 

$conn = mysql_connect("localhost" , "root" , "12345678") ; 
mysql_select_db("info" , $conn) ;
 $case = $_POST['case'] ;  
 $id = $_POST['id'] ;  
 $newPrice = $_POST['price'] ; 
 $query = "update " ; 
   if($case == 0){
  $isFoundQuery = "select id from mobile_info where id=".$id ; 
  $query= $query."mobile_info  set price = '".$newPrice."' where id = ".$id  ;
   }else if($case == 1){
   	$isFoundQuery = "select id from pc_info where id=".$id ; 
 $query=   $query."pc_info  set price = '".$newPrice."' where id = ".$id  ;
   }else if($case == 2){
   	$isFoundQuery = "select id from printer_info where id=".$id ; 
 $query=  $query."printer_info  set price = '".$newPrice."' where id = ".$id  ;
   }else if($case == 3){
   	$isFoundQuery = "select id from accessories_info where id=".$id ; 
    $query=  $query."accessories_info  set price = '".$newPrice."' where id = ".$id  ;
   }else{
     die(mysql_error()); 
   }
  $result = mysql_query($isFoundQuery , $conn) ;   
   if(mysql_num_rows($result)>0){
    if(!mysql_query($query , $conn)){
          echo "0";
       }else{
          echo "1";
        } 
    }else{
    	echo "-1";
    }
?>