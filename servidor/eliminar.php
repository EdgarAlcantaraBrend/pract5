<?php

    $idGasto = $_POST['idNombre'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_nombres WHERE id_nombre = '$idGasto'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar, revisa tu query :(";
    }
?>