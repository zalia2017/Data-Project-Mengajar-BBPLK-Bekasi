<?php
//Halaman 'admin/index.php'
require_once "koneksi.php";
session_start();
//Mengecheck apakah user masuk dengan status login
if($_SESSION['statusLogin']!=1){
    //jika tidak melalui login maka diarahkan kembali ke halaman login
    header("location:../index.php");
}
if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = "Beranda.php";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>Aplikasi Toko Saya</title>
</head>

<body style="background-color: #f1f1f1;">
    <div class="container shadow">
        <div class="row">
            <div class="col-12 ml-auto bg-light" style="height: 80px;text-align: right;">
                <?php include_once "part/header.php"; ?>
            </div>
            <?php include_once 'part/navigation.php'; ?>
            <div class="col-12 col-md-8 col-lg-10 bg-light p-md-3 pt-1" style="min-height:650px">
                <?php include_once($page); ?>
            </div>
            <div class="col-12 col-md-4 col-lg-2 shadow pt-3">
                <?php include_once "part/rightBanner.php";?>
            </div>
            <div class="col-12 bg-info text-light">Footer</div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/myScript.js"></script>
</body>

</html>