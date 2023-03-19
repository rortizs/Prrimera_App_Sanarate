<!--<?php
//conecion a la base datos
include("../../conexion.php");


//validar y envar parametros por medio del el metodo post



//consultar a mysql los puestos que tengo en la tabla
$consulta=$conexion->prepare("SELECT * FROM tbl_puestos");


?>-->
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del Puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ciclo for each -->
                    <?php foreach ($lista_table_puesto as $registro) { ?>
                        <tr class="">
                            <td scope="row"><?php echo $registro['id_puestos'] ?></td>
                            <td><?php echo $registro['nombre_puesto'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="editar.php?txtID=<?php echo $registro['id_puestos']; ?>" role="button">Editar</a>

                                <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id_puestos']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este puesto?')" role="button">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">
        Módulo de Puestos
    </div>
</div>
