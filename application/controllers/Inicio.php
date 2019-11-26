<?php
class Inicio extends CI_Controller {

    public function __construct(){
      parent::__construct();
    }
   public function index(){
    $dato = $this->session->userdata('login');
    $n = array('name' => $this->session->userdata('nombre'));
    $justName= explode(" ",$n["name"]);
    $n["name"] = $justName[0];
    if ($dato == 1 || $dato == 2) {
      if ($dato == 1) {
        $this->load->view('headers/headerActiveSesion',$n);
        $this->load->view('tipoInicios/inicioLoginUser');
      } else {
        $this->load->view('headers/headerAdmin');
        $this->load->view('tipoInicios/inicioLoginAdmin');
      }
    } else {
      $this->load->view('headers/header');
      $this->load->view('tipoInicios/inicio');
    }
      $this->load->view('footer/footer');
   }
   public function caracteristicas(){
    $dato = $this->session->userdata('login');
    $n = array('name' => $this->session->userdata('nombre'));
    $justName= explode(" ",$n["name"]);
    $n["name"] = $justName[0];
    if ($dato == 1 || $dato == 2) {
      if ($dato == 1) {
        $this->load->view('headers/headerActiveSesion',$n);
      } else $this->load->view('headers/headerAdmin');
    } else $this->load->view('headers/header');

     $this->load->view('features');
     $this->load->view('footer/footer');
   }
   public function about(){
    $dato = $this->session->userdata('login');
    $n = array('name' => $this->session->userdata('nombre'));
    $justName= explode(" ",$n["name"]);
    $n["name"] = $justName[0];
    if ($dato == 1 || $dato == 2) {
      if ($dato == 1) {
        $this->load->view('headers/headerActiveSesion',$n);
      } else $this->load->view('headers/headerAdmin');
    } else $this->load->view('headers/header');

    $this->load->view('about-us');
     $this->load->view('footer/footer');
   }
   public function registro(){
    $dato = $this->session->userdata('login');
    if (!($dato == 1 || $dato == 2)) {
      $this->load->view('headers/header');
      $this->load->view('registration');
      $this->load->view('footer/footer');
    } else header("Location: ". base_url()); # Si la sesion esta activa no puedes acceder al registro
  }
  public function registroEmpresa(){
    $dato = $this->session->userdata('login');
    if (!($dato == 1 || $dato == 2)) {
      $this->load->view('headers/header');
      $this->load->view('registroEmpresa');
      $this->load->view('footer/footer');
    } else header("Location: ". base_url()); # Si la sesion esta activa no puedes acceder al registro
  }
  public function login(){
    $dato = $this->session->userdata('login');
    if (!($dato == 1 || $dato == 2)) {
      $this->load->view('headers/header');
      $this->load->view('login');
      $this->load->view('footer/footer');
    } else header("Location: ". base_url()); # Si la sesión está activa no puedes acceder al login
   }
   public function contacto(){
    $dato = $this->session->userdata('login');
    $n = array('name' => $this->session->userdata('nombre'));
    $justName= explode(" ",$n["name"]);
    $n["name"] = $justName[0];
    if ($dato == 1 || $dato == 2) {
      if ($dato == 1) {
        $this->load->view('headers/headerActiveSesion',$n);
      } else $this->load->view('headers/headerAdmin');
    } else $this->load->view('headers/header');

    $this->load->view('contact-us');
     $this->load->view('footer/footer');
   }
   public function postales(){
    $dato = $this->session->userdata('login');
    $n = array('name' => $this->session->userdata('nombre'));
    $justName= explode(" ",$n["name"]);
    $n["name"] = $justName[0];
    if ($dato == 1 || $dato == 2) {
      if ($dato == 1) {
        $this->load->view('headers/headerActiveSesion',$n);
      } else $this->load->view('headers/headerAdmin');
    } else header("Location: ". base_url()."inicio"); # Si no estas logueado no puedes acceder al apartado postales

     $this->load->view('categoriaPostales');
     $this->load->view('footer/footer');
   }
   public function crearPDF(){
    require_once 'C:\xampp\htdocs\WorkEng\application\views\enviarPostales.php';
    $data= array();
    $data["imagen"]=$imagen;
    $data["desc"]=$desc;
    $data["nombreP"]=$nombreP;
    $data["usuario"]=$usuario;
    $data["direccion"]=$direccion;
   $this->load->view('crearMPDF',$data);
  }
   public function enviarPostales($nombre_imagen){
    $dato = $this->session->userdata('login');
    $n = array('name' => $this->session->userdata('nombre'));
    $justName= explode(" ",$n["name"]);
    $ncompleto=$n["name"];
    $n["name"] = $justName[0];
    if ($dato == 1 || $dato == 2) {
      if ($dato == 1) {
        $this->load->view('headers/headerActiveSesion',$n);
      } else $this->load->view('headers/headerAdmin');
    } else header("Location: ". base_url()."inicio"); # Si no estas logueado no puedes acceder al apartado postales

      
    $array1 = array(
      "mercado1" => array("assets/img/Empresas/mercado/image1.png","<br><br><br> <h4 class='text-info text-dark'> Es una empresa dedicada a la comercialización de muebles, artículos electrónicos y artículos de línea blanca. Fue fundada en 1970 en Monterrey, Nuevo León, actualmente en la CMDX tiene diversos sedes dentro de toda el área metropolitana.</h4> </br></br></br>", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30100.351054926086!2d-99.19678345553555!3d19.43210384748352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a5247b8aa8a847d!2sFAMSA%20San%20Cosme!5e0!3m2!1ses-419!2smx!4v1574714562861!5m2!1ses-419!2smx", "FAMSA"),
      "mercado2" => array("assets/img/Empresas/mercado/image2.jpg","<br><br><br> <h4 class='text-info text-dark'> Es una empresa mexicana que opera tiendas departamentales de lujo y restaurantes Gourmet, ambos enfocados al consumidor de ingreso medio y alto, teniendo sede en la Ciudad de México. Además, también ofrece crédito a través de sus tarjetas Liverpool y recibe ingresos por arrendamiento de espacio en centros comerciales. Es la segunda empresa con mayores ventas en el sector de tiendas departamentales en México.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5500.405490010754!2d-99.18331421216138!3d19.43049654446744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92952b51b73ed8c7!2sSitio%20Liverpool!5e0!3m2!1ses-419!2smx!4v1574741375810!5m2!1ses-419!2smx", "LIVERPOOL"),
      "mercado3" => array("assets/img/Empresas/mercado/image3.png","<br><br><br> <h4 class='text-info text-dark'> Es la cadena tipo club de precios más grande en el mundo basada en venta mayorista. Es la segunda cadena más grande del mundo en la categoría de comercio después de Walmart y trasladando al tercer lugar a la francesa Carrefour.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102835.85055634344!2d-99.23382562944396!3d19.433104955808826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4452a85319e9745!2sCOSTCO%20Mexico!5e0!3m2!1ses-419!2smx!4v1574715029072!5m2!1ses-419!2smx", "COSTCO"),
      "mercado4" => array("assets/img/Empresas/mercado/image4.jpg","<br><br><br> <h4 class='text-info text-dark'> Es una cadena Estadounidense de tiendas de venta al por mayor, que opera mediante clientes miembros de su club de precios. Es una tienda de autoservicio en forma de club y de almacén con ventas del mayoreo y medio mayoreo mediante sistemas de membresías.</h4> </br></br></br>", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120400.67656471148!2d-99.2338257503237!3d19.433085358772786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf37fe72da07e660b!2sSams%20Club%20Portal%20Centro!5e0!3m2!1ses-419!2smx!4v1574715129065!5m2!1ses-419!2smx", "SAM'S CLUB"),
      "mercado5" => array("assets/img/Empresas/mercado/image5.png","<br><br><br> <h4 class='text-info text-dark'> Es una empresa multinacional suiza de alimentos y bebidas con sede en Vevey, Vaud, Suiza; siendo la empresa de alimentos más grande del mundo. Se clasificó en el número 72 de la lista Fortune Global 500 en 2014 y en la edición 2016 de Forbes Global 2000 de las empresas públicas más grandes.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30098.808544703636!2d-99.20247167884243!3d19.440424913935665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7101c3f8dbc62c32!2zTmVzdGzDqSBNw6l4aWNv!5e0!3m2!1ses-419!2smx!4v1574715204431!5m2!1ses-419!2smx", "NESTLÉ"),                 
      "factureras1" =>array("assets/img/Empresas/factureras/em/image1.jpg","<br><br><br> <h4 class='text-info text-dark'> Es una marca mexicana que se dedica a ensamblar y comercializar motocicletas en México, Guatemala, Honduras, Panamá, Perú y Costa Rica. Cuenta con amplia gama de modelos para satisfacer todos los gustos y necesidades, dentro de los que figuran: de trabajo, motonetas, deportivas, doble propósito, cuatrimotos, crucero (chopper), eléctricas, adventure e infantiles. Comercializa sus productos por medio de una red de distribución propia y de concesionarios. Sólo en México suma poco más de 3,500 puntos de venta a lo largo de todo el país.</h4> </br></br></br>", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.543862115507!2d-99.1814625!3d19.4321047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9df977743fb%3A0xba432cbd857b2d0f!2sItalika%20Polanco%20Premium!5e0!3m2!1ses-419!2smx!4v1574714122057!5m2!1ses-419!2smx", "ITALIKA"),
      "factureras2" =>array("assets/img/Empresas/factureras/em/image2.jpg","<br><br><br> <h4 class='text-info text-dark'> Es una compañía estadounidense que fabrica automóviles, camiones y motores, fundada en 1908 con el nombre de General Motors Corporation y reestructurada a partir del año 2009 bajo su actual denominación.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14823.454371221836!2d-99.20186185430337!3d19.44021785143615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf99f4e58fd8fe2f5!2sGeneral%20Motors%20De%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1574715239402!5m2!1ses-419!2smx", "GENERAL MOTORS"),
      "factureras3" =>array("assets/img/Empresas/factureras/em/image3.jpg","<br><br><br> <h4 class='text-info text-dark'> Es un fabricante de automóviles alemán con sede en Wolfsburgo, Baja Sajonia (Alemania). Volkswagen es la marca original y más vendida del Grupo Volkswagen, el mayor fabricante de automóviles alemán y el segundo mayor fabricante de automóviles del mundo. En la CDMX tiene un alto nivel de calidad por sus automóviles así como también un alto grado de ventas.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30100.01531260145!2d-99.171488!3d19.4339153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c26c3576061a53f!2sDistribuidora%20Volkswagen%20Central%20S.A.%20de%20C.V.!5e0!3m2!1ses-419!2smx!4v1574715290733!5m2!1ses-419!2smx", "VOLKSWAGEN"),
      "factureras4" =>array("assets/img/Empresas/factureras/em/image4.jpg","<br><br><br> <h4 class='text-info text-dark'> Es una empresa de origen estadounidense, especializada en la industria metalmecánica. Con su sede central ubicada en Dearborn, Estado de Michigan, Es destacada principalmente por su producción de automóviles, teniendo presencia a nivel mundial.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4045084311138!2d-99.1757037853717!3d19.438118986881197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8b14d01ec09%3A0xc92fab8e3c23dd46!2sFord%20Surman%20Marina!5e0!3m2!1ses-419!2smx!4v1574715389945!5m2!1ses-419!2smx", "FORD"),
      "factureras5" =>array("assets/img/Empresas/factureras/em/image5.png","<br><br><br> <h4 class='text-info text-dark'> Es una empresa de origen japonés que fabrica automóviles, propulsores para vehículos terrestres, acuáticos y aéreos, motocicletas, robots y componentes para la industria automotriz.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15049.618054397564!2d-99.1822698753874!3d19.43811876385961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf10d83f7910b672f!2sHonda%20Monza%20Motos%20-%20Servicio%20y%20Refacciones!5e0!3m2!1ses-419!2smx!4v1574715411465!5m2!1ses-419!2smx", "HONDA"),
      "servicios1" =>array("assets/img/Empresas/servicios/image1.jpg","<br><br><br><h4 class='text-info text-dark'> El banco central de México; proveen a la economía del país de moneda nacional (el peso mexicano). Instrumenta la política monetaria con el objetivo prioritario de procurar la estabilidad del poder adquisitivo de la moneda nacional. Promueve el sano desarrollo del sistema financiero; y propiciONA el buen funcionamiento de los sistemas de pago.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5691.857964190505!2d-99.14030681082384!3d19.433877546235294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fed35b0bd0a9%3A0xf77f6b0bac2b3afb!2sBanco%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1574744228864!5m2!1ses-419!2smx", "BANCO DE MÉXICO"),
      "servicios2" =>array("assets/img/Empresas/servicios/image2.jpg","<br><br><br><h4 class='text-info text-dark'> Es una institución financiera de banca múltiple mexicana, fundada en el año 1932 como Banco de Comercio (Bancomer). Desde el año 2000, Bancomer es adquirido por BBVA. Es una filial total de la empresa española Banco Bilbao Vizcaya Argentaria (BBVA).</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4344.805992197118!2d-99.17498706382445!3d19.42271619691088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff4ee12613b3%3A0x5ed1dd62aff285e6!2sTorre%20BBVA%20Bancomer%2C%20Ju%C3%A1rez%2C%2006600%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1574744579817!5m2!1ses-419!2smx", "BBVA BANCOMER"),
      "servicios3" =>array("assets/img/Empresas/servicios/image3.png","<br><br><br><h4 class='text-info text-dark'> Banco Santander, S.A., opera como Grupo Santander, es una empresa multinacional española de servicios bancarios y financieros. Además, Santander mantiene una presencia en todos los centros financieros mundiales.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14006.360705102188!2d-99.15820753642079!3d19.43282537777607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10167870ac395b88!2sSantander%20Reforma%20Col%C3%B3n!5e0!3m2!1ses-419!2smx!4v1574744898289!5m2!1ses-419!2smx", "SANTANDER"),
      "servicios4" =>array("assets/img/Empresas/servicios/image4.jpg","<br><br><br><h4 class='text-info text-dark'> El Metro de la Ciudad de México es un sistema de transporte público tipo tren metropolitano que sirve a extensas áreas de la Ciudad de México. Su operación y explotación está a cargo del organismo público descentralizado denominado Sistema de Transporte Colectivo (STC), y su construcción, a cargo de la Secretaría de Obras y Servicios del Distrito Federal.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13092.90553330914!2d-99.14760338057665!3d19.43332099716057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd97da0d9d79cc8e9!2sSTC%20Metro%20CDMX!5e0!3m2!1ses-419!2smx!4v1574745174714!5m2!1ses-419!2smx", "STC METRO CMDX"),
      "servicios5" =>array("assets/img/Empresas/servicios/image5.jpg","<br><br><br><h4 class='text-info text-dark'> CITIBANAMEX es un grupo financiero Mexicano que contribuye al desarrollo Mexicano realizando proyectos y programas enfocados al bienestar social; reuniendo y canalizando recursos.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60200.948010574975!2d-99.13633039635282!3d19.43144044474842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd98bc2e2a3e09ae6!2sBanco%20Citibanamex%20Oficina%20Central!5e0!3m2!1ses-419!2smx!4v1574749649488!5m2!1ses-419!2smx", "CITIBANAMEX"),
      "tecnologia1" =>array("assets/img/Empresas/tecnologia/image1.jpg","<br><br><br> <h4 class='text-info text-dark'> International Business Machines Corporation (IBM) es una empresa reconocida empresa multinacional estadounidense de tecnología y consultoría con sede en Armonk, Nueva York. IBM fabrica y comercializa hardware y software para computadoras, y ofrece servicios de infraestructura, alojamiento de Internet, y consultoría en una amplia gama de áreas relacionadas con la informática, desde computadoras centrales hasta nanotecnología.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14616.620280996678!2d-99.2162642109666!3d19.44106550517723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4629a7164870b488!2sIBM%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1574747689258!5m2!1ses-419!2smx", "IBM"),
      "tecnologia2" =>array("assets/img/Empresas/tecnologia/image2.png","<br><br><br> <h4 class='text-info text-dark'> Google es una compañía principal subsidiaria de la multinacional estadounidense Alphabet Inc., cuya especialización son los productos y servicios relacionados con Internet, software, dispositivos electrónicos y otras tecnologías. El principal producto de Google es el motor de búsqueda de contenido en Internet, del mismo nombre, aunque ofrece también otros productos y servicios.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15050.499304321016!2d-99.20643779999999!3d19.428609599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca7e9b8e9149aac2!2sGoogle!5e0!3m2!1ses-419!2smx!4v1574747824168!5m2!1ses-419!2smx", "GOOGLE"),
      "tecnologia3" =>array("assets/img/Empresas/tecnologia/image3.jpg","<br><br><br> <h4 class='text-info text-dark'> Microsoft desarrolla, manufactura, licencia y provee soporte de software para computadores personales, servidores, dispositivos electrónicos y servicios. Sus productos más conocidos son el sistema operativo Microsoft Windows, sus navegadores de Internet, Internet Explorer y Edge. En hardware sus productos bandera son las consolas de videojuegos Xbox y la línea de tabletas Microsoft Surface.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.0607167319426!2d-99.26643088537286!3d19.36652348692189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201196dca8199%3A0xffe7560012c3a23b!2sCorporativo%20Microsoft%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1574748099752!5m2!1ses-419!2smx", "MICROSOFT"),
      "tecnologia4" =>array("assets/img/Empresas/tecnologia/image4.jpg","<br><br><br> <h4 class='text-info text-dark'> DELL es una compañía multinacional estadounidense establecida en Round Rock (Texas), la cual desarrolla, fabrica, vende y da soporte a computadoras personales, servidores, switches de red, programas informáticos, periféricos y otros productos relacionados con la tecnología.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2614.36706508217!2d-99.23894436778158!3d19.393895428926676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2013d172fa2ed%3A0x7bcdb39e8315ad0c!2sDell!5e0!3m2!1ses-419!2smx!4v1574748282406!5m2!1ses-419!2smx", "DELL"),
      "tecnologia5" =>array("assets/img/Empresas/tecnologia/image5.jpg","<br><br><br> <h4 class='text-info text-dark'> ACCENTURE es una empresa multinacional dedicada a la prestación de servicios de consultoría, servicios tecnológicos y de outsourcing. Las cuatro líneas de trabajo llamadas por Accenture Workforces en todo el mundo, dan atención a los clientes en las áreas de consultoría, tecnología y subcontratación, así como a la propia empresa.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240869.44985098444!2d-99.25200960000001!3d19.387107399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x562101cc8d38fcec!2sAccenture%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1574748517703!5m2!1ses-419!2smx", "ACCENTURE"),
      "tecnologia6" =>array("assets/img/Empresas/tecnologia/image6.png","<br><br><br> <h4 class='text-info text-dark'> TERADATA. es una empresa estadounidense especializada en herramientas de data warehousing y herramientas analíticas empresariales. Teradata está presente en más de 60 países.</h4> </br></br></br>","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5262548681117!2d-99.18163249999999!3d19.4328647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8ad1c4f905d%3A0xd1948f5d3a6c5913!2sTeradata%20MEXICO!5e0!3m2!1ses-419!2smx!4v1574748624884!5m2!1ses-419!2smx", "TERADATA.")
          );

      $data = array();
      $data["imagen"] = $array1[$nombre_imagen][0];
      $data["desc"] = $array1[$nombre_imagen][1];
      $data["direccion"] = $array1[$nombre_imagen][2];
      $data["nombreP"]= $array1[$nombre_imagen][3];
      $data["usuario"]= $this->session->userdata('nombre');
      $data["email"]= $this->session->userdata('priv');
      
    $this->load->view('enviarPostales',$data);
    $this->load->view('footer/footer');
  }
  public function queEres(){
    $dato = $this->session->userdata('login');
    if (!($dato == 1 || $dato == 2)) {
      $this->load->view('headers/header'); 
      $this->load->view('queEres');

    } else header("Location: ". base_url()); # Si la sesion esta activa no puedes acceder al registro
  
  
  }
  public function cerrarSesion() {
    $this->session->sess_destroy();
    $this->index(); 
  }
}
?>
