<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-ligth" method="post">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-users"></i>
                    </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter nombre" id="nombre" name="registronombre">
                  </div>
                </div>
                <div class="form-group">
                <label for="email">Email address:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" name="registroemail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="registropass">
                </div>
                <?php
                $registro = Controladorfor ::ctrRegistro();
                if($registro == "ok"){

                  echo  '<script>
                    if(window.history.replaceState){
                         window.history.replaceState( null, null, window.location.href);
                    }
                  

                  </script>';


                  echo '<div class="alert alert-success">El usuario fue agregado </div>';

                }
                
                ?>
                <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>