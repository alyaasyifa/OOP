<?php

include("sepatu.php");
$sepatu1=new sepatu(); // instansiasi
$sepatu1->merk="Nike";
$sepatu1->promosi();
echo "<br>";
$sepatu2=new sepatu(); // instansiasi
$sepatu2->merk="Vans";
$sepatu2->promosi();