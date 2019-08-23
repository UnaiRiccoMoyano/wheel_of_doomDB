<?php

namespace tributos;

use Connections\Connect;

include 'Connect.php';

class Personas extends Connect
{
    public $user_id;
    public $name;
    public $status;
    public $connect;

    function hayVivos()
    {
        $personasVivas = $this->getAliveUsers();
        foreach ($personasVivas as $value) {
            $this->status = $value['status'];
            return $this->status;
        }
    }

    function hayMuertos()
    {
        $personasMuertas = $this->getDeadUsers();
        foreach ($personasMuertas as $value) {
            $this->status = $value['status'];
            return $this->status;
        }
    }

    function esUnString()
    {
        $arrayUsuarios=$this->getUsers();
        foreach ($arrayUsuarios as $user) {            
            $this->name = $user["name"];
            return $this->name;
        }
    }

    function comprobarTodosUsuariosEstanVivos() {
        $todosUsersVivos = $this->getUsers();
        foreach ($todosUsersVivos as $user) {
            $this->status = $user["status"];
            return $this->status;
        }
    }




    /*************************/

    function getAliveUsers()
    {
        $personasVivas = [];
        $connect = new Connect();
        $connected = $connect->connectDDBB();
        $sql_query = 'SELECT * FROM users WHERE status = 0';

        if (isset($sql_query)) {
            $result = $connected->query($sql_query);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $this->user_id = $row['user_id'];
                    $this->name = $row['name'];
                    $this->status = $row['status'];
                    array_push($personasVivas, array("user_id" => $this->user_id, "name" => $this->name, "status" => $this->status));
                }

                return $personasVivas;
            }
        }
    }

    function getDeadUsers(){

        $personasMuertas = [];
        $connect = new Connect();
        $connected = $connect->connectDDBB();
        $sql_query = 'SELECT * FROM users WHERE status = 1';

        if (isset($sql_query)) {
            $result = $connected->query($sql_query);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $this->user_id = $row['user_id'];
                    $this->name = $row['name'];
                    $this->status = $row['status'];
                    array_push($personasMuertas, array("user_id" => $this->user_id, "name" => $this->name, "status" => $this->status));
                }

                return $personasMuertas;
            }
        }
    }

    function getUsers(){

        $personas = [];
        $connect = new Connect();
        $connected = $connect->connectDDBB();
        $sql_query = 'SELECT * FROM users';

        if (isset($sql_query)) {
            $result = $connected->query($sql_query);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $this->user_id = $row['user_id'];
                    $this->name = $row['name'];
                    $this->status = $row['status'];
                    array_push($personas, array("user_id" => $this->user_id, "name" => $this->name, "status" => $this->status));
                }

                return $personas;
            }
        }
    }

    function resetPersonas(){

        $personas = [];
        $connect = new Connect();
        $connected = $connect->connectDDBB();
        $sql_query = 'UPDATE users SET status=0 WHERE status=1';

        if (isset($sql_query)) {
            $result = $connected->query($sql_query);
            if ($result->num_rows > 0) {
                return $personas;
            }
        }
    }


    function mortRandom(){  
        $connect = new Connect();  
        $connected = $connect->connectDDBB();
        $personasVivas = $this->getAliveUsers();   
        $personaRandom = array_rand ($personasVivas,1);
        $randomPersonaId = $personasVivas[$personaRandom];
        $sql_query = 'UPDATE users SET status=1 WHERE user_id='.$randomPersonaId["user_id"]; 
        
        if (mysqli_query($connected, $sql_query)===TRUE) { 
            echo $sql_query . "<br>";
            echo 'Estoy actualizado';    
            return 'Estoy actualizado';           
        }
    }
}