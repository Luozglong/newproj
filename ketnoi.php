<?php
include "test2.html";
$serverName = "banhang3.database.windows.net"; // update me
$connectionOptions = array(
    "Database" => "data2", // update me
    "Uid" => "adminroot", // update me
    "PWD" => "Dttmcnd3@" // update me
);
//Establishes the connection
$mysql = sqlsrv_connect($serverName, $connectionOptions);
?>