<?php

namespace Connections;

class Connect{
   public $con;
   private $hostName = "localhost";
   private $userName = "root";
   private $password = "";
   private $database = "wheel_of_doom_ninja_coders";

   
   function connectDDBB(){
       $con = mysqli_connect($this->hostName, $this->userName, $this->password, $this->database);
       if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
    }

}
?>