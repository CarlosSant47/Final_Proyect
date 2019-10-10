<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
        if(!$this->session->userdata('sessionStatus'))
        {
            redirect(base_url("index.php/Login"));
            die();
        }

    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function Usuarios()
    {
        $this->load->model("ModUsers");
        $data["empleados"] = $this->ModUsers->getEmpleados();
        $data["tipo"] = $this->ModUsers->getTipoUsuario();
        $this->load->view('UsuariosView', $data);
    }


    public function Modulos()
    {
        $this->load->model("ModUsers");
        $this->load->model("ModModulos");
        $data["tipo"] = $this->ModUsers->getTipoUsuario();
        $data['icons'] = $this->ModModulos->getIcons();
        $this->load->view('ViewModulos', $data);
    }

    public function Productos()
    {
        $view = 'ProductosModel';
        if(file_exists(APPPATH."models/$view.php")){
            $this->load->view($view);
            //$this->my_model->my_fcn($prams);
        }
        else{
            echo "Error";
            // model doesn't exist
        }
    }

    public function Empleados()
    {
        $this->load->view("ViewEmpleados");
        /*
        $view = 'ViewEmpleados';
        if(file_exists(APPPATH."models/$view.php")){
            $this->load->view($view);
            //$this->my_model->my_fcn($prams);
        }
        else{
            echo "Error";
            // model doesn't exist
        }
        */
    }
}