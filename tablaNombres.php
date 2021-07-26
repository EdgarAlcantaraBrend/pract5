<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_nombre, 
                    nombre,
                    paterno,
                    materno, 
                    nacimiento,
                    sexo
            FROM t_nombres";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-condensed table-dark">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Fecha de nacimiento</th>
        <th>Sexo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) {  
        ?>
        <tr>
            <td><?php echo $mostrar['id_nombre'];?></td>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo $mostrar['paterno'];?></td>
            <td><?php echo $mostrar['materno'];?></td>
            <td><?php echo $mostrar['nacimiento']; ?></td>
            <td><?php echo $mostrar['sexo'];?></td>
            <td>
                <form action="actualizar.php" method="POST">
                    <input type="text" hidden name="idNombre" value="<?php echo $mostrar['id_nombre']?>">
                    <button class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form action="servidor/eliminar.php" method="POST">
                    <input type="text" hidden name="idNombre" value="<?php echo $mostrar['id_nombre']?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>