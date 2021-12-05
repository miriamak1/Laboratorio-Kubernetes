<?php
error_reporting(0);
class Controladorfor{

    static public function ctrRegistro(){
        if(isset($_POST["registronombre"])){
             $tabla ="registros";
             $datos=array("id"=>$_POST["idusuario"],
                          "nombre"=>$_POST["registronombre"],
                          "email" =>$_POST["registroemail"],
                          "password"=>$_POST["registropass"]);
            $respuesta = Modelofor::mdlReg($tabla,$datos);
            return $respuesta;
        }
    }
    static public function ctrSeleccionarReg($item, $valor){
        $tabla="registros";
        $respuesta = Modelofor::mdlSeleccionarReg($tabla, $item,$valor);
        return $respuesta;
    }
    public function ctrActualizarReg(){
        if(isset($_POST["actualizarnombre"])){
            if($_POST["actualizarpass"]!=""){
                
                $password = $_POST["actualizarpass"];
                
            }else{
                $password = $_POST["passwordActual"];
            }
            $tabla ="registros";
            $datos=array("id"=> $_POST["idusuario"],
                         "nombre"=>$_POST["actualizarnombre"],
                         "email" =>$_POST["actualizaremail"],
                         "password"=> $password);
           $respuesta = Modelofor::mdlActualizarReg($tabla,$datos);
           if($respuesta =="ok"){
            echo  '<script>
            if(window.history.replaceState){
                 window.history.replaceState( null, null, window.location.href);
            }
          
            window.location ="index.php?pagina=inicio";
          </script>';


          echo '<div class="alert alert-success">El usuario fue modificado </div>';
           }
       }
    }
    public function ctrEliminaReg(){
        if(isset($_POST["eliminarRegistro"])){
            $tabla ="registros";
            $valor = $_POST["eliminarRegistro"];
            $respuesta = Modelofor::mdlEliminarReg($tabla, $valor);
            if($respuesta=="ok"){

                echo  '<script>
            if(window.history.replaceState){
                 window.history.replaceState( null, null, window.location.href);
            }
          
                window.location ="index.php?pagina=inicio";
          </script>';
            }
    }
}
     
}