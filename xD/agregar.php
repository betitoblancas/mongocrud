<?php require_once "header.php"; ?>

<div class="jumbotron jumbotron-fluid">
<div class="container border" style="background-color: white;">
        <h1 class="display-4"><i class="fas fa-user-plus"></i> Agregar Nuevo Registro</h1>
        <p class="lead">
            <form action="procesos/agregar.php" method="POST">
                <label for="nombre">Agregar Nombre:</label>
                <input type="text" name="nombre" class="form-control" required placeholder="Aqui va tu nombre">
                <hr>
                <label for="nombre">Agregar Apellido Paterno:</label>
                <input type="text" name="paterno" class="form-control" required placeholder="Aqui va tu apellido paterno">
                <hr>
                <label for="nombre">Agregar Apellido Materno:</label>
                <input type="text" name="materno" class="form-control" required placeholder="Aqui va tu apellido materno">
                <hr>
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required placeholder="Aqui va tu fecha de nacimiento">
                <br>
                <div class="row">
                    <div class="col-sm-4"><button class="btn btn-primary"><i class="fas fa-user-plus"></i> Agregar</button></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"><a href="index.html" class="btn btn-success"><i class="fas fa-exchange-alt"></i> Regresar</a></div>
                </div>
                <br>
            </form>
        </p>
    </div>
</div>

<?php require_once "scripts.php"; ?>