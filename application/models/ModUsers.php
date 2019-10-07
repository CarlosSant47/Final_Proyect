<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModUsers extends CI_Model
{
    public function getUsuarios()
    {
        $this->db->select("usuarios.id AS idUsuario, USER AS usuario, employes.`nombre`".
            " AS nombre, CONCAT('".base_url("assets/storage/")."', img) AS imgUser, tipousuario.`tpnombre` AS tipo, ".
            "IF(usuarios.`status` = 1, 'Activo', 'Inactivo') as estado", false);
        $this->db->join("employes", "usuarios.`idemploy` = employes.`id`");
        $this->db->join("tipousuario", "usuarios.`tipo` = tipousuario.`int`");
        $consult = $this->db->get("usuarios");
        return $consult->result_array();
    }

    public function getEmpleados()
    {
        $this->db->select("employes.`id`, employes.`nombre`");
        $consult = $this->db->get("employes");
        return $consult->result_array();
    }

    public function getTipoUsuario()
    {
        $this->db->select("tipousuario.`int` AS id, tipousuario.`tpnombre`");
        $consult = $this->db->get("tipousuario");
        return $consult->result_array();
    }

    public function getImageConfig()
    {
        $config['upload_path'] = './assets/storage';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';
        return $config;
    }

    public function createUser()
    {
        $data = $this->uploadProfileUser();
        if($data['status'])
        {
            $userData = array(
                "user" => $this->input->post("usuario"),
                "pass" => md5($this->input->post("contrasena")),
                'idemploy' => $this->input->post("empleado"),
                "img" => $data['what']['file_name'],
                "tipo" => $this->input->post("tipo"));
            if($this->insertUser($userData))
            {
                $data['insertStatus'] = true;
            }
            else{
                $data['insertStatus'] = false;
            }

            return $data;
        }
        else{
            return $data;
        }
    }

    public function insertUser($data)
    {
        $this->db->insert('usuarios',$data);
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function uploadProfileUser()
    {
        $this->load->library('upload', $this->getImageConfig());//CARGA LA LIBRERIA UPLOAD
        if ( ! $this->upload->do_upload('fotoperfil'))
        {
            return $testArray = array('what' => $this->upload->display_errors(), "status", false);
        }
        else{
            return $testArray = array('what' => $this->upload->data(), "status" => true);
        }
    }


    public function checkUserName($username)
    {
        
    }

}