<?php

$mysqli = new mysqli("localhost", "root", "1998cesarelraso", "programacion web");

if($mysqli->connect_errno){
    echo "Fallo al conectar a MYSQL" . $mysqli->connect_error;
}

$consulta = "SELECT * FROM usuarios";
$resultado = $mysqli->query($consulta);

while($fila=$resultado->fetch_assoc()){
    if($fila["correo"]==$correo && $fila["password"]==$password){
        $autenticado = true;
    }
}
?>