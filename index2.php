<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}

</style>
<body>

<div style="border: 1px solid black ; width: 100% ; height: 200px; text-align: center; ">
<?php 
$user = 'root'; 

$password = ''; 
  
$database = 'hanghoa'; 
  
$servername='localhost:3306'; 

$sva = mysqli_connect($servername, $user, $password, $database);  

$query = "SELECT * FROM vandon"; 

$is_query_run = mysqli_query($sva ,$query);

while($querexcutr =$is_query_run ->fetch_assoc ()) 
    { 
        echo  "<h1>"
        .$querexcutr['nguoinhan']."
        ".$querexcutr['dienthoai']."
        ".$querexcutr['diachi']."
       ".$querexcutr['ngaygiaohang']."
        ".$querexcutr['ghichu']." "; 
    }
?> 
</div>

<form method="POST">
          
            ngay        <div><input type="text" name="ngay" value=""/> <br/></div>
            ten:        <input type="text" name="nguoinhan" value=""/><br/>
            dia chi    <input type="text" name="diachi" value=""/><br/>
            dien thoai        <input type="text" name="dienthoai" size="200px" value=""/><br/>
            anh    <input type="text" name="imagelink" value=""/><br/>
            ghi chu      
            <textarea id="subject" name="ghichu" placeholder="Write something.."  ></textarea>

            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
            <input type="submit" name="form_click2" value="xoa Dữ Liệu"/>

<?php

if(isset($_POST['form_click'])){

$query = " INSERT INTO vandon(nguoinhan, dienthoai, diachi, ngaygiaohang, ghichu, imagelink) VALUES (
 
  ' " .$_POST['nguoinhan']. " ',
  ' " .$_POST['dienthoai']. " ',
  ' " .$_POST['diachi']. " ',
  ' " .$_POST['ngay']."  ',
  ' " .$_POST['ghichu']. "  ',   
  ' " .$_POST['imagelink']. "  ' )
  ";

$is_query_run = mysqli_query($sva ,$query);

echo " lenh thanh cong ";
}
if(isset($_POST['form_click2'])){

	$query = " delete from vandon where nguoinhan =' ".$_POST['nguoinhan']."' ";
	$is_query_run = mysqli_query($sva ,$query);
}

?>

</form>

</body>

</html>
