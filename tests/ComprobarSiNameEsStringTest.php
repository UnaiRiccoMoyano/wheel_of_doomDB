<?php

use PHPUnit\Framework\TestCase;
use tributos\Personas;

class ComprobarSiNameEsStringTest extends TestCase
{
    public function nameEsStringTest()
    {
        $texto = 'Nathalia';
        $persona = new Personas();
        $name = $persona->esUnString();
        $this->assertIsString($texto ,$name);
    }
}