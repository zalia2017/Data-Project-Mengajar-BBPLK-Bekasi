<?php
session_start();
//Menghapus semua nilai session
session_unset();
//Menghancurkan session
session_destroy();

//Kembali ke halaman login
header("location:../index.php");

?>