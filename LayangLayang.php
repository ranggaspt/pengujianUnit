<?php

require_once "BangunDatar.php";

class LayangLayang extends BangunDatar{
    private $a;
    private $b;

    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }

    function hitungkeliling(){
        if ($this->a == '' && $this->b == '' ) {
            return "Tidak boleh kosong!";
        }else{
            return 2*($this->a+$this->b);
        }
    }

    function hitungLuas(){
        if($this->a == '' && $this->b == ''){
            return "Tidak boleh kosong!";
        }else{
            return 0.5*$this->a*$this->b;
        }
    }
}

?>