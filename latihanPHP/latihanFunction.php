<?php

$x = 5;
$z = 5;

function perkenalan(){
    echo "Hallo perkenalkan nama saya Tomi<br>";
    echo "Senang berkenalan dengan Anda<br>";
    echo "Sampai berjumpa lagi<br>";
    echo "<hr>";
}
//function dengan parameter
function perkenalanKedua($nama="Fulan", $salam="Assalamualaikum"){
    echo "$salam, perkenalkan nama saya $nama <br>";
    echo "Senang berkenalan dengan Anda<br>";
    echo "Sampai berjumpa lagi<br>";
    echo "<hr>";
}
//Function yang mengembalikan nilai
function hitungUmur($tahunLahir, $tahunSekarang){
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
}
function hitungLuasSegiTiga($alas, $tinggi){
    $luas = $alas * $tinggi / 2;
    return $luas;
}
function hitungKelilingSegiTiga($a, $b, $c){
    $kel = $a + $b + $c;
    return $kel;
}

$thnSekarang = date('Y');

echo "Umur saya adalah ".hitungUmur(2000, $thnSekarang)."<br>";
echo "Luas Segitiga dengan alas sebesar 3cm dan tinggi 4cm adalah :".hitungLuasSegiTiga(3, 4)."<br>";
echo "Keliling segitiga dengan sisi A=5, B=10, C,11 adalah ".hitungKelilingSegiTiga(5,10,11);

?>