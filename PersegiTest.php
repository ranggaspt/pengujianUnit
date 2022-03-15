<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once 'Persegi.php';

// Class untuk run Testing.
class PersegiTest extends TestCase{

    static $persegi;
    public static function setUpBeforeClass(): void{
        echo "Eksekusi Sebelum Pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling(){
        $persegi = new Persegi(2);
         
        $result = $persegi->hitungKeliling();
        $expected = 8;
        
        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $persegi = new Persegi(2);
                
        $result = $persegi->hitungLuas();
        $expected = 4;
   
        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong(){
        $persegi = new Persegi("","");

        $result = $persegi->hitungKeliling();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $persegi = new Persegi("","");
                
        $result = $persegi->hitungLuas();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}