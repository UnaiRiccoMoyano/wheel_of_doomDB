<?php

use PHPUnit\Framework\TestCase;
use tributos\Personas;

class ComprobarSiNameEsString extends TestCase
{
    public function testNameEsString()
    {
        $persona = new Personas();
        $name = $persona->esUnString();
        $this->assertIsString($name);
    }
}