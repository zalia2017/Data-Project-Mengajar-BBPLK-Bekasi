<?php
include_once 'myFunction.php';

if(isset($_GET['jari'])){
    $r = $_GET['jari'];
    $luas = hitungLuasLingkaran($r);
    $kel = hitungKelLingkaran($r);
}else{
    $luas = 0;
    $kel = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        Jari-jari Lingkaran :<input type="number" name="jari" require><br>
        <input type="submit" value="Hitung">
    </form>
    <hr>
    Luas Lingkaran : <?=$luas;?>
    Keliling Lingkaran : <?=$kel?>
</body>
</html>