<?php

use PHPUnit\Framework\TestCase;
use tributos\Personas;

class PersonasVivas extends TestCase
{
    public function testEstaVivo()
    {
        $vivos = 0;
        $persona = new Personas();
        $valorVivo = $persona->hayVivos();
        $this->assertEquals($vivos, $valorVivo);
    }
    
}
