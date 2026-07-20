<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre  = trim($_POST["nombre"]);
    $email   = trim($_POST["email"]);
    $mensaje = trim($_POST["mensaje"]);

    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conexion, $sql);

    if (!$stmt) {
        die("Error al preparar la consulta: " . mysqli_error($conexion));
    }

    mysqli_stmt_bind_param($stmt, "sss", $nombre, $email, $mensaje);

    if (mysqli_stmt_execute($stmt)) {

        echo "<script>
            alert('Mensaje enviado correctamente');
            window.location='index.html';
        </script>";

    } else {

        die("Error al ejecutar: " . mysqli_stmt_error($stmt));

    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conexion);
?>