<?php
$usuarios= Controladorfor ::ctrSeleccionarReg(null, null);

?>
<table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
                </thead>
    <tbody>
        <?php foreach ($usuarios as $key => $value): ?>   
            <tr>
                <td><?php echo ($key+1);?></td>
                <td><?php echo $value["nombre"];?></td>
                <td><?php echo $value["email"];?></td>
                <td>
                    <div class="btn-group">
                        <div>
                        <a  href="index.php?pagina=editar&id=<?php echo $value["id"];?>"class="btn btn-warning">Editar</a>
                        </div>
                        <div>
                        <form method="post">
                        <input type="hidden" value="<?php echo $value["id"];?>" name="eliminarRegistro">
                        <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                <?php

                            $eliminar = new Controladorfor();
                            $eliminar->  ctrEliminaReg();
                ?>        
                        
                    </div>
                </td>
            </tr> 
        <?php endforeach ?>>  
    </tbody>
</table>