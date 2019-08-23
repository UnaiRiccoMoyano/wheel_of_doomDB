<?php

use PHPUnit\Framework\TestCase;
use tributos\Personas;

class PersonasMuertas extends TestCase
{
    public function testEstaMuerto()
    {
        $muertos = 1;
        $persona = new Personas();
        $valorMuerto = $persona->hayMuertos();
        $this->assertEquals($muertos, $valorMuerto);
    }
}
