<?php 
    require_once "clases/Crud.php";
    $objeto = new Crud();
    $datos = $objeto -> mostrar();
    echo "<pre>";
    // print_r($datos);
    echo "</pre>";
?>
<?php require_once "header.php"; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container bg-light">
    <h1 class="display-4">Crud con <i class="fab fa-php"></i> y MongoDB</h1>
        <hr>
        <div class="table-responsive">
        <button class="btn btn-success"><a href="agregar.php" class="btn btn-primary"><i class="fas fa-user-plus"></i> Agregar persona</a></button>
            <table class="table table-hover table-sm table-bordered">
            <thead>
                    <th>Nombre</th>
                    <th>Apellido Materno</th>
                    <th>Apellido Paterno</th>
                    <th>Fecha de nacimiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php foreach ($datos as $key): ?>
                <tr>
                <td><?php echo $key -> nombre; ?></td>
                <td><?php echo $key -> paterno;?></td>
                <td><?php echo $key -> materno;?></td>
                <td><?php echo $key -> fecha_nacimiento;?></td>
                <td><a href="actualizar.html"><button class="btn btn-warning"><i class="fas fa-sync-alt"></i> Editar</button></a></td>
                <td>
                    <form action="procesos/eliminar.php" method="POST">
                <input type="text" name="_id" hidden value="<?php echo $idMongo ?>">
                <td><a href="eliminar.html"><button class="btn btn-danger"><i class="fas fa-user-slash"></i> Eliminar</button></a></td>
                </form>
                </td>
                </tbody>
                <!-- <tbody>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                        <td><button class="btn btn-warning align-self-end"><a href="actualizar.php" class="text-light"><i class="fas fa-edit"></i></button></td>
                    
                    <td><button class="btn btn-danger align-self-end"><a href="eliminar.php" class="text-light"><i class="fas fa-trash-alt"></i></button></td>
                </tr> -->
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once "scripts.php"; ?>