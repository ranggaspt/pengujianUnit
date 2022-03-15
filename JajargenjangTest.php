<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Jajargenjang.php";

// Class untuk run Testing.
class JajargenjangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling(){
        $Jajargenjang = new Jajargenjang(3,6);
        
        $result = $Jajargenjang->hitungKeliling();
        $expected = 18;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $Jajargenjang = new Jajargenjang(3,2);
        
        $result = $Jajargenjang->hitungLuas();
        $expected = 6;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong(){
        $Jajargenjang = new Jajargenjang("","");

        $result = $Jajargenjang->hitungKeliling();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $Jajargenjang = new Jajargenjang("","");

        $result = $Jajargenjang->hitungLuas();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}