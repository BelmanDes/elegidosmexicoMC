<?php

$statement = $pdo->prepare("SELECT concat(tm.nombre, ' ', tm.apellidoPat, ' ', tm.apellidoMat) AS nombre, tm.alias, tm.fechaNac AS nacimiento, tm.telCasa, tm.celular, tm.email, tm.ocupacion, tm.numSegSocial AS nss, tm.padecimientos, tm.direccion, cm.descMunicipio AS municipio, ced.descEstado AS estado, tm.fechaIngreso AS ingreso, cts.descTipoSangre AS tipoSangre, cra.descRango AS rango, cc.descCargo AS cargo, cr.descRol AS rol, ce.descEstatus AS estatus FROM Tab_Miembros AS tm INNER JOIN Cat_Municipios AS cm ON tm.idMunicipio=cm.idMunicipio INNER JOIN Cat_Estados AS ced ON tm.idEstado=ced.idEstado INNER JOIN Cat_Tipo_Sangre AS cts ON tm.idTipoSangre=cts.idTipoSangre INNER JOIN Cat_Cargos AS cc ON tm.idCargo=cc.idCargo INNER JOIN Cat_Roles AS cr ON tm.idRol=cr.idRol INNER JOIN Cat_Rango AS cra ON tm.idRango=cra.idRango INNER JOIN Cat_Estatus As ce ON tm.idEstatus=ce.idEstatus WHERE tm.idEstatus=1");
$statement->execute();

$query = 
$result = mysql_query($query);

echo $result:

while ($row = mysql_fetch_array($result)) {
    echo "<tr><td><center><font face=\"verdana\">" .
    $row["nombre"] . "</font></center></td>";
    echo "<td><font face=\"verdana\">" .
    $row["alias"] . "</font></td>";
    echo "<td><font face=\"verdana\">" .
    $row["nacimiento"] . "</font></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["telCasa"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["celular"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["email"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["ocupacion"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["nss"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["tipoSangre"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["padecimientos"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["direccion"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["municipio"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["estado"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["ingreso"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["rango"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["cargo"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["rol"] . "</font></center></td>";
    echo "<td width=\"5%\"><center><font face=\"verdana\">" .
    $row["estatus"] . "</font></center></td>";
    
    echo "</tr>";
}
mysql_free_result($result);
mysqli_close($conn);
?>