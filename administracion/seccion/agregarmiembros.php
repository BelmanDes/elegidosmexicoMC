<?php include("../template/cabecera.php"); ?>
<?php
   
   $txtnombre=(isset($_POST['nombre']))?isset($_POST['nombre']:"";

    
?>
<div class="col-md-7">
    <div class="card">
        <div class="card-header">
            Agregar Miembros de ELEGIDOS MEXICO MC
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <label for="nombre" class="form-label mt-4">Nombre(s)</label>
                    <input type="text" class="form-control form-control-sm" name="nombre" id="nombre" placeholder="Introduce nombre">
                </div>
                <div class="form-group">
                    <label for="apellidoPat" class="form-label mt-4">Apellido Paterno</label>
                    <input type="text" class="form-control form-control-sm" name="apellidoPat" id="apellidoPat" placeholder="Introduce Apellido Paterno">
                </div>
                <div class="form-group">
                    <label for="apellidoMat" class="form-label mt-4">Apellido Materno</label>
                    <input type="text" class="form-control form-control-sm" name="apellidoMat" id="apellidoMat" placeholder="Introduce Apellido Materno">
                </div>
                <div class="form-group">
                    <label for="alias" class="form-label mt-4">Alias</label>
                    <input type="text" class="form-control form-control-sm"name="alias"  id="alias" placeholder="Introduce Alias">
                </div>
                <div class="form-group">
                    <label for="fechNac" class="form-label mt-4">Fecha de Nacimiento</label>
                    <input type="text" class="form-control form-control-sm" name="fecNac" id="fechNac" placeholder="Calendario">
                </div>
                <div class="form-group">
                    <label for="telCasa" class="form-label mt-4">Tel. de Casa</label>
                    <input type="text" class="form-control form-control-sm" name="telCasa" id="telCasa" placeholder="Introduce Telefono">
                </div>
                <div class="form-group">
                    <label for="celular" class="form-label mt-4">Celular</label>
                    <input type="text" class="form-control form-control-sm" name="celular" id="celular" placeholder="Introduce Celular">
                </div>
                <div class="form-group">
                    <label for="correo" class="form-label mt-4">Correo Electronico</label>
                    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Introduce Correo Electronico">
                </div>
                <div class="form-group">
                    <label for="ocupacion" class="form-label mt-4">Ocupacion</label>
                    <input type="text" class="form-control form-control-sm" name="ocupacion" id="ocupacion" placeholder="Introduce ocupacion">
                </div>
                <div class="form-group">
                    <label for="nss" class="form-label mt-4">Seguro Social</label>
                    <input type="text" class="form-control form-control-sm" name="nss" id="nss" placeholder="Introduce Numero de Seguro Social">
                </div>
                <div class="form-group">
                    <label for="tipoSangre" class="form-label mt-4">Tipo de Sangre</label>
                    <select class="form-select" name="tipoSangre" id="tipoSangre">
                        <option value="">--Selecionar Tipo de Sangre</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecIng" class="form-label mt-4">Fecha de Ingreso</label>
                    <input type="text" class="form-control form-control-sm" name="fecIng" id="fecIng" placeholder="Calendario">
                </div>
                <div class="form-group">
                    <label for="padecimientos" class="form-label mt-4">Padecimientos</label>
                    <textarea class="form-control" name="padecimientos" id="padecimientos" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="direccion" class="form-label mt-4">Direcci&oacute;n</label>
                    <input type="text" class="form-control form-control-sm" name="direccion" id="direccion" placeholder="Introduce calle y numero localidad y CP">
                </div>
                <div class="form-group">
                    <label for="estado" class="form-label mt-4">Estado</label>
                    <select class="form-select" name="estado" id="estado">
                        <option value="">--Selecionar Estado</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="municipio" class="form-label mt-4">Municipio</label>
                    <select class="form-select" name="municipio" id="municipio">
                        <option value="">--Selecionar Municipio</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rango" class="form-label mt-4">Rango</label>
                    <select class="form-select" name="rango" id="rango">
                        <option value="">--Selecionar Rango</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cargo" class="form-label mt-4">Cargo</label>
                    <select class="form-select" name="cargo" id="cargo">
                        <option value="">--Selecionar Cargo</option>
                        <option value="1">Presidente</option>
                        <option value="2">Vice Presidente</option>
                        <option value="3">Secretario</option>
                        <option value="4">Capitan de Ruta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rol" class="form-label mt-4">Rol</label>
                    <select class="form-select" name="rol" id="rol">
                        <option value="">--Selecionar Rol</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="estatus" class="form-label mt-4">Estatus</label>
                    <select class="form-select" name="estatus" id="estatus">
                        <option value="">--Selecionar Estatus</option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <br />
                <div class="btn-group" role="group" aria-label="">
                    <button type="button" name="accion" value="Agregar" class="btn btn-primary btn-sm">Agregar</button>
                    <button type="button" name="accion" value="Modificar" class="btn btn-primary btn-sm">Modificar</button>
                    <button type="button" name="accion" value="Cancelar" class="btn btn-warning btn-sm">Cancelar</button>
                </div>
            </fieldset>
        </form>
        </div>
    </div>
</div>
<?php include("../template/pie.php"); ?>