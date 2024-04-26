<?php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testSum00() {
        $calculator = new Calculator();
        $result = $calculator->sum(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSum01() {
        $calculator = new Calculator();

        $a = 2;
        $b = 3;

        $result = $calculator->sum($a, $b);
        $this->assertEquals(($a + $b), $result);
    }

    /**
     * @dataProvider sumaProvider
     */
    public function testSuma(int $a, int $b, int $expected): void
    {
        $calculator = new Calculator();
        $result = $calculator->sum($a, $b);
        $this->assertSame($result, $expected);

    }   

    public function sumaProvider():array {
        return [
            [0, 0, 0],
            [10, 20, 30],
            [3, 2, 5]
        ];
    }

    /**
     * @dataProvider sumaProviderRandom
     */
    public function testSumaRandom(int $a, int $b, int $expected): void
    {
        $calculator = new Calculator();
        $result = $calculator->sum($a, $b);
        $this->assertSame($result, $expected);

    }   

    public function sumaProviderRandom():array {

        $salida = [];

        for ($i = 0; $i < 200; $i++) {

            $a = rand(-100, 100);
            $b = rand(-100, 100);
            $salida[] = [$a, $b, $a + $b];
        }

        return $salida;
    }
}