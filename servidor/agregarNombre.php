<?php

    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nacimiento = $_POST['nacimiento'];
    $sexo = $_POST['sexo'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_nombres (nombre, paterno, materno, nacimiento, sexo) VALUES ('$nombre', '$paterno','$materno','$nacimiento','$sexo')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar, no sé porque :(";
    }

?>