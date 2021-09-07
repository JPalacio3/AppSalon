<?php


$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');
// Para una conexión correcta primero creamos una variable con nombre $db y la igualamos a la función mysqli_connect(), dentro de los paréntesis se indican los parámetros de conexión; 1) el servidor, 2) el usuario, 3) la contraseña, 4) el nombre de la base de datos.

mysqli_set_charset($db, 'utf8');
// Corregir problemas con tildes y Ñ:


// La siguiente función la usamos para comprobar si la conexión se ha realizado correctamente.

if(!$db){
    echo 'ERROR EN LA CONEXIÓN';
    exit;
}
    // echo 'CONEXIÓN EXITOSA A LA BASE DE DATOS';