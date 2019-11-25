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
      "mercado1" => array("assets/img/Empresas/mercado/image1.jpg","Es una empresa que fue fundada en el año de 1970 en Monterrey, Nuevo León, consolidada como una de las empresas líder en el sector minorista, enfocada a satisfacer las diversas necesidades de consumo, financiamiento y ahorro de las familias.","http://google.com", "Empresa"),
      "mercado2" => array("assets/img/Empresas/mercado/image2.jpg","Es una empresa mexicana que opera tiendas departamentales de lujo y restaurantes Gourmet, ambos enfocados al consumidor de ingreso medio y alto, y que tiene su sede en la Ciudad de México Su negocio principal es operar en México las tiendas departamentales Liverpool y Suburbia. Además, también ofrece crédito a través de sus tarjetas Liverpool y recibe ingresos por arrendamiento de espacio en centros comerciales. Es la segunda empresa con mayores ventas en el sector de tiendas departamentales en México.","http://google.com", "Empresa"),
      "mercado3" => array("assets/img/Empresas/mercado/image3.jpg","Es la cadena tipo club de precios más grande en el mundo basada en venta mayorista. Es la segunda cadena más grande del mundo en la categoría de comercio después de Walmart y trasladando al tercer lugar a la francesa Carrefour; también es la quinta distribuidora minorista en Estados Unidos. ","http://google.com", "Empresa"),
      "mercado4" => array("assets/img/Empresas/mercado/image4.jpg","Es una cadena estadounidense de tiendas de venta al por mayor, que opera mediante clientes miembros de su club de precios. Es operada por Walmart con presencia en diversos países, tales como Estados Unidos, Canadá, México, Brasil y China. Es una tienda de autoservicio en forma de club y de almacén con ventas del mayoreo y medio mayoreo mediante sistemas de membresías.","http://google.com", "Empresa"),
      "mercado5" => array("assets/img/Empresas/mercado/image5.jpg","Es una empresa multinacional suiza de alimentos y bebidas con sede en Vevey, Vaud, Suiza. Ha sido la empresa de alimentos más grande del mundo, medida por los ingresos y otras métricas, para 2014, 2015 y 2016. Se clasificó en el número 72 de la lista Fortune Global 500 en 2014 y en la edición 2016 de Forbes Global 2000 de las empresas públicas más grandes. ","http://google.com", "Empresa"),                 
      "factureras1" =>array("assets/img/Empresas/factureras/em/image1.jpg","Es una marca mexicana que se dedica a ensamblar y comercializar motocicletas en México, Guatemala, Honduras, Panamá, Perú y Costa Rica. Cuenta con amplia gama de modelos para satisfacer todos los gustos y necesidades, dentro de los que figuran: de trabajo, motonetas, deportivas, doble propósito, cuatrimotos, crucero (chopper), eléctricas, adventure e infantiles. Comercializa sus productos por medio de una red de distribución propia y de concesionarios. Sólo en México suma poco más de 3,500 puntos de venta a lo largo de todo el país. ", "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13554.431622418975!2d-99.07695229381177!3d19.43344534362108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d07ef561bad244!2sAeropuerto%20Internacional%20de%20la%20Ciudad%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1573708481778!5m2!1ses-419!2smx", "Empresa"),
      "factureras2" =>array("assets/img/Empresas/factureras/em/image2.jpg","Es una compañía estadounidense que fabrica automóviles, camiones y motores, fundada en 1908 con el nombre de General Motors Corporation y reestructurada a partir del año 2009 bajo su actual denominación.","http://google.com", "Empresa"),
      "factureras3" =>array("assets/img/Empresas/factureras/em/image3.jpg","Es un fabricante de automóviles alemán con sede en Wolfsburgo, Baja Sajonia (Alemania). Volkswagen es la marca original y más vendida del Grupo Volkswagen, el mayor fabricante de automóviles alemán y el segundo mayor fabricante de automóviles del mundo. También es propietaria de las marcas Audi, Bentley, Bugatti, Ducati, Lamborghini, Porsche, SEAT y Skoda, así como el fabricante de camiones Scania y MAN .","http://google.com", "Empresa"),
      "factureras4" =>array("assets/img/Empresas/factureras/em/image4.jpg","Es una empresa multinacional de origen estadounidense, especializada en la industria metalmecánica. Con su sede central ubicada en Dearborn, Estado de Michigan, la empresa se expandió a nivel mundial destacándose principalmente en el rubro de producción de automóviles. La compañía tiene presencia a nivel mundial, gracias a sus filiales ubicadas en Alemania, Argentina, Brasil, Canadá, Chile, España, India, México, Tailandia y Venezuela, entre otros.","http://google.com", "Empresa"),
      "factureras5" =>array("assets/img/Empresas/factureras/em/image5.png","Es una empresa de origen japonés que fabrica automóviles, propulsores para vehículos terrestres, acuáticos y aéreos, motocicletas, robots y componentes para la industria automotriz.","http://google.com", "Empresa"),
      "servicios1" =>array("assets/img/Empresas/servicios/image1.jpg","Es el banco central de México.  proveen a la economía del país de moneda nacional (el peso mexicano); instrumentar la política monetaria con el objetivo prioritario de procurar la estabilidad del poder adquisitivo de la moneda nacional; promover el sano desarrollo del sistema financiero; y propiciar el buen funcionamiento de los sistemas de pago.","http://google.com", "Empresa"),
      "servicios2" =>array("assets/img/Empresas/servicios/image2.jpg","Es una institución financiera de banca múltiple mexicana, fundada en el año 1932 como Banco de Comercio (Bancomer). Desde el año 2000, Bancomer es adquirido por BBVA. Es una filial total de la empresa española Banco Bilbao Vizcaya Argentaria (BBVA).","http://google.com", "Empresa"),
      "servicios3" =>array("assets/img/Empresas/servicios/image3.jpg","Banco Santander, S.A., que opera como Grupo Santander, es una empresa multinacional española de servicios bancarios y financieros con sede en Madrid y Santander en España. Además, Santander mantiene una presencia en todos los centros financieros mundiales como la 16a institución bancaria más grande del mundo.","http://google.com", "Empresa"),
      "servicios4" =>array("assets/img/Empresas/servicios/image4.jpg","El Metro de la Ciudad de México es un sistema de transporte público tipo tren metropolitano que sirve a extensas áreas de la Ciudad de México. Su operación y explotación está a cargo del organismo público descentralizado denominado Sistema de Transporte Colectivo (STC), y su construcción, a cargo de la Secretaría de Obras y Servicios del Distrito Federal. Hasta el 12 de agosto de 2013 su construcción fue gestionada por el denominado Proyecto Metro del Distrito Federal, un organismo desconcentrado de la citada secretaría. Se conoce coloquialmente como Metro, por la contracción del término tren metropolitano. ","http://google.com", "Empresa"),
      "servicios5" =>array("assets/img/Empresas/servicios/image5.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "tecnologia1" =>array("assets/img/Empresas/tecnologia/image1.jpg","International Business Machines Corporation (IBM) es una reconocida empresa multinacional estadounidense de tecnología y consultoría con sede en Armonk, Nueva York. IBM fabrica y comercializa hardware y software para computadoras, y ofrece servicios de infraestructura, alojamiento de Internet, y consultoría en una amplia gama de áreas relacionadas con la informática, desde computadoras centrales hasta nanotecnología. ","http://google.com", "Empresa"),
      "tecnologia2" =>array("assets/img/Empresas/tecnologia/image2.jpg","Es una compañía principal subsidiaria de la multinacional estadounidense Alphabet Inc., cuya especialización son los productos y servicios relacionados con Internet, software, dispositivos electrónicos y otras tecnologías. El principal producto de Google es el motor de búsqueda de contenido en Internet, del mismo nombre, aunque ofrece también otros productos y servicios.","http://google.com", "Empresa"),
      "tecnologia3" =>array("assets/img/Empresas/tecnologia/image3.jpg","Desarrolla, manufactura, licencia y provee soporte de software para computadores personales, servidores, dispositivos electrónicos y servicios. Sus productos más conocidos son el sistema operativo Microsoft Windows, la suite ofimática Microsoft Office y los navegadores de Internet, Internet Explorer y Edge. En hardware sus productos bandera son las consolas de videojuegos Xbox y la línea de tabletas Microsoft Surface.","http://google.com", "Empresa"),
      "tecnologia4" =>array("assets/img/Empresas/tecnologia/image4.jpg","Es una compañía multinacional estadounidense establecida en Round Rock (Texas), la cual desarrolla, fabrica, vende y da soporte a computadoras personales, servidores, switches de red, programas informáticos, periféricos y otros productos relacionados con la tecnología.","http://google.com", "Empresa"),
      "tecnologia5" =>array("assets/img/Empresas/tecnologia/image5.jpg","Es una empresa multinacional dedicada a la prestación de servicios de consultoría, servicios tecnológicos y de outsourcing. Las cuatro líneas de trabajo llamadas por Accenture Workforces en todo el mundo, dan atención a los clientes en las áreas de consultoría, tecnología y subcontratación, así como a la propia empresa.","http://google.com", "Empresa"),
      "tecnologia6" =>array("assets/img/Empresas/tecnologia/image6.jpg","Es una empresa estadounidense especializada en herramientas de data warehousing y herramientas analíticas empresariales. Teradata está presente en más de 60 países y cuenta con más de 950 clientes y de 2.400 implementaciones","http://google.com", "Empresa")
          );

      $data = array();
      $data["imagen"] = $array1[$nombre_imagen][0];
      $data["desc"] = $array1[$nombre_imagen][1];
      $data["direccion"] = $array1[$nombre_imagen][2];
      $data["nombreP"]= $array1[$nombre_imagen][3];
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
