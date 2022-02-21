<?php

    require("conexion.php");
    header("Content-type: text / xml");

        $query = "SELECT *FROM Paciente ORDER BY CURP ASC";
        $query = "SELECT *FROM Medico ORDER BY CEDULA ASC";
        $query = "SELECT *FROM Cliente ORDER BY RFC ASC";
        $query = "SELECT *FROM Servicio ORDER BY Id_Servicio ASC";
        $query = "SELECT *FROM Habitacion ORDER BY Id_Habitacion ASC";

        $resultado = $Conexion->query($query);

        $salida_xml = "<?xml version=\"1.0\"?>";
        $salida_xml.="<Hospital>\n";
      
            for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                echo $x;
                $fila = $resultado->fetch_assoc();             
                $salida_xml.="\t<Paciente >\n";
                $salida_xml.="\t\t<CURP>" . $fila['CURP']. "</CURP>\n";
                $salida_xml.="\t\t<Nombre>" . $fila['Nombre']. "</Nombre>\n";
                $salida_xml.="\t\t<ApellidoS>" . $fila['Apellidos']. "</Apellido>\n";
                $salida_xml.="\t\t<Sexo>" . $fila['Sexo']. "</Sexo>\n";
                $salida_xml.="\t\t<Edad>" . $fila['Edad']. "</Edad>\n";
                $salida_xml.="\t\t<Peso>" . $fila['Peso']. "</Peso>\n";
                $salida_xml.="\t\t<Direccion>" . $fila['Direccion']. "</Direccion>\n";
                $salida_xml.="\t\t<Email>" . $fila['Email']. "</Email>\n";
                $salida_xml.="\t\t<Telefono>" . $fila['Telefono']. "</Telefono>\n";
                $salida_xml.="\t\t<Fecha>" . $fila['Fecha']. "</Fecha>\n";             
                $salida_xml.="\t</Paciente>\n";
            }

            for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                echo $x;
                $fila = $resultado->fetch_assoc(); //Recupera una fila de resultados como un array aociativo            
                $salida_xml.="\t<Medico >\n";
                $salida_xml.="\t\t<Cedula>".$fila['CEDULA']."</Cedula>\n";
                $salida_xml.="\t\t<Nombre>".$fila['Nombre']."</Nombre>\n";
                $salida_xml.="\t\t<Apellidos>".$fila['Apellidos']."</Apellido>\n";
                $salida_xml.="\t\t<Cedula_ Especialidad>".$fila['CEDULA_ESP']."</Cedula_Especialidad>\n";
                $salida_xml.="\t\t<Especialidad>".$fila['Especialidad']."</Especialidad>\n";			
                $salida_xml.="\t\t<Direccion>".$fila['Direccionn']."</Direccion>\n";
                $salida_xml.="\t\t<Telefono>".$fila['Telefono']."</Telefono>\n";
                $salida_xml.="\t\t<Email>".$fila['Email']."</Email>\n";
                $salida_xml.="\t</Medico>\n";
	        }



            for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                $fila = $resultado->fetch_assoc(); //Recupera una fila de resultados como un array aociativo
                echo $x;
                $salida_xml.="\t<Cliente>\n";
                $salida_xml.="\t\t<RFC>".$fila['RFC']."</RFC>\n";
                $salida_xml.="\t\t<Razon Social>".$fila['Razon Social']."</Razon Social>\n";
                $salida_xml.="\t\t<Tipo_Persona>".$fila['Tipo_Persona']."</Tipo_Persona>\n";
                $salida_xml.="\t\t<Direccion_Fiscal>".$fila['Direccion_Fiscal']."</Direccion_Fiscal>\n";
                $salida_xml.="\t\t<Calle>".$fila['Calle']."</Calle>\n";
                $salida_xml.="\t\t<Ext>".$fila['Num_Exterior']."</Ext>\n";
                $salida_xml.="\t\t<Inter>".$fila['Num_INTEGERerior']."</Inter>\n";
                $salida_xml.="\t\t<Comunidad>".$fila['Comunidad']."</Comunidad>\n";
                $salida_xml.="\t\t<Estado>".$fila['Estado']."</Estado>\n";
                $salida_xml.="\t\t<Cod_pos>".$fila['Codigo_Postal']."</Cod_pos>\n";
                $salida_xml.="\t\t<Pais>".$fila['Pais']."</Pais>\n";
                $salida_xml.="\t</Cliente>\n";
             }




        for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                $fila = $resultado->fetch_assoc(); //Recupera una fila de resultados como un array aociativo
                echo $x;
                $salida_xml.="\t<Servicio >\n";
                $salida_xml.="\t\t<Cirugia>".$fila['Cirujia']."</Cirugia>\n";
                $salida_xml.="\t\t<Curacion>".$fila['Curacion']."</Curacion>\n";
                $salida_xml.="\t\t<Tratamiento>".$fila['Tratamiento']."</Tratamiento>\n";
                $salida_xml.="\t\t<Procedimiento>".$fila['Procedimiento']."</Procedimiento>\n";
                $salida_xml.="\t\t<Costo>".$fila['Costo']."</Costo>\n";
                $salida_xml.="\t\tId_Servicio>".$fila['Id_Servicio']."</Id_Servicio>\n";        
                $salida_xml.="\t</Servicio>\n";
            }


        for ($x=0; $x< mysqli_num_rows($resultado); $x++){
                $fila = $resultado->fetch_assoc(); //Recupera una fila de resultados como un array aociativo
                echo $x;
                $salida_xml.="\t<Habitacion >\n";
                $salida_xml.="\t\t<Dias_Uso>".$fila['Dias_Uso']."</Dias_Uso>\n";
                $salida_xml.="\t\t<Costo_Habitacion>".$fila['Costo_Habitacion']."</Costo_Habitacion>\n";
                $salida_xml.="\t\t<IdServicio>".$fila['IdServicio']."</IdServicio>\n";
                $salida_xml.="\t</Habitacion>\n";
	        }




$salida_xml .= "</Hospital>";
echo $salida_xml;

?>