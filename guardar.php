<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include("conexion.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nombre=$_POST["nombre"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $masaje=$_POST["masaje"];
    $fecha=$_POST["fecha"];
    $hora=$_POST["hora"];
    $mensaje=$_POST["mensaje"];

    $sql="INSERT INTO reservas
    (nombre,telefono,email,masaje,fecha,hora,observaciones)
    VALUES
    (?,?,?,?,?,?,?)";

    $stmt=mysqli_prepare($conexion,$sql);

    if(!$stmt){
        die("ERROR AL PREPARAR: ".mysqli_error($conexion));
    }

    mysqli_stmt_bind_param(
        $stmt,
        "sssssss",
        $nombre,
        $telefono,
        $email,
        $masaje,
        $fecha,
        $hora,
        $mensaje
    );

    if(mysqli_stmt_execute($stmt)){

   echo "<script>
alert('✅ Reserva guardada correctamente');
window.location.href='index.html';
</script>";
exit;
        echo "<h2 style='color:red'>ERROR AL EJECUTAR:</h2>";
        echo mysqli_stmt_error($stmt);

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>