</div>
<main class="page gallery-page">
    <section class="clean-block clean-gallery dark">
    
        <div class="container">
            <div class="block-heading" style="padding-top: 140px;">

            <form action="" method="POST">
            
            <a href='<?=base_url()."crearPDF"?>' target="_blank">
         <input type="button" value="Descargar PDF" class="btn btn-success" >
            </a> 
     <?php
     if($_POST ){
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/HTMLpdf.php';

    $plantilla= getPlantilla($imagen,$descripcion,$email,$nombreP, $usuario,$direccion);
    $mpdf = new \Mpdf\Mpdf();
   
    //$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->WriteHTML($plantilla);
    
    $mpdf->Output();
     }
?>
<h1 align="center"><?php echo($nombreP); ?></h1>
            <div class="row">
                <div class="col-sm">
                    <br>
                    <img class="img-thumbnail img-fluid image" id="img1" src="<?php echo( "http://localhost/WorkEng/".$imagen)?>">
                    <br>
                    <p><?php echo($descripcion) ?></p>
                    <br> <div class="block-heading">
                <h4 class="text-info">Localidad</h4>
                <p> Av. Capitán Carlos León S/N, Peñón de los Baños, Venustiano Carranza, 15620 Ciudad de México, CDMX </p>
                <p> </p>
                <iframe src=<?php echo($direccion) ?> width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                </div>
            </div>
            <br>

            
                <div align="center" class="row">
                    <div class="col-md-4 col-lg-6 item">
                        <i id="iconoW" class="fab fa-whatsapp fa-5x green-text"></i> Número de WhatsApp:
                        <input id="whats" name="whats" type="tel">
                    </div>
                    <div class="col-md-4 col-lg-6 item">
                        <i id="iconoM" class="fas fa-envelope-square fa-5x red-text"></i> Mail:
                        <input id="mensaje" name="correo" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm" align="center">
                    
                <i class="fas fa-file-pdf fa-5x"></i><br> <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm" align="center" id="btnenv">
                        <button id="env" class="btn btn-primary" type="submit">Enviar y descargar PDF</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
</main>


<script>

  var simplemde = new SimpleMDE({
    element: document.getElementById("mensajePostal"),
    autosave: {
      enabled: true,
      uniqueId: "MyUniqueID",
      delay: 1000,
    }
  });

</script>

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

if($_POST  ){
    if($_POST["whats"]!=""){
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'omar1cruz2714721@gmail.com';                     // SMTP username
        $mail->Password   = 'skate752837';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('omar1cruz2714721@gmail.com', 'OmarCruz271');
        $mail->addAddress($_POST["correo"], 'Joe User');     // Add a recipient
        /*$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        // Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    */
     $imagenNuevo="";
    $r = str_split($imagen);
    for($i=0; $i<count($r); $i++) 
        if($r[$i]=="/"){
        $r[$i]="\ ";
        $r[$i]=trim($r[$i]);
        }
    foreach($r as $char){
        $imagenNuevo=$imagenNuevo.$char;
        
    }
         
    
    
        $mail->addAttachment(trim('C:\xampp\htdocs\WorkEng\ ').$imagenNuevo, 'WorkEng.png');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'INFORMACION DE LA EMPRESA A LA QUE SOLICITAS';
        $mail->Body    = '<b>Las caracteristicas de la empresa se preentan a continuacion</b>: <br>'.$descripcion;
      //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

$b64image="data:image/png;base64,".base64_encode(file_get_contents(base_url().$imagen));


$data = [

    'phone' => '52'.$_POST["whats"], // Receivers phone
    'body' =>  $b64image,
    'filename'=> "imagen",
    'caption'=>'Enviaste una solicitud de empleo a : '.$nombreP.', cualquier información, revisa el correo '.$_POST["correo"].", se ha enviado información de las vacantes!\n"."Ubicación fisica de la empresa:\n\n".$direccion
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://eu80.chat-api.com/instance83045/sendFile?token=b6ofx5edj5e91omi0';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json

    ]
]);
$result = file_get_contents($url, false, $options);
    }
}
?>
