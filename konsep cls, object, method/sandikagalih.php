<?php

class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0; 

public function getLabel() {
    return "$this->penulis, $this->penerbit";
}

}

$produk1 = new produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masahi kishimoto";
$produk1->penerbit = "Shonen jump";
$produk1->harga = 30000;

echo "komik : " . $produk1->getLabel();