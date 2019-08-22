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
        $estado = 0;
        $this->status = $estado;
        return $this->status;
    }

    function hayMuertos()
    {
        $estado = 1;
        $this->status = $estado;
        return $this->status;
    }

    function esUnString()
    {
        $nombre = 'Kavan'; 
        $this->name = $nombre;
        return $this->name;
    }




    /*************************/

    function getAliveUsers()
    {   
        $personasVivas=[];
        $connect = new Connect();
        $t = $connect->connectDDBB();
        $sql_query = 'SELECT * FROM users WHERE status = 0';

        if (isset($sql_query)) {
            $result = $t->query($sql_query);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $this->user_id = $row['user_id'];
                    $this->name = $row['name'];
                    $this->status = $row['status'];   
                    array_push($personasVivas, array("user_id"=>$this->user_id, "name"=>$this->name, "status"=>$this->status));
                }
                
                // echo $personasVivas[0]['name'];
                // foreach ($personasVivas as $value) {
                //     echo $value['user_id'];
                //     echo $value['name'];
                //     echo $value['status'];
                //     echo "<br>";
                // }
            }
        }
    }
}
?>
<?php
    $asd = new Personas();
    $resultado = $asd->getAliveUsers();
    echo $resultado;
?>