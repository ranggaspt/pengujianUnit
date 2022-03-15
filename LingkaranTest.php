<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Lingkaran.php";

// Class untuk run Testing.
class LingkaranTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling(){
        $lingkaran = new Lingkaran(2);

        $result = $lingkaran->hitungKeliling();
        $expected = 12.56;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){        
        $lingkaran = new Lingkaran(3);
        
        $result = $lingkaran->hitungLuas();
        $expected = 28.26;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong(){        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungKeliling();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungLuas();
        $expected = "Tidak boleh kosong!";
        
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}