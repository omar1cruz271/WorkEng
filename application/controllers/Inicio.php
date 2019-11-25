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
      "mercado1" => array("assets/img/Empresas/mercado/image1.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "mercado2" => array("assets/img/Empresas/mercado/image2.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "mercado3" => array("assets/img/Empresas/mercado/image3.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "mercado4" => array("assets/img/Empresas/mercado/image4.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "mercado5" => array("assets/img/Empresas/mercado/image5.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),                 
      "factureras1" =>array("assets/img/Empresas/factureras/em/image1.jpg","Esta es una descripcion breve de la empresa", "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13554.431622418975!2d-99.07695229381177!3d19.43344534362108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d07ef561bad244!2sAeropuerto%20Internacional%20de%20la%20Ciudad%20de%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1573708481778!5m2!1ses-419!2smx", "Empresa"),
      "factureras2" =>array("assets/img/Empresas/factureras/em/image2.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "factureras3" =>array("assets/img/Empresas/factureras/em/image3.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "factureras4" =>array("assets/img/Empresas/factureras/em/image4.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "factureras5" =>array("assets/img/Empresas/factureras/em/image5.png","Esta es una descripcion breve","http://google.com", "Empresa"),
      "servicios1" =>array("assets/img/Empresas/servicios/image1.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "servicios2" =>array("assets/img/Empresas/servicios/image2.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "servicios3" =>array("assets/img/Empresas/servicios/image3.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "servicios4" =>array("assets/img/Empresas/servicios/image4.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "servicios5" =>array("assets/img/Empresas/servicios/image5.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "tecnologia1" =>array("assets/img/Empresas/tecnologia/image1.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "tecnologia2" =>array("assets/img/Empresas/tecnologia/image2.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "tecnologia3" =>array("assets/img/Empresas/tecnologia/image3.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "tecnologia4" =>array("assets/img/Empresas/tecnologia/image4.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "tecnologia5" =>array("assets/img/Empresas/tecnologia/image5.jpg","Esta es una descripcion breve","http://google.com", "Empresa"),
      "tecnologia6" =>array("assets/img/Empresas/tecnologia/image6.jpg","Esta es una descripcion breve","http://google.com", "Empresa")
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
