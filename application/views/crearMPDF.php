<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/HTMLpdf.php';
    
echo($imagen);
    $plantilla= getPlantilla("assets/img/Empresas/mercado/image1.png","hola","hola.gmail","holaP", "Omar ","vivo aqui");
    $mpdf = new \Mpdf\Mpdf();
   
    //$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->WriteHTML($plantilla);
    
    $mpdf->Output();
?>