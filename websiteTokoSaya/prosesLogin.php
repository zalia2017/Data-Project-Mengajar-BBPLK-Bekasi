<?php
require_once "admin/koneksi.php";
$nama = $_POST['namaUser'];
$password = md5($_POST['passwordUser']);

//Mengambil data berdasarkan nama & password
$sql = "SELECT*FROM tb_users WHERE nama_user='$nama' and password_user='$password'";
$result = $conn->query($sql);

//Jika data tersedia
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        //Menyimpan ke dalam session
        session_start();
        $_SESSION['statusLogin'] = 1;
        $_SESSION['idUser'] = $row['id_user'];
        $_SESSION['namaUser'] = $row['nama_user'];
    }
    header("location:admin");
}else{
    //Jika data tidak tersedia
    echo "<script>alert('Usernama atau Password Salah, ulangi kembali')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}

?>