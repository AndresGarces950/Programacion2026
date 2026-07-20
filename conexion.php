<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

$conexion = mysqli_connect(
    "127.0.0.1",
    "root",
    "",
    "spa_db",
    3306
);



if(!$conexion){
    die(mysqli_connect_error());
}
