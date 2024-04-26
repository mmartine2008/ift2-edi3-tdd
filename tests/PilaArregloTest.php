<?php
use PHPUnit\Framework\TestCase;

class PilaArregloTest extends TestCase {
    public function testVacia() {
        
        $p = new PilaArreglo();
        $this->assertTrue($p->PilaVacia());
    }

    public function testApilar() {
        $p = new PilaArreglo();
        
        $value = 5;

        $p->Apilar($value);

        $this->assertFalse($p->PilaVacia());
        $this->assertEquals($p->Tope(), $value);
        
    }
}