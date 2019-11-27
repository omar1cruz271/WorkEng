<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class RegistroEmpresaAjax extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('formularios_model');
    }
    public function index() {
        $respAX = array();
        $data = array(
            'nombre' => trim($_POST["name"]),
            'contrasena' => trim($_POST["password"]),
            'email' => trim($_POST["email"]),
            'Movil' => trim($_POST["mobile"]),
            'Giro' => trim($_POST["gender"]),
            'cif' => trim($_POST["cif"]),
            'Direccion'=> trim($_POST["Direccion"]),
            
        );
        $er = $this->formularios_model->registrarEmpresa($data);
        if ($er) {
            $respAX["val"] = 1;
            $respAX["msj"] = "<h5 class='text-info text-dark'>¡Registro Exitoso!</h5>";
            $respAX["icon"] = "fas fa-check fa-2x";
            $respAX["title"] = "<h4 class='text-info text-success'>Estado del registro:</h4>";
        } else {
            $respAX["val"] = 0;
            $respAX["msj"] = "<h5 class='text-info text-dark'>Registro fallido, ya existe ese nombre de Empresa</h5>";
            $respAX["icon"] = "fas fa-exclamation fa-2x";
            $respAX["title"] = "<h4 class='text-info text-danger'>Estado del registro:</h4>";
        }
        echo json_encode($respAX);
    } # Fin de funcion de registro
}