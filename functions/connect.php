
<?php

$con = mysqli_connect("localhost","root","","wheel1");


if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 
 if(isset($_POST["users"])){
   $sql = "SELECT * FROM users";
 }


if(isset($_GET["name"])){
   $dato=$_GET["name"];
   $sql = "UPDATE users SET dead=1 WHERE name='$dato'";
 }

if(isset($sql)){
   $result = $con->query($sql);
   $usuarios = array();
   if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
            $results[]= $row;
        
     json_encode($results);
      }
   }
}

$con->close();
?>