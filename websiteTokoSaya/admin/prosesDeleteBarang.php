<?php
require_once "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM tb_barang WHERE id_barang='$id'";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Data Berhasil DiHapus')</script>";
    echo "<script>window.location.assign('index.php?p=FormInputBarang.php')</script>";
}else{
    echo "<script>alert('Data Gagal DiHapus $conn->error')</script>";
    echo "<script>window.location.assign('index.php?p=FormInputBarang.php')</script>";
}
?>