<?php require_once "header.php"; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container bg-light">
        <h1 class="display-4  text-center"><i class="fas fa-user"></i> Actualizar registro</h1>
        <form action="procesos/actualizar.php" method="POST" class="mt-5">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="apellidoP">Apellido Paterno</label>
            <input type="text" name="apellidoP" class="form-control" required>
            <label for="apellidoM">Apellido Materno</label>
            <input type="text" name="ApellidoM" class="form-control" required>
            <label for="FechaNac">Fecha de nacimiento</label>
            <input type="date" name="FechaNac" class="form-control" required>
            <button class="btn btn-primary mt-3 container-fluid">Actualizar</button>
        </form>
        <div class="col-3"><a href="index.php" class="text-info"><button class="btn btn-warning mt-3 container-fluid"><i class="fas fa-backward"></i> Regresar</button></a></div>
        <p class="lead"></p>
    </div>
</div>
<?php require_once "scripts.php"; ?>