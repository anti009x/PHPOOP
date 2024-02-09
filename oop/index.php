<?php
//toko komputer
class toko {

    public $prosesor,
             $ram,
             $vga,
             $motherboard,
             $cpucooler,
             $casing,
             $monitor,
             $alattempur,
             $pembeli;

    public function setbeli( $nama_pembeli){

      $this->pembeli = $nama_pembeli;
         
    }

}

$produk1 = new toko();
$produk1 -> prosesor = "i9 12000k"; 
$produk1 -> ram = "8gb"; 
$produk1 -> vga = "RTX 2060"; 
$produk1 -> motherboard = "LGA 1120G"; 
$produk1 -> cpucooler = "JONSBO CR"; 
$produk1 -> casing = "DZUMBA"; 
$produk1 -> monitor ="ASUS 240HZ";
$produk1 -> alattempur  = array( "Logitech Mouse","Keyboard Fantech","Headhset Razer"); 

var_dump($produk1);

echo "<br>";
echo "<br>";
echo "<br>";

$produk2 = new toko();
$produk2 -> setbeli("RIZKY SULAEMAN");
$produk2 -> prosesor = "i9 12000k"; 
$produk2 -> ram = "8gb"; 
$produk2 -> vga = "RTX 2060"; 
$produk2 -> motherboard = "LGA 1120G"; 
$produk2 -> cpucooler = "JONSBO CR"; 
$produk2 -> casing = "DZUMBA"; 
$produk2 -> monitor ="ASUS 240HZ";
$produk2 -> alattempur  = array( "Logitech Mouse","Keyboard Fantech","Headhset Razer"); 

// var_dump($produk2->prosesor);

echo "Toko Komputer : PEMBELI {$produk2->pembeli} ,  PROSESOR {$produk2->prosesor} , RAM {$produk2->ram} , VGA {$produk2->vga} , MOTHERBOARD {$produk2->motherboard} , 
CPU COOLER {$produk2->cpucooler} , CASING {$produk2->casing} , MONITOR {$produk2->monitor} , ALAT TEMPUR " . json_encode($produk2->alattempur);


?>


