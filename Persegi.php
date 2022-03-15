<?php

require_once "BangunDatar.php";

class Persegi extends BangunDatar{
    private $sisi;

    public function __construct($s){
        $this->sisi = $s;
    }

    public function hitungKeliling(){
        if ($this->sisi == '') {
            return "Tidak boleh kosong!";
        }else{
            return 4*$this->sisi;
        }
    }

    function hitungLuas(){
        if($this->sisi == ''){
            return "Tidak boleh kosong!";
        }else{
            return $this->sisi * $this->sisi;
        }
    }
}

?>