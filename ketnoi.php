<?php
$username = 'root';
$password ="";
$servername = 'localhost:3306';
$dbname = "hanghoa";
$mysql = new mysqli($servername, $username, $password, $dbname);
if(!$mysql){
    echo"Không thể kết nối đến cơ sở dữ liệu";
}
?>