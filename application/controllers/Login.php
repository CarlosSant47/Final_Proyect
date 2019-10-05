<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ModLogin");
    }

    public function index()
    {
        $this->load->view("LoginView");
    }

    public function logoutAction()
    {
        $this->session->sess_destroy();
        redirect(base_url("index.php/Login"));
        //die();
    }

    public function loginAction()
    {
        $result = $this->ModLogin->loginAccess(
            array("usuario" => $this->input->post("usuario"),
                "pass" => $this->input->post("pass")));
        if($result)
        {
            redirect(base_url("index.php/Admin"));
        }
        else{
            echo "Error";
        }
        /*
        if($this->input->is_ajax_request())
        {
            echo "omis";
        }
        else
        {
            echo "Error";
        }
        */
    }
}