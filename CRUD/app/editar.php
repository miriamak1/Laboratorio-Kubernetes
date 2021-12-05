<?php
    if(isset($_GET["id"])){
        $item = "id";
        $valor = $_GET["id"];
        $usuario = Controladorfor::ctrSeleccionarReg($item,$valor);
    }
?>
<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-ligth" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-users"></i>
                    </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $usuario["nombre"];?>" placeholder="Actualizar nombre" id="nombre" name="actualizarnombre">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Actualizar email" value="<?php echo $usuario["email"];?>" id="email" name="actualizaremail">
                  </div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Actualizar password" id="pwd" name="actualizarpass">
                  <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"];?>">
                  <input type="hidden" name="idusuario" value="<?php echo $usuario["id"];?>">
                </div>
                <?php
                    $actualizar= new Controladorfor();
                    $actualizar -> ctrActualizarReg(); 
                ?>
                
                <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>