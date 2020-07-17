<?php
class Mobil{
    private $warna;
    public $merk;

    public function setWarna($warnaBaru){
        $this->warna = $warnaBaru;
    }
    public function getWarna(){
        return $this->warna;
    }
}

$mobilAchmad = new Mobil();//Objek pertama
$mobilAchmad2 = new Mobil();//Objek kedua
$mobilAchmad3 = new Mobil();//Objek ketiga

$mobilAchmad->setWarna("Hitam");
$mobilAchmad2->setWarna("Gold");
$mobilAchmad3->setWarna("Kuning");

echo "Mobil achmad adalah berwarna ".$mobilAchmad->getWarna()."<br>";
// echo "Mobil achmad adalah berwarna ".$mobilAchmad->warna."<br>";

$mobilAchmad->setWarna("Merah");

echo "Warna Mobil Achmad yang terbaru adalah ".$mobilAchmad->getWarna()."<br>";

echo "Warna mobil Achmad yang kedua adalah: ".$mobilAchmad2->getWarna()."<br>";


?>