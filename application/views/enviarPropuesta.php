</div>
<main class="page landing-page">
    
    <section class="clean-block clean-hero" style="background-image:url(&quot;<?=base_url().$imagen;?>&quot;);color:rgba(0,0,0,.6);">
        <div class="text">
            <br>
                <i><h1>¡<?php echo($nombreP);?>!</h1></i>
            </br>
            <p>Encuentra las ofertas y su ubicacion</p>
            <form action="POST"><button class="btn btn-outline-light btn-lg" type="button"   onclick="mylinkfunction()">Obten info.</button></div>
            </form>
        </section>
    
    <form action="" method="POST">
    <section class="clean-block clean-info dark">
        <div id="infoEmp" class="container">
            <div class="block-heading">
                <h2 class="text-info">Información.</h2>
                <p><?php echo($descripcion)?> </p>
            </div>
            <div class="row align-items-center">
                
                <div class="col-md-6"> <iframe src=<?php echo($direccion) ?> width="400" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                <div class="col-md-6">
                    <h3 align="center" class="text-info">¡Obten Información!</h3>
                    <div class="getting-started-info">
                        <p>Proporciona un número de whatsApp y correo para enviar la información</p>
                        <div align="center" class="row">
                    <div class="col-md-4 col-lg-6 item">
                        <i id="iconoW" class="fab fa-whatsapp fa-5x green-text"></i> WhatsApp:
                        <input id="whats" name="whats" type="tel">
                    </div>
                    <div class="col-md-4 col-lg-6 item">
                        <i id="iconoM" class="fas fa-envelope-square fa-5x red-text"></i> Mail:
                        <input id="mensaje" name="correo" type="text">
                    </div>
                </div><br>
                <div class="form-group form-check">
                    ¿Generar un PDF con la informacion?<br>
                        <input class="form-check-input" type="radio" id="gender" name="pdf" value="si" checked>
                        <label class="form-check-label" for="gender">
                            Sí
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="radio" id="gender2" name="pdf" value="no">
                        <label class="form-check-label" for="gender2">
                            No
                        </label>
                    </div>
                    </div><p align="center"><button  class="btn btn-outline-primary btn-lg" type="submit">Aceptar</button></div></p>
            </div>
        </div>
    </section>
    </form>

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    if($_POST  ){
    if($_POST["pdf"]=="si" ){
        require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/HTMLpdf.php';

    date_default_timezone_set('America/Mexico_City');

    $plantilla= getPlantilla(date('l jS \of F Y'), $imagen,$descripcion,$email,$nombreP, $usuario,$direccion);
    $mpdf = new \Mpdf\Mpdf();
   
    //$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->WriteHTML($plantilla);
    
    $mpdf->Output();
         }else{

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
//echo($imagen);

$data = [

    'phone' => '52'.$_POST["whats"], // Receivers phone
    'body' =>  $b64image,
    'filename'=> "imagen",
    'caption'=>'Enviaste una solicitud de empleo a : '.$nombreP.', cualquier información, revisa el correo '.$_POST["correo"].", se ha enviado información de las vacantes!\n"."Ubicación fisica de la empresa:\n\n".$direccion
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://eu87.chat-api.com/instance82724/sendFile?token=bm0ikbs6mkg1cxgs';
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
         }

?>


 <script type-"text/javascript">

function mylinkfunction(e) {

window.location.href="#infoEmp";

/* need to stop the form sending of the form

 UPDATE as comment: This may not be exactly correct syntax 
 for stopping a form , look up preventing form submission */

e.preventDefault();
e.stopPropagation(); 

}


</script>


    