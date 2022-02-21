<?php

//Quien lo va a recibir
$Correo = $_POST['Email'];

//De quien lo van a recibir
$from = 'gustavo.soader.cx@gmail.com';
$fromName = 'GustavoCalzada';

//Asunto del correo
$subject = 'Correo electrónico con XML';

//Ruta del archivo
$file = "pdf.php";

//Contenido del Email
$htmlContent ='<h1>Correo electrónico con XML</h1>';

//Encabezado para informacion del remitente
$headers = "De: $fromName"." <".$from.">";

//Limite email
$semi_rand = md5(time());
$semi_boundary = "==Multipart_Boundary_x{$semi_rand}x";

//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 


//Preparacion del archivo
    if(!empty($file) > 0){
        if(is_file($file)){
            $message .= "--{$mine_boundary}\n";
            $fp = @fopen($file,"rb");
            $data = @fread($fp,filesize($file));
            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
            "Content-Description: ".basename($files[$i])."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
    }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $from;
    
    //Enviar EMail
    $mail = @mail($Correo, $subject, $message, $headers, $returnpath); 
    
    //Estado de envío de correo electrónico
    echo $mail?"<h1>Correo enviado.</h1>":"<h1>El envío de correo falló.</h1>";

?>