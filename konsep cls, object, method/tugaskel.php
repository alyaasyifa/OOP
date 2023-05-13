<?php

class sepatu {
    public $merk;
    public $warna;
    public $ukuran;
           
    public function merk($merk){
        $this->merk=$merk;
    }

    public function warna($warna){
        $this->warna=$warna;
    }

    public function ukuran($ukuran){
        $this->ukuran=$ukuran;
    }

    public function getCetak(){
        echo "Merk Sepatu: " . $this->merk;
        echo "<br>";
        echo "Warna Sepatu: " . $this->warna;
        echo "<br>";
        echo "Ukuran Sepatu: " . $this->ukuran;
        echo "<br> ======================== <br>";
    }
}

$sepatu1 = new sepatu();
$sepatu1->merk("Nike");
$sepatu1->warna("Merah");
$sepatu1->ukuran("39");
$sepatu1->getCetak();

$sepatu2 = new sepatu();
$sepatu2->merk("Vans");
$sepatu2->warna("Hitam");
$sepatu2->ukuran("37");
$sepatu2->getCetak();