<?php
namespace tributos;
use Connections\Connect;

class Personas {
    
public $user_id;
public $name;
public $dead = 0;
public $connect;

function hayVivos() {
    $connect = new Connect();
    return $this->dead;

}

}

