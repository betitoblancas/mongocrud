<?php

use MongoDB\Operation\Delete;
use MongoDB\Operation\DeleteOne;

require_once "Conexion.php";
    class Crud {

        public function insertarDatos($datos){
            try{
                $conexion =Conexion::conectar();
                $coleccion = $conexion -> crud;
                $resultado =  $coleccion->insertOne([
                    "nombre" => $datos['nombre'],
                    "paterno" => $datos['paterno'],
                    "materno" => $datos['materno'],
                    "fecha_nacimiento" => $datos['fecha_nacimiento']
                ]);
                return $resultado;
                }
                catch (\Throwable $th){
                return $th;
            }   
        }
     

        public function mostrar(){
            try{
                $conexion =Conexion::conectar();
                $coleccion = $conexion -> crud;
                $datos =  $coleccion->find();
                return $datos;
                }
                catch (\Throwable $th){
                    return $th;
            }
        }
        public function eliminar($datos){
            $conexion =Conexion::conectar();
            $coleccion = $conexion -> crud;
            $resultado =  $coleccion->DeleteOne([
                "nombre" => $datos['nombre'],
                "paterno" => $datos['paterno'],
                "materno" => $datos['materno'],
                "fecha_nacimiento" => $datos['fecha_nacimiento']
            ]);
            return $resultado;
            print_r ($resultado);
        }
        public function obtenerDocumento($id){
            $conexion =Conexion::conectar();
            $coleccion = $conexion -> personas;
            try{
                $datos =  $coleccion->findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));
                return $datos;
                }
                catch (\Throwable $th){
                    return $th;
            }
        }
    }
?>