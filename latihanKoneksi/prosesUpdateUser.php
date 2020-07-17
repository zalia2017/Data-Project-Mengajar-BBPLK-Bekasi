<?php
require_once "koneksi.php";
$id = $_POST['idUser'];
$nama = $_POST['namaUser'];
$email = $_POST['emailUser'];

$sql = "UPDATE tb_users SET nama_user='$nama', email_user='$email' WHERE id_user='$id'";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Diupdate')</script>";
    echo "<script>window.location.assign('FormInputUser.php')</script>";
}else{
    echo "<script>alert('Data Gagal Diupdate $conn->error')</script>";
    echo "<script>window.location.assign('FormInputUser.php')</script>";
}

?>