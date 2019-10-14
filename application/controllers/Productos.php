<?php
/**
 * Created by PhpStorm.
 * User: CarlosSant47
 * Date: 10/13/2019
 * Time: 6:27 PM
 */

class Productos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('sessionStatus'))
        {
            redirect(base_url("index.php/Login"));
            die();
        }
        $this->load->model("ModProductos");
    }

    public function index()
    {
        $view = 'ViewProductos';
        if(file_exists(APPPATH."views/$view.php")){
            $data['secciones'] = $this->ModProductos->consultSecciones();
            $this->load->view($view, $data);
        }
        else{
            echo "Error";
            // model doesn't exist
        }
    }

    public function consultProductos(){
        $mode = $this->input->post("mode");
        $mode = ((isset($mode)) ? $mode : 1);
        switch ((int) $mode)
        {
            case 1:
                echo json_encode($this->ModProductos->consultProductos());
                break;
            case 2:
                $id = $this->input->post("search");
                echo json_encode($this->ModProductos->consultProducto($id));
                break;
            default:echo json_encode($this->ModProductos->consultProductos());
        }

    }

    public function consultProductoID()
    {

    }

    public function createProducto()
    {
        $mode = $this->input->post("mode");
        $mode = ((isset($mode)) ? $mode : 1);
        echo json_encode($this->ModProductos->createProducto($mode));
    }


}