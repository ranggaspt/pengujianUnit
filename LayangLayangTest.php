<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "LayangLayang.php";

// Class untuk run Testing.
class LayangLayangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling(){
        $layanglayang = new LayangLayang(3,2);
        
        $result = $layanglayang->hitungKeliling();
        $expected = 10;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $layanglayang = new LayangLayang(4,4);
        
        $result = $layanglayang->hitungLuas();
        $expected = 8;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong(){
        $layanglayang = new LayangLayang("","");
        
        $result = $layanglayang->hitungKeliling();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong()
    {
        $layanglayang = new LayangLayang("","");
        
        $result = $layanglayang->hitungLuas();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}