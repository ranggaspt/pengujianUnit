<?php

require_once "BangunDatar.php";

class Segitiga extends BangunDatar{
    private $alas;
    private $tinggi;
    private $a,$b,$c;

    public function __construct($a,$b,$c,$alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function hitungkeliling(){
        if ($this->a == '' && $this->b == '' && $this->c == '') {
            return "Tidak boleh kosong!";
        }else{
            return $this->a+$this->b+$this->c;
        }
    }

    function hitungLuas(){
        if($this->alas == '' && $this->tinggi == ''){
            return "Tidak boleh kosong!";
        }else{
            return 0.5*$this->alas*$this->tinggi;
        }
    }
}

?>