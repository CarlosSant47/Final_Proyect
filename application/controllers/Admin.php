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
}