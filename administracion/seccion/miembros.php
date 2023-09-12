<?php include("../template/cabecera.php"); ?>
<div class="col-md-4">
<div class="card">
    <div class="card-header">
        Agregar Miembros de EMMC
    </div>
    <div class="card-body">
    <form method="POST" enctype="multipart/form-data" action="">
        <fieldset>
            <div class="form-group">
                <label for="nombre" class="form-label mt-4">Nombre(s)</label>
                <input type="text" class="form-control form-control-sm" id="nombre" placeholder="Introduce nombre">
            </div>
            <div class="form-group">
                <label for="apellidoPat" class="form-label mt-4">Apellido Paterno</label>
                <input type="text" class="form-control form-control-sm" id="apellidoPat" placeholder="Introduce Apellido Paterno">
            </div>
            <div class="form-group">
                <label for="apellidoMat" class="form-label mt-4">Apellido Materno</label>
                <input type="text" class="form-control form-control-sm" id="apellidoMat" placeholder="Introduce Apellido Materno">
            </div>
            <div class="form-group">
                <label for="alias" class="form-label mt-4">Alias</label>
                <input type="text" class="form-control form-control-sm" id="alias" placeholder="Introduce Alias">
            </div>
            <div class="form-group">
                <label for="fechNac" class="form-label mt-4">Fecha de Nacimiento</label>
                <input type="calendar" class="form-control form-control-sm" id="fechNac" placeholder="Calendario">
            </div>
            <div class="form-group">
                <label for="telCasa" class="form-label mt-4">Tel. de Casa</label>
                <input type="text" class="form-control form-control-sm" id="telCasa" placeholder="Introduce Telefono">
            </div>
            <div class="form-group">
                <label for="celular" class="form-label mt-4">Celular</label>
                <input type="text" class="form-control form-control-sm" id="celular" placeholder="Introduce Celular">
            </div>
            <div class="form-group">
                <label for="correo" class="form-label mt-4">Correo Electronico</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Introduce Correo Electronico">
            </div>
            <div class="form-group">
                <label for="ocupacion" class="form-label mt-4">Ocupacion</label>
                <input type="text" class="form-control form-control-sm" id="ocupacion" placeholder="Introduce ocupacion">
            </div>
            <div class="form-group">
                <label for="nss" class="form-label mt-4">Seguro Social</label>
                <input type="text" class="form-control form-control-sm" id="nss" placeholder="Introduce Numero de Seguro Social">
            </div>
            <div class="form-group">
                <label for="tipoSangre" class="form-label mt-4">Tipo de Sangre</label>
                <select class="form-select" id="tipoSangre">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecIng" class="form-label mt-4">Fecha de Ingreso</label>
                <input type="calendar" class="form-control form-control-sm" id="fecIng" placeholder="Calendario">
            </div>
            <div class="form-group">
                <label for="padecimientos" class="form-label mt-4">Padecimientos</label>
                <textarea class="form-control" id="padecimientos" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="direccion" class="form-label mt-4">Direcci&oacute;n</label>
                <input type="text" class="form-control form-control-sm" id="direccion" placeholder="Introduce calle y numero localidad y CP">
            </div>
            <div class="form-group">
                <label for="estado" class="form-label mt-4">Estado</label>
                <select class="form-select" id="estado">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="municipio" class="form-label mt-4">Municipio</label>
                <select class="form-select" id="municipio">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rango" class="form-label mt-4">Rango</label>
                <select class="form-select" id="rango">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cargo" class="form-label mt-4">Cargo</label>
                <select class="form-select" id="cargo">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rol" class="form-label mt-4">Rol</label>
                <select class="form-select" id="rol">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <fieldset class="form-group">
                <legend class="mt-4">Estatus</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="">
                    <label class="form-check-label" for="optionsRadios1">
                    Activo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="0">
                    <label class="form-check-label" for="optionsRadios2">
                    Inactivo
                    </label>
                </div>
            </fieldset>
            <br />
            <div class="btn-group" role="group" aria-label="">
                <button type="button" class="btn btn-primary btn-sm">Agregar</button>
                <button type="button" class="btn btn-primary btn-sm">Modificar</button>
                <button type="button" class="btn btn-warning btn-sm">Cancelar</button>
            </div>
        </fieldset>
    </form>
    </div>
</div>
    
</div>
<div class="col-md-8">
    <table class="table table-hover">
        <thead>
            <tr class="table-dark">
                <th>Nombre</th>
                <th>Alias</th>
                <th>Fecha Nac</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Ocupacion</th>
                <th>Alias</th>
                <th>Seguro Social</th>
                <th>Tipo Sangre</th>
                <th>Celular</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include("../template/pie.php"); ?>