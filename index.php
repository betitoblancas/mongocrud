<?php
    session_start();
    require_once "class/Crud.php"; 
    $objeto = new Crud();
    $datos = $objeto->mostrar();
    unset($_SESSION['mensaje_crud']);
?>
<?php require_once "header.php"; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container border border-dark rounded" style="background-color:white;">
        <br>
        <h1 class="display-4 text-center"><b>CRUD con php y mongo</b></h1>
        <p class="lead">
            <hr style="background-color: black;">
            <a href="agregar.php" class="btn btn-primary border-dark"><i class="fas fa-user-plus"></i>&nbsp Agregar Persona</a>
            <table class="table table-responsive">
                <table class="table table-hover table-sm table-bordered  table-striped text-center table-condensed" id="idDatatable">
                    <thead class="thead-dark">
                        <th>Nombre &nbsp</th>
                        <th>Apellido Paterno &nbsp</th>
                        <th>Apellido Materno &nbsp</th>
                        <th>Fecha de Nacimiento &nbsp</th>
                        <th>Editar Datos &nbsp</th>
                        <th>Eliminar &nbsp</th>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($datos as $key): 
                            $idMongo = new MongoDB\BSON\ObjectId($key->_id);
                        ?>
                        <tr>
                            <td><?php echo $key->nombre; ?></td>
                            <td><?php echo $key->paterno; ?></td>
                            <td><?php echo $key->materno; ?></td>
                            <td><?php echo $key->fecha_nacimiento; ?></td>
                            <td>
                                <form action="actualizar.php" method="POST">
                                    <input type="text" name="idActualizar" hidden value="<?php echo $idMongo ?>">
                                    <button class="btn btn-warning"><i class="fas fa-edit"></i> Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="eliminar.php" method="POST">
                                    <input type="text" name="_id" hidden value="<?php echo $idMongo ?>">
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </table>
            <hr style="background-color: black;">
        </p>
    </div>
</div>

<?php require_once 'scripts.php'; ?>
