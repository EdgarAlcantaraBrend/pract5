<?php 

    $idNombre = $_POST['idNombre'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nacimiento = $_POST['nacimiento'];
    $sexo= $_POST['sexo'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_nombres 
            SET nombre = '$nombre', 
                paterno = '$paterno',
                materno = '$materno',
                nacimiento = '$nacimiento',
                sexo = '$sexo'
            WHERE id_nombre = '$idNombre'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }