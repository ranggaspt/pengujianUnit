<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Segitiga.php";

// Class untuk run Testing.
class SegitigaTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    public function testHitungKeliling(){       
        $segitiga = new Segitiga(2,4,10,2,6);
        
        $result = $segitiga->hitungKeliling();
        $expected = 16;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungKelilingKosong(){
        $segitiga = new Segitiga("","","","","");

        $result = $segitiga->hitungKeliling();
        $expected = "Tidak boleh kosong!";
        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas(){        
        $segitiga = new Segitiga(2,4,10,2,6);

        $result = $segitiga->hitungLuas();
        $expected = 6;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong(){
        $segitiga = new Segitiga("","","","","");
        
        $result = $segitiga->hitungLuas();
        $expected = "Tidak boleh kosong!";
        
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}