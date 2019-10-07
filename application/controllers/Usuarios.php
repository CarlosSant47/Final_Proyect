<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('sessionStatus'))
        {
            redirect(base_url("index.php/Login"));
            die();
        }
        $this->load->model("ModUsers");

    }

    public function consultUsuarios()
    {
        echo json_encode($this->ModUsers->getUsuarios());
    }

    public function addUser()
    {
        echo json_encode($this->ModUsers->createUser());
    }


}