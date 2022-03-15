<?php

require_once "BangunDatar.php";

class PersegiPanjang extends BangunDatar{
    private $panjang;
    private $lebar;

    public function __construct($p,$l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function hitungKeliling(){
        if ($this->panjang == '' && $this->lebar == '') {
            return "Tidak boleh kosong!";
        }else{
            return 2*($this->panjang + $this->lebar);
        }
    }

    function hitungLuas(){
        if($this->panjang == '' && $this->lebar == ''){
            return "Tidak boleh kosong!";
        }else{
            return $this->panjang * $this->lebar;
        }
    }
}

?>