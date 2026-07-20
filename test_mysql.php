<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "ANTES DE CONECTAR<br>";

$conexion = mysqli_init();
mysqli_options($conexion, MYSQLI_OPT_CONNECT_TIMEOUT, 5);

if (!mysqli_real_connect(
    $conexion,
    "127.0.0.1",
    "root",
    "",
    "spa_db",
    3306
)) {
    die("ERROR: " . mysqli_connect_error());
}

echo "DESPUÉS DE CONECTAR<br>";