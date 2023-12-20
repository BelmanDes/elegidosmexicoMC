<?php include("../template/cabecera.php"); ?>
<div class="col-md-12">
        <a class="btn btn-primary btn-sm" href="<?php echo $url;?>/administracion/seccion/agregarmiembros.php">Agregar Miembro</a>
    <br />
    <br />
    <div class="card border-primary mb-3">
        <div class="card-header">
            Miembros de ELEGIDOS MEXICO MC
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th>Nombre</th>
                        <th>Alias</th>
                        <th>Nacimiento</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Ocupacion</th>
                        <th>Seguro Social</th>
                        <th>Tipo Sangre</th>
                        <th>Padecimientos</th>
                        <th>direccion</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Rango</th>
                        <th>Cargo</th>
                        <th>Rol</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include("includes/conexion.php");
                    include("includes/cmiembros.php");
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("../template/pie.php"); ?>