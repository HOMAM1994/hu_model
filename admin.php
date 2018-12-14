<?session_start();?>
<!doctype html>
<html>
<head>
<title>Smart phones &amp; Tablets</title>
<meta charset="utf-8">
<style type="text/css">
body{
margin:0px 200px;
padding:0;
background-color:#ADADAD;
}
.header2 ul{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#333;
}
.header2 li{
float:left;
}
.header2 a{
display:block;
text-decoration:none;
color:white;
padding:14px 16px;
}
.header2 a:hover{
background-color:#7A201E;
border-radius:10px;
}
.header3 ul{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#555;
}
.header3 li{
float:left;
}
.header3 a{
display:block;
text-decoration:none;
color:white;
padding:14px 16px;
}
.header3 a:hover{
background-color:#7A201E;
border-radius:10px;
}

.content{
padding:50px;
background-color:white;
}
.search{
font-family:Gill Sans, sans-serif;
0color:white;
}
header .search input{
border-radius:7px; 

}
.header1{
background-color:#1a1a1a;
color:white;
}
.table img{
    border-style: solid;
    border-color: gray;
    border-width: 2px;
	
}
footer{
background-color: #1a1a1a;
width:100%;
height:150px ;

}
.contactus{
   margin-left: 70px;
   width: 300px;
   position:relative; 
   top:25px;
   margin-left: auto;
   margin-right: auto;
}
.red{
color: red;
font-size: 18px;
}

</style>   
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
   function updateBtn(arg){
      var id = ""; 
      var price = "";
      var case1 = "" ;
    if (arg == 0){
       id = document.getElementById("phone_id").value;
       price = document.getElementById("phone_price").value;
       case1 = 0 ; 
    }else if(arg == 1){
       id = document.getElementById("pc_id").value;
       price = document.getElementById("pc_price").value;
       case1 = 1 ;
    }else if(arg == 2){
       id = document.getElementById("printer_id").value;
       price = document.getElementById("printer_price").value;
       case1 = 2 ;
    }else if(arg == 3){
       id = document.getElementById("acc_id").value;
       price = document.getElementById("acc_price").value;
       case1 = 3 ;
    }
    if(id != "" && price != ""){
 

      $.post("http://localhost/project/updateItems.php",{"id":id , "case":""+case1 ,"price":price },
       function(result){
         if(result == 1){
           alert("data updated successfully"); 
           resetFields() ; 
         }else if(result == 0){
           alert("data not updated"); 
         }else if(result == -1){
           alert("id is incorrect"); 
         }
      }); 
 

    }else{
        alert("there are an empty fields") ; 
      }

  }
  
  function deleteBtn(arg){
   var id = "" ; 
   var case2 = "" ; 
   if(arg == 0){
       id = document.getElementById("delete_phone").value;
      case2 = "0" ; 
    }else if(arg == 1){
       id = document.getElementById("delete_pc").value;
      case2 = "1" ;
    }else if(arg == 2){
       id = document.getElementById("delete_printer").value;
      case2 = "2" ;
    }else if(arg == 3){
       id = document.getElementById("delete_acc").value;
      case2 = "3" ;
    }
      if(id != ""){
      $.post("http://localhost/project/updateItems.php",{"id":id , "case":""+case2 ,"price":"OUT OF STOCK" },
       function(result){
         if(result == 1){
           alert("data deleted successfully");
           resetFields() ;  
        }else if(result == 0){
           alert("data not deleted"); 
         }else if(result == -1){
           alert("id is incorrect"); 
         }
      });
      }else{
        alert("id field is empty") ; 
      }
    }
  function resetFields() {
      var fields =  ["phone_id","phone_price","pc_id","pc_price","printer_id",
           "printer_price","acc_id","acc_price","delete_phone","delete_pc","delete_printer","delete_acc"] ;  
       for (var i = 0 ;   fields.length-1 ; i++) {
      document.getElementById(""+fields[i]).value="";
       }
  }
</script>



</head>
<body>
<header>
<div class="header1">
<h1 style="margin:0;padding:0">
<table>
<td><img src="img/logo.png" height="75px" width="100px" alt="Faster Link"></td>
<td>FASTER LINK</td>
</h1>
</table>
</div>
<div class="header2">
  <ul>
    <li style="background-color: #7A201E; border-radius:10px;
"><a href="admin.php">Update & Delete</a> </li>
    <li><a href="adminmaintenance.php">Maintenance</a></li>
    <li><a href="orders.php">Orders</a></li>
    <li><a href="logout.php">Logout</a></li>

  </ul>

</div>
</header>
<div class="content">
<div>
<h2>Smartphones & Tablets</h2>
<h4 class="red">update price :</h4>
Device ID :- <input type="text"  id="phone_id">
Price :- <input type="text"  id="phone_price">
<button type="button" onclick="updateBtn(0)">update</button><br>
<h4 class="red">delete item :</h4>
Device ID :- <input type="text" id="delete_phone">
<button type="button" onclick="deleteBtn(0)">delete</button>
</div>


<div>
<br><hr><h2>Computers & Laptops</h2>
<h4 class="red">update price :</h4>
Device ID :- <input type="text" id="pc_id">
Price :- <input type="text" id="pc_price">
<button type="button" onclick="updateBtn(1)">update</button><br>
<h4 class="red">delete item :</h4>
Device ID :- <input type="text" id="delete_pc">
<button type="button" onclick="deleteBtn(1)">delete</button>
</div>


<div>
<br><hr><h2>Printers</h2>
<h4 class="red">update price :</h4>
Device ID :- <input type="text" id="printer_id">
Price :- <input type="text" id="printer_price">
<button type="button" onclick="updateBtn(2)">update</button><br>
<h4 class="red">delete item :</h4>
Device ID :- <input type="text" id="delete_printer">
<button type="button" onclick="deleteBtn(2)">delete</button>
</div>

<div>
<br><hr><h2>Accessories</h2>
<h4 class="red">update price :</h4>
Device ID :- <input type="text" id="acc_id">
Price :- <input type="text" id="acc_price">
<button type="button" onclick="updateBtn(3)">update</button><br>
<h4 class="red">delete item :</h4>
Device ID :- <input type="text" id="delete_acc">
<button type="button" onclick="deleteBtn(3)">delete</button>
</div>


</div>
</body>
</html>