<?php

require_once "BangunDatar.php";

class Trapesium extends BangunDatar{
    private $alasa,$alasb;
    private $tinggi;
    private $sisi;

    public function __construct($s,$xa,$yb,$t){
        $this->alasa = $xa;
        $this->tinggi = $t;
        $this->alasb = $yb;
        $this->sisi = $s;
    }

    function hitungkeliling(){
        if ($this->sisi == '' ) {
            return "Tidak boleh kosong!";
        }else{
            return $this->sisi+$this->sisi+$this->sisi+$this->sisi;
        }
    }

    function hitungLuas(){
        if($this->alasa == '' && $this->alasb == '' && $this->tinggi == ''){
            return "Tidak boleh kosong!";
        }else{
            return 0.5*($this->alasa+$this->alasb)*$this->tinggi;
        }
    }
}
