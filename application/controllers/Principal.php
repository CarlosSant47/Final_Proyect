<?php
/**
 * Created by PhpStorm.
 * User: CarlosSant47
 * Date: 10/11/2019
 * Time: 10:51 PM
 */

class Principal extends CI_Controller
{

    public function index()
    {
        $this->load->view("principal/ViewPrincipal");
    }
}