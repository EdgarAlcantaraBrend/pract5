<?php

    $idNombre = $_POST['idNombre'];

    //traemos la conexion
    include "servidor/conexion.php";
    $conexion = conexion();
    //debemos obtener los datos asociados

    $sql = "SELECT id_nombre, 
                    nombre,
                    paterno,
                    materno, 
                    nacimiento,
                    sexo 
            FROM t_nombres
            WHERE id_nombre = '$idNombre'";
    $respuesta = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($respuesta);
?>

<?php include "header.php"; ?>

    
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">Editar Nombre</h1>
                <p class="lead">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="servidor/actualizarNombre.php" method="POST">
                                <input type="text" name="idNombre" value="<?php echo $datos['id_nombre'] ?>" hidden>
                                <label for="nombre">Nombre</label>
                                <input type="text" required class="form-control" <?php echo $datos['nombre']?>>
                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" required class="form-control" <?php echo $datos['paterno']?>>
                                <label for="materno">Apellido Materno</label>
                                <input type="text" required class="form-control" <?php echo $datos['materno']?>>
                                <label for="nacimiento">Fecha de nacimiento</label>
                                <input type="date" required class="form-control" <?php echo $datos['nacimiento']?>>
                                <label for="sexo">Nombre</label>
                                <input type="text" required class="form-control" <?php echo $datos['sexo']?>>
                                
                                <br>
                                <button class="btn btn-warning">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>


<?php include "footer.php"; ?>

