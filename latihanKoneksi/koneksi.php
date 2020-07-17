<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "db_toko_zulka";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error){
    die("Koneksi Gagal");
}

?>