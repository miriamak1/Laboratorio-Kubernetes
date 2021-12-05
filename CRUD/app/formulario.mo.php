<?php
require_once "Conexion.php";
class Modelofor{

    static public function mdlReg($tabla,$datos){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) values
         (:nombre,:email,:password)");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }
    static public function mdlSeleccionarReg($tabla, $item, $valor){
        if($item == null && $valor== null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id desc");
            $stmt->execute();
            return $stmt -> fetchAll(); 
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item ORDER BY id desc");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt -> fetch(); 
        }
        $stmt->close();
        $stmt = null;
    }
    static public function mdlActualizarReg($tabla,$datos){
        
        $stmt = Conexion::conectar()->prepare("Update $tabla SET nombre=:nombre, email=:email, password=:password
        where id = :id");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }
    static public function mdlEliminarReg($tabla,$valor){
        
        $stmt = Conexion::conectar()->prepare("Delete from  $tabla 
        where id = :id");
        $stmt->bindParam(":id", $valor, PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }
}

