
<!DOCTYPE html>
<html>
        <head>
            <title>ESP8266 DEMO</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <style >
.li2{
    display: inline;
    padding: 10px;
    color: black;
    text-align: center; 
    overflow: hidden;  
}
.linedeco{
    float: left;
    padding: 10px;
    margin-left: 20px;
    color: black; 
    height: 10px;
    border-left: rgb(201, 201, 201) solid ;
}
.conten1{
    float: left;
    border: 1px rgb(37, 34, 34) solid;
    padding:none;
    
}
.conten2{
    display: inline-block;
    border: 1px rgb(9, 22, 121)solid;
    width: 375px ; 
    height: 400px; 
    margin: 5px ;
    padding: none;
    text-align: right;

    overflow: hidden;
    position: relative;
}
        </style>
        <body style=" overflow-y: scroll;">
       

<div style=" width: 100%; height: 100px; "> 

<a style=" padding: 5px ; align-items: center; align-content: center;">
          <i class="fa fa-bars" style =" font-size: 2em; "></i>
        </a>

        <input type="text" style="font-size: 2em;  width: 200px ;">

        <a style="font-size: 80px; color: rgb(79, 187, 250); margin-left: 10% ;">bán hàng</a>
</div>

<div style="width: 100%; height: 0px; border: 1px solid rgb(221, 220, 220) ;"></div>

<div style="text-align: center; 
overflow: hidden;
font-size: 20px; 
padding: 5px;
margin-left:5% ;
margin-right: 5%;

border: 1px rgb(61, 59, 59) solid;">

<ul class = "ul2" >
<li class = "li2" >
    <a href="http://localhost/long-89208/nhap.php" class="fa fa-home" style="color:rgb(79, 187, 250) "></a> 
</li>
<li class = "li2">
    liet kê
</li>
<li class = "li2">
<a href="http://localhost/long-89208/index2.php"  > tao moi</a>
  
</li>
<li class = "li2">
    chinh sua
</li>
<li class = "li2">
   tim kiem
</li>


</ul>
<div style="width: 100%; height: 0px; border: 1px solid; color:rgb(79, 187, 250) ; margin-top: 5px;"></div>

</div>
<div class="conten1" style="width: 9%; height: 1000px; "></div>
<div class="conten1" style="width: 80%; height: 1000px; padding: 5px; ">
<?php
require("ketnoi.php");

$query = "SELECT*from vandon";

$queryresive = mysqli_query($mysql,$query);

while($querexcutr = mysqli_fetch_array($queryresive))
{
   
  echo "<div class=\"conten2\">
  <img class=\"one\" style=\"float: left;\" src=\" ".$querexcutr['imagelink']." \" width=\"50%\" height=\"auto\">
  <h1>".$querexcutr['nguoinhan']."</h1>
  <h2>".$querexcutr['dienthoai']."<h1>
  <h3>".$querexcutr['diachi']."</h1>   
  <h3>".$querexcutr['ngaygiaohang']."</h2> 
  <br> *".$querexcutr['ghichu']."<br/>
</div> ";

}
?>
  
     
</div>
<div class="conten1" style="width: 9%; height: 1000px; ">

</div>

        </body>
<footer>

  <a>ma sinh viên :89208</a>
  <a href="long89208@st.vimaru.edu.vn">email: lương văn long </a></p>
 <a> lớp : n033</a>

</footer>       
</html>