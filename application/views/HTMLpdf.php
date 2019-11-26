<?php
function getPlantilla($imagen,$desc,$email,$nombreP, $usuario,$direccion){
    $plantilla='   <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <title>Example 1</title>
        <link rel="stylesheet" href="'.__DIR__ . '/estiloPDF.css'.'" media="all" />
      </head>
      <body>
        <header class="clearfix">
          <div id="logo">
          <h1>WorkEng</h1>
            <img src="C:/xampp/htdocs/WorkEng/'.$imagen.'">
          </div>
          
          <div id="company" class="clearfix">
            <div>WorkEng</div>
            <div>ESCOM,<br /> IPN, CDMX US</div>
            <div>Tel: 55-77862650</div>
            <div><a href="'.$direccion.'">Dirección fisica</a></div>
          </div>
          <div id="project">
            <div><span>PROJECT</span>'.$usuario.'</div>
            <div><span>Empresa</span>'.$nombreP.'</div>
            <div><span>EMAIL referido</span> <a href="mailto:'.$email.'">'.$email.'</a></div>
            <div><span>FECHA</span> August 17, 2015</div>
          </div>
        </header>
        <main>
          <table>
            <thead>
              <tr>
                <th class="service">Usuario</th>
                <th class="desc">Mensaje</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="service">Design</td>
                <td class="desc">'.$desc.'
                             </tr>
            </tbody>
          </table>
          <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">WorkEng</div>
          </div>
        </main>
        <footer>
        WorkEng no se hace responsable de los mensajes que aqí se transmiten
        </footer>
      </body>
    </html>
';
     return( $plantilla);
}

/*

    <body>
       <header class="clearfix">
       <h1>WorkEng </h1>
         <div id="logo">
           <img src="image3.png">
         </div>
      
         <div id="company" class="clearfix">
           <div align="right">Tienes esta postal con cariño de Omar</div>
           <div align="right"> Tel: 5577862650</div>
           <div align="right">Mail del remitente: <a href="mailto:company@example.com">Omar1Cruz2714721@gmail.com</a></div>
         </div>
         <br><br><br>
         <div id="project">
           <div> WorkEng</div>
           <div>Comunicate con nosotros</div>
           <br>
           <div><span>ADDRESS</span> ESCOM, IPN</div>
           <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
           <div><span>Fecha de envio:</span> August 17, 2015</div>
           
         </div>
       </header>
       <main>
         <table>
           <thead>
             <tr>
               <th class="service">Usuario</th>
               <th class="desc">Mensaje</th>
               <th>Categoria</th>

             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="service">Omar</td>
               <td class="desc">Hola esta es mi postal</td>
               <td class="total">Amor</td>
             </tr>
                       </tbody>
         </table>
         
       </main>
       <footer>
    <br><br><br><br><br><br><br><br><br><br>
       </footer>
     </body>
*/
?>
