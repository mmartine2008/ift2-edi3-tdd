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

    public function testDesapilar() {
        $p = new PilaArreglo();
        $value = 5;
        $p->Apilar($value);

        $p->Desapilar();
        $this->assertTrue($p->PilaVacia());
    }

    /**
     * @dataProvider pilaProviderRand
     */
    public function testApilar2($datos, $tamanio) {
        $p = new PilaArreglo();
        $cantidad = 0;

        foreach ($datos as $value) {
            $p->Apilar($value);
        }

        while (!$p->PilaVacia()) {
            $p->Desapilar();
            $cantidad ++;
        }

        $this->assertTrue($p->PilaVacia());
        $this->assertEquals($cantidad, $tamanio);
    }


    public function pilaProvider():array {

        return [
            [[3, 4, 1, 8], 4],
            [[], 0],
            [[7], 1]
        ];

    }


    public function pilaProviderRand():array {
        $salida = [];

        $cantidadPruebas = rand(1, 100);
        for ($i = 0; $i < $cantidadPruebas; $i++) {
            $tamanioPrueba = rand(0, 100);
            $arrayTest = [];
            for ($j = 0; $j < $tamanioPrueba; $j++) {
                $arrayTest[] = rand(1, 100);
            }
            
            $salida[] = [$arrayTest, $tamanioPrueba];
        }
        
        return $salida;
    }
}