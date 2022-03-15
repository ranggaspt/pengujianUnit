<?php

require_once "BangunDatar.php";

class Lingkaran extends BangunDatar{
    private $radius;

    public function __construct($r){
        $this->radius = $r;
    }

    function hitungkeliling(){
        if ($this->radius == '') {
            return "Tidak boleh kosong!";
        }else{
            return 2*3.14*$this->radius;
        }
    }

    function hitungLuas(){
        if($this->radius == '' ){
            return "Tidak boleh kosong!";
        }else{
            return 3.14*$this->radius*$this->radius;
        }
    }
}

?>