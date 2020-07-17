<?php
class KendaraanBermotor{
    protected $jumlahBan;
    protected $jenisMesin;
    protected $warnaKendaraan;
    protected $bahanBakar;

    function __construct($jmlBan, $jnsMesin, $wrnKendaraan, $bhnBakar){
        $this->jumlahBan = $jmlBan;
        $this->jenisMesin = $jnsMesin;
        $this->warnaKendaraan = $wrnKendaraan;
        $this->bahanBakar = $bhnBakar;
    }
    function setWarna($warnaBaru){
        $this->warnaKendaraan = $warnaBaru;
    }
    function getWarna(){
        return $this->warnaKendaraan;
    }
    function getBan(){
        return $this->jumlahBan;
    }
    function getJenisMesin(){
        return $this->jenisMesin;
    }
    function getBahanBakar(){
        return $this->bahanBakar;
    }
}

class Motor extends KendaraanBermotor{
    protected $jumlahBan = 2;
    function __construct($jnsMesin, $wrnKendaraan){
        $this->jenisMesin = $jnsMesin;
        $this->warnaKendaraan = $wrnKendaraan;
    }
}
class Mobil extends KendaraanBermotor{
    protected $jumlahBan = 4;
    function __construct($jnsMesin, $wrnKendaraan){
        $this->jenisMesin = $jnsMesin;
        $this->warnaKendaraan = $wrnKendaraan;
    }
}
$kendaraanZae = new KendaraanBermotor(3, "2 Tak", "Orange", "Solar");
$kendaraanRyan = new Mobil("4 Tak", "Pink", "Pertamax");
$kendaraanFaris = new Motor("4 Tak", "Biru", "Premium" );

echo "Zaenudin memiliki kendaraan terbaru dengan teknologi terkini<br>
        dengan jumlah ban sebanyak ".$kendaraanZae->getBan()." dengan mesin ". 
        $kendaraanZae->getJenisMesin()." Berwarna ".$kendaraanZae->getWarna()." dengan bahan bakar ".$kendaraanZae->getBahanBakar()."<br>";
echo "Ryan Aldi memiliki kendaraan terbaru dengan teknologi terkini<br>
        dengan jumlah ban sebanyak ".$kendaraanRyan->getBan()." dengan mesin ". 
        $kendaraanRyan->getJenisMesin()." Berwarna ".$kendaraanRyan->getWarna()."<br>";
echo "Faris memiliki kendaraan terbaru dengan teknologi terkini<br>
        dengan jumlah ban sebanyak ".$kendaraanFaris->getBan()." dengan mesin ". 
        $kendaraanFaris->getJenisMesin()." Berwarna ".$kendaraanFaris->getWarna()."<br>";
?>