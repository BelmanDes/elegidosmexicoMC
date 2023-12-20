<?php include("template/cabecera.php"); ?>
<div class="col-md-12">
    <br />
    <br />
    <div class="card border-primary mb-3">
        <div class="card-header">
            MESA DIRECTIVA DE ELEGIDOS MEXICO MC
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th>ALIAS</th>
                        <th>ESTADO</th>
                        <th>CARGO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("includes/conMesaDirectiva.php") 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("template/pie.php"); ?>