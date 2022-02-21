<?php
include("conexion.php");
    $sql = mysqli_query($con, "SELECT * FROM  factura");
    $cadena = "<?xml version=\"1.0\"?>";
    $cadena."<facturas>\n";
    while($row = mysqli_fetch_assoc($sql)){
        $cadena."<factura>\n";
                $cadena."\t<id_orden_pago>".$row['id_orden_pago']."</id_orden_pago>\n";
                $cadena."\t<id_cliente>".$row['id_cliente']."</id_cliente>\n";
                $cadena."\t<iva>".$row['iva']."</iva>\n";
                $cadena."\t<importe>".$row['importe']."</importe>\n";
        $cadena."</factura>";
    }
    $cadena."</facturas>";
    
    echo $cadena;
    
?>