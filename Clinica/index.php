<?php
require("Conexion.php");
header("Content-type: text / xml");
$query = "SELECT * FROM Orden_pago ORDER BY Folio_orden ASC";
$resultado = $Conexion->query($query);
$salida_xml = "<?xml version=\"1.0\"?>";
$salida_xml .="<Clinica>\n";
for($x= 0;$x< mysqli_num_rows($resultado); $x++){
    echo $x;
    $fila = $resultado->fetch_assoc();
    $salida_xml.="\t<Orden_pago>\n";
    $salida_xml.="\t\t<Folio_orden>" . $fila['Folio_orden']."<Folio_orden>\n";
    $salida_xml.="\t\t<Fecha>" . $fila['Fecha']."<Fecha>\n";
    $salida_xml.="\t\t<id_Cliente_Paciente>" . $fila['id_Cliente_Paciente']."<id_Cliente_Paciente>\n";
    $salida_xml.="\t\t<id_Medico>" . $fila['id_Medico']."<id_Medico>\n";
    $salida_xml.="\t\t<id_habitacion>" . $fila['id_habitacion']."<id_habitacion>\n";
    $salida_xml.="\t\t<id_servicio>" . $fila['id_servicio']."<id_servicio>\n";
    $salida_xml.="\t\t<forma_pago>" . $fila['forma_pago']."<forma_pago>\n";
    $salida_xml.="\t\t<id_orden_pago_subtotal>" . $fila['id_orden_pago_subtotal']."<id_orden_pago_subtotal>\n";
    $salida_xml.="\t\t<Promocion>" . $fila['Promocion']."<Promocion>\n";
    $salida_xml.="\t\t<iva>" . $fila['iva']."<iva>\n";
    $salida_xml.="\t\t<total>" . $fila['total']."<total>\n";
    $salida_xml.="\t<Orden_pago>\n";
}
$salida_xml .= "<Clinica>";
echo $salida_xml;
?>