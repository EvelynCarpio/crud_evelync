<?php

/* ... 
$server = "localhost:3307";
$user = "root";
$pass = "root";
$db = "user_crud";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Conexion Fallida" . $conexion->connect_errno);
}else{
    echo "Conectado";
}
    */

function connection(){
$server = "localhost:3307";
$user = "root";
$pass = "root";
$db = "user_crud";

$connect = mysqli_connect($server, $user, $pass, $db);

mysqli_select_db($connect, $db);

return $connect;
}

?>