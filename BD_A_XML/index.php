<?php
    require("Conexion.php");
    header("Content-type: text / xml");

    $query = "SELECT *FROM Libros ORDER BY codigo ASC"; /* SELECCIONA TODA LA TABLA LIBROS  Y LA ORDENA ASCENDEMENTE CON EL CODIGO*/
    $resultado = $Conexion->query($query);
    $salida_xml = "<?xml version=\"1.0\"?>";
    $salida_xml.= "<Biblioteca>\n";

    for($x=0; $x< mysqli_num_rows($resultado); $x++){
        echo $x;
        $fila = $resultado->fetch_assoc(); /*Recupera una fila de resultados como un array asociativo*/
     $salida_xml.= "\t<Libros>\n";
     $salida_xml.= "\t\t<codigo>" . $fila['codigo']. "</codigo>\n";
     $salida_xml.= "\t\t<titulo>" . $fila['titulo']. "</titulo>\n";
     $salida_xml.= "\t\t<autor>" . $fila['autor']. "</autor>\n";
     $salida_xml.= "\t\t<editorial>" . $fila['editorial']. "</editorial>\n";
     $salida_xml.= "\t\t<precio>" . $fila['precio']. "</precio>\n";
     $salida_xml.= "\t</Libros>";
    }
    $salida_xml .= "</Biblioteca>";
    echo $salida_xml;
?>
