<?php 
    require_once "MONGODB/Crud.php";
    $crud = new Crud();
    $id =$_POST ('_id');
    $respuesta = $crud->eliminar($id);

    if ($respuesta->getDeletedCount() > 0) {
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }
   
?>