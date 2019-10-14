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
        
        $mode = $this->input->post('mode');
        $moderesult = ((isset($mode)) ? $mode : 1);
        if($moderesult == 2)
        {
            $buscar= $this->input->post('search');
            echo json_encode($this->ModModulos->getModuloByID($buscar));
        }
        else
        {
            echo json_encode($this->ModModulos->getModulos());
        }
        
    }

    public function consultIcons()
    {
        echo json_encode($this->ModModulos->getIcons());
    }

    public function insertModulos()
    {
        echo json_encode($this->ModModulos->createModulo($this->input->post("mode")));
    }



}