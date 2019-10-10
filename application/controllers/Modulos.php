<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('sessionStatus'))
        {
            redirect(base_url("index.php/Login"));
            die();
        }
        $this->load->model("ModModulos");

    }
    public function consultModulos()
    {
        echo json_encode($this->ModModulos->getModulos());
    }

    public function consultIcons()
    {
        echo json_encode($this->ModModulos->getIcons());
    }

    private function insertModulos()
    {

    }



}