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
    $n["name"] = $justName[0];
    print_r("Hola este es el nombre ");
    if ($dato == 1 || $dato == 2) {
      if ($dato == 1) {
        $this->load->view('headers/headerActiveSesion',$n);
      } else $this->load->view('headers/headerAdmin');
    } else header("Location: ". base_url()."inicio"); # Si no estas logueado no puedes acceder al apartado postales

      print_r($nombre_imagen);
      $array_urls = array(
        "mercado1" => "assets/img/postales/mercado/image1.jpg",
        "mercado2" => "assets/img/postales/mercado/image2.jpg",
        "mercado3" => "assets/img/postales/mercado/image3.jpg",
        "mercado4" => "assets/img/postales/mercado/image4.jpg",
        "mercado5" => "assets/img/postales/mercado/image5.jpg",                 
        "factureras1" =>"assets/img/postales/factureras/em/image1.jpg",
        "factureras2" =>"assets/img/postales/factureras/em/image2.jpg",
        "factureras3" =>"assets/img/postales/factureras/em/image3.jpg",
        "factureras4" =>"assets/img/postales/factureras/em/image4.jpg",
        "factureras5" =>"assets/img/postales/factureras/em/image5.jpg",
        "servicios1" =>"assets/img/postales/servicios/image1.jpg",
        "servicios2" =>"assets/img/postales/servicios/image2.jpg",
        "servicios3" =>"assets/img/postales/servicios/image3.jpg",
        "servicios4" =>"assets/img/postales/servicios/image4.jpg",
        "servicios5" =>"assets/img/postales/servicios/image5.jpg",
        "tecnologia1" =>"assets/img/postales/tecnologia/image1.jpg",
        "tecnologia2" =>"assets/img/postales/tecnologia/image2.jpg",
        "tecnologia3" =>"assets/img/postales/tecnologia/image3.jpg",
        "tecnologia4" =>"assets/img/postales/tecnologia/image4.jpg",
        "tecnologia5" =>"assets/img/postales/tecnologia/image5.jpg",
        "tecnologia6" =>"assets/img/postales/tecnologia/image6.jpg"

      );
      $data = array();
      $data["imagen"] = $array_urls[$nombre_imagen];
      $data["nombreP"]= $n;
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
