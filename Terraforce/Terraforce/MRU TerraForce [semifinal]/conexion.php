<?php

$servername="localhost";
$username="root@localhost";
$password="";
$database="terraforce";

//conexion:

$conn = new mysqli($servername, $username, $password, $database);


//checar conexion:
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}else{
    echo "Conexion lista";
}
?>