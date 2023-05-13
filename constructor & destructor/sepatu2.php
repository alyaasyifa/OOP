<?php
class sepatu{
	private $merk;
	function __construct($merk){ //pembuatan constructor
		$this->merk=$merk;
		echo "Contructor: $this->merk dibuat<br>";
	}
	function promosi(){
		echo "Halo, sepatu $this->merk best seller loh kak!"."<br>";
	}
	function __destruct(){ //pembuatan destructor
		echo "Destructor: $this->merk dijual <br>";
	}
}
