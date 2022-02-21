<?php

require_once __DIR__. '/vendor/autoload.php';
$pdf = new \mpdf-development\src\Writer\Mpdf();

$pdf = WriteHTML("Hola");

$pdf->Output();
   
?>






















































