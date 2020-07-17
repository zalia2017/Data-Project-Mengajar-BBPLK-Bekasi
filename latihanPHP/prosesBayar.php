<?php
$gTotal = $_POST['gTotal'];
$uangBayar = $_POST['uangBayar'];

if($gTotal>$uangBayar){
    echo "<script>alert('Maaf uang bayar anda kurang')</script>";
    echo "<script>window.history.back()</script>";
}elseif($gTotal<$uangBayar){
    $uangKembali = number_format($uangBayar - $gTotal,0,",",".");
    echo "<script>alert('Terima kasih, Uang kembali anda sebesar Rp.$uangKembali');</script>";
    echo "<script>window.location.assign('FormPenjualan.php')</script>";
}else{
    echo "<script>alert('Terima kasih');</script>";
    echo "<script>window.location.assign('FormPenjualan.php')</script>";
}

?>