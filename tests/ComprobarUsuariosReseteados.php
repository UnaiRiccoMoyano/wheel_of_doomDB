<?php

use PHPUnit\Framework\TestCase;
use tributos\Personas;

class ComprobarUsuariosReseteados extends TestCase
{
    public function testUsuariosReseteados()
    {
        $mensajeEsperado = 0;
        $persona = new Personas();        
        $usuariosReseteados = $persona->comprobarTodosUsuariosEstanVivos();
        $this->assertEquals($mensajeEsperado, $usuariosReseteados);
    }


}


