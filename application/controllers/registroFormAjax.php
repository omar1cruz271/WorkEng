<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class RegistroAjax extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('formularios_model');
    }
    public function index() {
        $respAX = array();
        if($_POST["carrera"]!= NULL){
        $data = array('carrera' => trim($_POST["carrera"]));
        $er = $this->formularioR_model->registrarCarrera($data);
        }
        if($_POST["interes"]!= NULL){
        $data = array('interes' => trim($_POST["interes"]));
        $er = $this->formularioR_model->registrarInteres($data);
        }
        if ($er) {
            $respAX["val"] = 1;
            $respAX["msj"] = "<h5 class='text-info text-dark'>¡Registro Exitoso!</h5>";
            $respAX["icon"] = "fas fa-check fa-2x";
            $respAX["title"] = "<h4 class='text-info text-success'>Estado del registro:</h4>";
        } else {
            $respAX["val"] = 0;
            $respAX["msj"] = "<h5 class='text-info text-dark'>Registro fallido, ya existe ese email</h5>";
            $respAX["icon"] = "fas fa-exclamation fa-2x";
            $respAX["title"] = "<h4 class='text-info text-danger'>Estado del registro:</h4>";
        }
        echo json_encode($respAX);
    } # Fin de funcion de registro
}
