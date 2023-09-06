<?php include("../template/cabecera.php"); ?>
<div class="col-md-3">
    <form>
        <fieldset>
            <legend>Agregar Miembros de EMMC</legend>
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
                <input type="calendar" class="form-control form-control-sm" id="fechNac" placeholder="Introduce Alias">
            </div>
            <!--
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Example select</label>
                <select class="form-select" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Example disabled select</label>
                <select class="form-select" id="exampleDisabledSelect1" disabled="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect2" class="form-label mt-4">Example multiple select</label>
                <select multiple="" class="form-select" id="exampleSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
                <div class="form-group">
                <label for="formFile" class="form-label mt-4">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <fieldset class="form-group">
                <legend class="mt-4">Radio buttons</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    <label class="form-check-label" for="optionsRadios1">
                    Option one is this and that—be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    <label class="form-check-label" for="optionsRadios2">
                    Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                    <label class="form-check-label" for="optionsRadios3">
                    Option three is disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <legend class="mt-4">Checkboxes</legend>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                    <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <legend class="mt-4">Switches</legend>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <legend class="mt-4">Ranges</legend>
                    <label for="customRange1" class="form-label">Example range</label>
                    <input type="range" class="form-range" id="customRange1">
                    <label for="disabledRange" class="form-label">Disabled range</label>
                    <input type="range" class="form-range" id="disabledRange" disabled="">
                    <label for="customRange3" class="form-label">Example range</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
            </fieldset>
-->
            <br />
            <button type="submit" class="btn btn-primary">Agregar</button>
        </fieldset>
    </form>
</div>
<div class="col-md-9">
    tabla de miembros
</div>
<?php include("../template/pie.php"); ?>