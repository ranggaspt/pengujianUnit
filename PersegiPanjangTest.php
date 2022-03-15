<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once 'PersegiPanjang.php';

// Class untuk run Testing.
class PersegiPanjangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengjujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungkeliling(){
        $persegipanjang = new PersegiPanjang(3,2);
         
        $result = $persegipanjang->hitungKeliling();
        $expected = 10;
        
        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $persegipanjang = new PersegiPanjang(5,4);
                
        $result = $persegipanjang->hitungLuas();
        $expected = 20;
   
        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong()
    {
        $persegipanjang = new PersegiPanjang("","");

        $result = $persegipanjang->hitungKeliling();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $persegipanjang = new PersegiPanjang("","");
                
        $result = $persegipanjang->hitungLuas();
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengjujian \n";
    }
}