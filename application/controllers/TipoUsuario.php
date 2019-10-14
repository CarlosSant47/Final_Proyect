<?php
/**
 * Created by PhpStorm.
 * User: CarlosSant47
 * Date: 10/12/2019
 * Time: 11:47 AM
 */

class TipoUsuario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('sessionStatus'))
        {
            redirect(base_url("index.php/Login"));
            die();
        }
        $this->load->model("ModTipoUsuario");

    }

    public function consultTipoUsuarios()
    {

        echo json_encode($this->ModTipoUsuario->consultTipo());
    }

    public function consultTipo()
    {
        $id = $this->input->post('id');
        echo json_encode($this->ModTipoUsuario->consultTipoID($id));
    }

    public function consultAcessoModulos()
    {

    }

    public function insertTipoUsuario()
    {

    }
}