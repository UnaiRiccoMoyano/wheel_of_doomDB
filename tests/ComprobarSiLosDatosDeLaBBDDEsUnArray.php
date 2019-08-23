<?php

use PHPUnit\Framework\TestCase;
use tributos\Personas;

class ComprobarSiLosDatosDeLaBBDDEsUnArray extends TestCase
{

    public function testEsUnArray()
    {
        $persona = new Personas();
        $arrayUsers = $persona->getUsers();
        $this->assertIsArray($arrayUsers);
    }
}
