<?php
    $servidor = 'mysql:host=mysql.webcindario.com;dbname=elegidosmexicomc';
    $usuario = 'elegidosmexicomc';
    $password = 'Lobg850929#';
    
    try {
        $conn = new PDO($servidor, $usuario, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexión OK con PDO";
        try{
            $statement = $conn->prepare("SELECT tm.alias AS Alias,cr.descRango AS Rango,crol.descRol AS Rol,ce.descEstado AS Estado,cm.descMunicipio AS Municipio FROM Tab_Miembros AS tm INNER JOIN Cat_Rango AS cr ON tm.idRango=cr.idRango INNER JOIN Cat_Roles AS crol ON tm.idRol=crol.idRol INNER JOIN Cat_Estados AS ce ON tm.idEstado=ce.idEstado INNER JOIN Cat_Municipios AS cm ON tm.idMunicipio=cm.idMunicipio WHERE tm.idEstatus=1");
            $statement->execute();
            while ($row = $statement->fetch()){
                echo "<tr>";
                echo "<td><font face=\"verdana\">" .
                $row["Alias"] . "</font></td>";
                echo "<td><font face=\"verdana\">" .
                $row["Rango"] . "</font></td>";
                echo "<td><font face=\"verdana\">" .
                $row["Rol"] . "</font></td>";
                echo "<td><font face=\"verdana\">" .
                $row["Estado"] . "</font></td>";
                echo "<td><font face=\"verdana\">" .
                $row["Municipio"] . "</font></td>";
                echo "</tr>";
            }
        }catch(PDOException $e){
            echo "Conexión fallida - ERROR de SQL: " . $e->getMessage();
        }
    } catch (PDOException $e) {
        echo "Conexión fallida - ERROR de conexión: " . $e->getMessage();
    }
?>