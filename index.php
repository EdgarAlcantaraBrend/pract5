
<?php include "header.php"; ?>

    
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">Nombres Personales</h1>
                <p class="lead">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="servidor/agregarNombre.php" method="POST">
                                <label for="nombre">Nombre</label>
                                <input type="text" required class="form-control" name="nombre">
                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" required class="form-control" name="paterno">
                                <label for="materno">Apellido Materno</label>
                                <input type="text" required class="form-control" name="materno">
                                <label for="nacimiento">Fecha de nacimiento</label>
                                <input type="date" required class="form-control" name="nacimiento">
                                <label for="sexo">Sexo</label>
                                <input type="text" name="sexo" required class="form-control">
                                <br>
                                <button class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Tabla de Nombres</h3>
                            <?php include "tablaNombres.php";?>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>


<?php include "footer.php"; ?>

