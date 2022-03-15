<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Trapesium.php";

// Class untuk run Testing.
class TrapesiumTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling()
    {
        $trapesium = new Trapesium(5,2,3,4);
        
        $result = $trapesium->hitungKeliling();
        $expected = 20;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $trapesium = new Trapesium(5,2,3,4);

        $result = $trapesium->hitungLuas();
        $expected = 10;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungkelilingKosong(){
        $trapesium = new Trapesium("","","","");
        
        $result = $trapesium->hitungKeliling();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $trapesium = new Trapesium("","","","");

        $result = $trapesium->hitungLuas();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}