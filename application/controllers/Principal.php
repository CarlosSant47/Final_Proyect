<?php
/**
 * Created by PhpStorm.
 * User: CarlosSant47
 * Date: 10/11/2019
 * Time: 10:51 PM
 */

class Principal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModPrincipal');
    }

    public function index()
    {
        
        $data['principal'] = $this->ModPrincipal->showPrincipalParts();
        $this->load->view("principal/ViewPrincipal", $data);
    }

    public function Producto()
    {
        $data['principal'] = $this->ModPrincipal->showPrincipalParts();
        $get = $this->input->get('producto');
        if(isset($get))
        {
                $data['producto'] = $this->ModPrincipal->consultProducto($get);
                if(count($data['producto']) == 0)
                {
                    redirect(base_url("index.php/Principal"));
                    die();
                }
                else
                {
                    $this->load->view("principal/ViewPricipalProducto", $data); 
                }
                
        }
        else
        {
            redirect(base_url("index.php/Principal"));
            die();
        }
        
        //
    }

    public function Productos()
    {
        $data['principal'] = $this->ModPrincipal->showPrincipalParts();
        $data['productos'] = $this->ModPrincipal->showProductos();

        $this->load->view("principal/ViewPrincipalProductos", $data);
    }

    public function Nosotros()
    {
        $data['principal'] = $this->ModPrincipal->showPrincipalParts();
        $this->load->view("principal/ViewNosotros", $data);
    }

}