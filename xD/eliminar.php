<?php require_once 'header.php'; ?>
<?php require_once 'clases/Crud.php';
    $objeto = new Crud();
    $id = $_POST['_id'];
?>


<div class="jumbotron jumbotron-fluid">
    <div class="container rounded border border-dark" style="background-color: white;">
        <h1 class="display-4 text-center"><b>Eliminar Registro</b></h1>
        <p class="lead">
            <div class="alert alert-danger" role="alert"> 
                <h4 class="alert-heading text-center"><i class="fas fa-exclamation-triangle" style="color:red;"></i>&nbsp Advertencia &nbsp<i class="fas fa-exclamation-triangle" style="color:red;"></i></h4>
                <p class="text-center">¿Estas seguro de eliminar este registro?</p>
                <hr>
                <div class="row text-center">
                    <div class="col-sm-6"><a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Eliminar</a></div>
                    <div class="col-sm-6"><a href="index.php" class="btn btn-secondary"><i class="fas fa-undo"></i>&nbsp Regresar</a></div>
                </div>
            </div>
        </p>
    </div>
</div>
<?php require_once 'scripts.php'; ?>