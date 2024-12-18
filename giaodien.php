<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web bán hàng</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<style>
    .hh { 
       background-color: blue;
       color: white ;
       border: 1px solid black;
width: 200px;
height: 100px;
display: inline-block;
    }


    .container{
    border: 1px solid black;
padding: 20px ;

}

    </style>


<body >

<div class="container">


<h1 class="hh" name = "head1" style = "font-size:50px;" value = " heaa1">helloo1</h1>
<h1 class="hh" name = "head1" style = "font-size:50px;" value = " heaa2">helloo2</h1>
<h2 id = "p1" >hwee</h2>
<h1 class="hh1" name = "head2">hwee</h1>


<input type ="text" id = "p2" ></input>

<?php
echo "<input type =\"BUTTON\" value = \"click\" style = \"font-size:20PX\" onclick=\"oncc(2)\"></input>";

?>

</div>


<script type="text/javascript" >

let ell = document.getElementsByName("head1");
var tec = document.getElementById("p2");
let ell2 = 1;


function oncc(a){
    if(tec.value != ""){
        document.getElementById("p1").innerHTML = ell[0].innerHTML;
        document.getElementsByName("head2")[0].innerHTML = "ell";
    }else{
        window.alert("Please enter");
    }
}


</script>




</body>





</html>