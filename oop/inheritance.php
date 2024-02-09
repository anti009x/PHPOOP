<?php
//toko komputer
class tokokomputer {

    public    $pembeli, 
              $prosesor,
             $ram,
             $vga,
             $motherboard,
             $cpucooler,
             $casing,
             $monitor,
             $alattempur,
             $harga;
       


    public function __construct($Pembeli,$Prosesor,$Ram,$Vga,$Motherboard,$Cpucooler,$Casing,$Monitor,$Alattempur,$Harga){
        $this->pembeli = $Pembeli;
        $this->prosesor = $Prosesor;
        $this->ram = $Ram;
        $this->vga = $Vga;
        $this->motherboard= $Motherboard;
        $this->cpucooler = $Cpucooler;
        $this->casing = $Casing;
        $this->monitor= $Monitor;
        $this->alattempur= array ($Alattempur);
        $this->harga = $Harga;
    }

        public function get(){

          echo "Toko Komputer : PEMBELI {$this->pembeli} ,  PROSESOR {$this->prosesor} , RAM {$this->ram} , VGA {$this->vga} , MOTHERBOARD {$this->motherboard} ,  CPU COOLER {$this->cpucooler} , 
          CASING {$this->casing} , MONITOR {$this->monitor} , ALAT TEMPUR " . json_encode($this->alattempur) . " Harga {$this->harga}";
                             

        }
}

class laptop extends tokokomputer{

    public function __construct($Pembeli,$Prosesor,$Ram,$Vga,$Harga)
    {
        $this->pembeli = $Pembeli;
        $this->prosesor = $Prosesor;
        $this->ram = $Ram;
        $this->vga = $Vga;
        $this->harga = $Harga;
    }

    public function get(){
        echo "Toko Komputer : PEMBELI {$this->pembeli} ,  PROSESOR {$this->prosesor} , RAM {$this->ram} , VGA {$this->vga} , HARGA {$this->harga}";
    }

}




$produk1= new tokokomputer("Rizky Sulaeman","sdf","sdfdsddf","sdfsd","dfsg","sdfdsf","dsfsdf","sdfsdf","1 2 3",1233300);

      
echo $produk1->get();

echo "<br>";
echo "<br>";
echo "<br>";

$produk2 = new laptop("Rizky Sulaeman","i3","4gb","RTX2060",400000);
$produk3 = new laptop("Rizky Sulaeman","i3","4gb","RTX2060",400000);
$produk4 = new laptop("Rizky Sulaeman","i3","4gb","RTX2060",400000);
$produk5 = new laptop("Rizky Sulaeman","i3","4gb","RTX2060",400000);

$produk_array = array ($produk2,$produk3,$produk4,$produk5);

foreach ($produk_array as $produk){
    echo $produk->get()."<br>";
}



    // public function setbeli( $nama_pembeli){

    //   $this->pembeli = $nama_pembeli;
         
    // }










