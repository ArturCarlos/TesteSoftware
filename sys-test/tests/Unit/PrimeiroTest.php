<?php

namespace Tests\Unit;

use App\Caixa;
use PHPUnit\Framework\TestCase;

class PrimeiroTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testCaixaContemItem()
    {
        $caixa = new Caixa(['carro', 'mochila', 'garfo']);
        $this->assertTrue($caixa->contem('mochila'));
        $this->assertFalse($caixa->contem('cubo magico'));

    }

}
