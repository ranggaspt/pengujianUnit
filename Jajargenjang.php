<?php

require_once "BangunDatar.php";

class Jajargenjang extends BangunDatar
{
    private $alas;
    private $tinggi;

    public function __construct($a, $t)
    {
        $this->alas = $a;
        $this->tinggi = $t;
    }

    function hitungkeliling()
    {
        if ($this->alas == '' && $this->tinggi == '') {
            return "Tidak boleh kosong!";
        } else {
            return (2 * $this->alas) + (2 * $this->tinggi);
        }
    }

    function hitungLuas(){
        if($this->alas == '' && $this->tinggi == ''){
            return "Tidak boleh kosong!";
        }else{
            return $this->alas*$this->tinggi;
        }
    }
}
