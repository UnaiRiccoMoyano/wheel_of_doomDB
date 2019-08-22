<?php

use Connections\Connect;

if (isset($_POST["users"])) {
    $sql = "SELECT * FROM users";
}


if (isset($_GET["name"])) {
    $dato = $_GET["name"];
    $sql = "UPDATE users SET dead=1 WHERE name='$dato'";
}