<?php
require_once "koneksi.php";
$id = $_POST['idBarang'];
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$harga = $_POST['hargaBarang'];

$sql = "UPDATE tb_barang SET nama_barang='$nama', satuan_barang='$satuan', harga_barang='$harga' WHERE id_barang='$id'";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Diupdate')</script>";
    echo "<script>window.location.assign('index.php?p=FormInputBarang.php')</script>";
}else{
    echo "<script>alert('Data Gagal Diupdate $conn->error')</script>";
    echo "<script>window.location.assign('index.php?p=FormInputBarang.php')</script>";
}

?>