<?php

class mobil {
    public $merk = "merk",
           $nama = "nama",
           $warna = "warna",
           $kecepatan = 0;
           
    public function inputDataMobil() {
        return "$this->merk, $this->nama";
    }

    public function getCetak() {
        return "$this->nama, $this->warna";
    }

    public function getKondisiMobil () {
        return "$this->merk, $nama->nama, $this->warna, $this->kecepatan";
    }
        
}

$mobil1 = new mobil ();
$mobil1->merk = "Toyota";
$mobil1->nama = "Fortuner";
$mobil1->warna = "Hitam";
$mobil1->kecepatan = "250";

$mobil2 = new mobil ();
$mobil2->merk = "Honda";
$mobil2->nama = "Brio";
$mobil2->warna = "Hijau";
$mobil2->kecepatan = "100";

echo "Merk Mobil: "