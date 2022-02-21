<?php

    require("conexion.php");
    header("Content-type: text / xml");

        $query = "SELECT *FROM Cliente ORDER BY DNI ASC";
        $query = "SELECT *FROM Proveedor ORDER BY CODIGO ASC";
        $query = "SELECT *FROM Producto ORDER BY NIF ASC";

        $resultado = $Conexion->query($query);

        $salida_xml = "<?xml version=\"1.0\"?>";
        $salida_xml.="<Clase>\n";
      
            for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                echo $x;
                $fila = $resultado->fetch_assoc();             
                $salida_xml.="\t<CLIENTE >\n";
                $salida_xml.="\t\t<DNI>" . $fila['DNI']. "</DNI>\n";
                $salida_xml.="\t\t<Nombre>" . $fila['Nombre']. "</Nombre>\n";
                $salida_xml.="\t\t<Apellidos>" . $fila['Apellidos']. "</Apellidos>\n";
                $salida_xml.="\t\t<Direccion>" . $fila['Direccion']. "</Direccion>\n";
                $salida_xml.="\t\t<FDN>" . $fila['FDN']. "</FDN>\n";
                           
                $salida_xml.="\t</CLIENTE>\n";
            }

            for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                echo $x;
                $fila = $resultado->fetch_assoc(); //Recupera una fila de resultados como un array aociativo            
                $salida_xml.="\t<PROVEEDOR >\n";
                $salida_xml.="\t\t<NIF>".$fila['NIF']."</NIF>\n";
                $salida_xml.="\t\t<NOMBRE>".$fila['Nombre']."</NOMBRE>\n";
		$salida_xml.="\t\t<DIRECCION>".$fila['Direccion']."</DIRECCION>\n";               
                $salida_xml.="\t</PROVEEDOR>\n";
	        }



            for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                $fila = $resultado->fetch_assoc(); //Recupera una fila de resultados como un array aociativo
                echo $x;
                $salida_xml.="\t<PRODUCTO>\n";
                $salida_xml.="\t\t<NOMBRE>".$fila['Nombre']."</NOMBRE>\n";
                $salida_xml.="\t\t<CODIGO>".$fila['Codigo']."</CODIGO>\n";       
                $salida_xml.="\t\t<PUNITARIO>".$fila['Punitario']."</PUNITARIO>\n";                   
                $salida_xml.="\t</PRODUCTO>\n";
             }

    



$salida_xml .= "</Clase>";
echo $salida_xml;

?>
