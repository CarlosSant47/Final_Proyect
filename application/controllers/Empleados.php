<?php


class Empleados extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('sessionStatus'))
        {
            redirect(base_url("index.php/Login"));
            die();
        }
        $this->load->model("ModEmployes");

    }

    public function consultEmpleados()
    {
        echo json_encode($this->ModEmployes->getEmpleados(""));
    }

    public function addEmpleado()
    {
        echo json_encode($this->ModEmployes->createEmpleado());
    }

    private function updateEmpleados()
    {

    }


}