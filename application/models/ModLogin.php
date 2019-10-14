<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModLogin extends CI_Model
{
    public function loginAccess($data)
    {
        $query = $this->consultUser($data);
        if((int)$query['result'] == 1)
        {
            $data = array("sessionStatus" => true ,"userContent" => $query,
                "empleado" => $this->consultEmpleado($query['idUsuario']),
                "modulos" => $this->consultModules($query['tipo']));
            if($this->session->userdata('sessionStatus'))
            {
                $this->session->sess_destroy();//DESTRUIRA LA SESION SI HAY UNA ACTIVA
            }
            $this->session->set_userdata($data);
            return true;
        }
        else{
            return false;
        }

    }

    private function consultUser($data)
    {
        $this->db->select("COUNT(*) AS result, id AS idUsuario, tipo, img as imagenUsuario");
        $this->db->where("MD5(USER)", md5($data['usuario']));
        $this->db->where("pass", md5($data['pass']));
        $query = $this->db->get("usuarios");
        $query = $query->result_array();
        return $query[0];
    }


    private function consultEmpleado($idUsuario)
    {
        $this->db->select("nombre, apellidop, apellidom");
        $this->db->join("usuarios", "employes.`id` = usuarios.id");
        $this->db->where("employes.`id`", $idUsuario);
        $query = $this->db->get("employes");
        $query = $query->result_array();
        return $query[0];
    }

    private function consultModules($tipoUsuario)
    {
        $this->db->select("modulos.`nombre`, modulos.`ruta`, modulos.`icon`");
        $this->db->join("tipomodulo", " modulos.`id` = tipomodulo.`modulo`");
        $this->db->where("tipomodulo.`tipousuario", $tipoUsuario);
        $this->db->where("tipomodulo.`status", 1);
        $query = $this->db->get("modulos");
        return $query->result_array();
    }

}