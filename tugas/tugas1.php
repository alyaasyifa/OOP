<?php

class Sekolah{

    public $nama;
    protected $alamat = "Bogor";
    private $jumlahsiswa;
    private $jumlahguru;
    private $jumlahkelas;


    public function totalsiswa($siswabaru){
        $this -> jumlahsiswa = $siswabaru;
        return $siswabaru;
    }
    public function totalguru($gurubaru){
        $this -> jumlahguru = $gurubaru;
        return $gurubaru;
    }
    public function totalkelas($kelasbaru){
        $this -> jumlahkelas = $kelasbaru;
        return $kelasbaru;
    }
  


}


class alamatsekolah extends Sekolah{

   public function setAlamat($alamat){   
    $this->alamat = $alamat;
   }

   public function tampilAlamat(){
    $cuy = "Alamat sekolah ini ada di $this->alamat";
    return $cuy;

   }
}


$nama1 = new Sekolah;
$nama1 -> nama = "SMK  Wikrama Bogor";
$alamat3 = new alamatsekolah();
$alamat3->setAlamat("Jl. Raya Wangun");

echo "Nama Sekolah Ini Adalah " .  $nama1 -> nama;
echo "<br>";
echo $alamat3->tampilAlamat();
echo "<br>";
echo "Jumlah Semua Siswa Adalah " . $nama1 -> totalsiswa("1596"); 
echo "<br>";
echo "Jumlah Semua Guru Adalah " . $nama1 -> totalguru("51"); 
echo "<br>";
echo "Jumlah Semua Kelas Adalah " . $nama1 -> totalkelas("30"); 



?>