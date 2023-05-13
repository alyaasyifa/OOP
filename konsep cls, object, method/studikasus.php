<?php

class mobil {
    public $merk;
    public $nama;
    public $warna;
    public $kecepatan;
           
    public function merk($merk){
        $this->merk=$merk;
    }

    public function nama($nama){
        $this->nama=$nama;
    }

    public function warna($warna){
        $this->warna=$warna;
    }

    public function kecepatan($kecepatan){
        $this->kecepatan=$kecepatan;
    }

    public function getCetak(){
        echo "Merk Mobil: " . $this->merk;
        echo "<br>";
        echo "Nama Mobil: " . $this->nama;
        echo "<br>";
        echo "Warna Mobil: " . $this->warna;
        echo "<br>";
        echo "Kecepatan Mobil: " . $this->kecepatan;
        echo "<br> ======================== <br>";
    }
}

echo "Kondisi Mobil Maju";
echo "<br>";
$mobil1 = new mobil();
$mobil1->merk("Toyota");
$mobil1->nama("Fortuner");
$mobil1->warna("Hitam");
$mobil1->kecepatan("250");
$mobil1->getCetak();

echo "Kondisi Mobil Mundur";
echo "<br>";
$mobil2 = new mobil();
$mobil2->merk("Honda");
$mobil2->nama("Brio");
$mobil2->warna("Hijau");
$mobil2->kecepatan("100");
$mobil2->getCetak();