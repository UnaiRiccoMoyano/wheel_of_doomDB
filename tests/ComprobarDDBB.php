<?php

use PHPUnit\Framework\TestCase;
use Connections\Connect;

class ComprobarDDBB extends TestCase
{
    public function testEstoyConectado()
    {
        $connect = new Connect();        
        $mensajeEsperado = "Estoy conectado";
        $notConnected = $connect->estoyConectado();
        $this->assertEquals($mensajeEsperado, $notConnected);
    }


}


