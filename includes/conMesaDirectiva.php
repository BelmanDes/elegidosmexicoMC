<?php
    $servidor = 'mysql:host=mysql.webcindario.com;dbname=elegidosmexicomc';
    $usuario = 'elegidosmexicomc';
    $password = 'Lobg850929#';
    
    try {
        $conn = new PDO($servidor, $usuario, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexión OK con PDO";
        try{
            $statement = $conn->prepare("SELECT  tm.alias AS Alias, ce.descEstado AS Estado, cc.descCargo AS Cargo FROM Tab_Miembros AS tm INNER JOIN Cat_Estados AS ce ON tm.idEstado=ce.idEstado INNER JOIN Cat_Cargos AS cc ON tm.idCargo=cc.idCargo WHERE tm.idEstatus=1 AND cc.idCargo<7 ORDER by cc.idCargo ASC");
            $statement->execute();
            while ($row = $statement->fetch()){
                echo "<tr>";
                echo "<td><font face=\"verdana\">" .
                $row["Alias"] . "</font></td>";
                echo "<td><font face=\"verdana\">" .
                $row["Estado"] . "</font></td>";
                echo "<td><font face=\"verdana\">" .
                $row["Cargo"] . "</font></td>";
                echo "</tr>";
            }
        }catch(PDOException $e){
            echo "Conexión fallida - ERROR de SQL: " . $e->getMessage();
        }
    } catch (PDOException $e) {
        echo "Conexión fallida - ERROR de conexión: " . $e->getMessage();
    }
?>