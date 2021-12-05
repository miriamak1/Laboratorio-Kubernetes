<?php
class Conexion{
    
    static public function conectar(){


        $link = new PDO("mysql:host=miriam-service;dbname=crud",
                        "miriam",
                        "miriam123");
        $link->exec("set names utf8");
        return $link;

    }
}
?>