<?php

class ModEmployes extends CI_Model
{

    private function getTable()
    {
        return "employes";
    }

    public function insertEmpleado($data)
    {
        $this->db->insert('employes',$data);
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function createEmpleado($data = null)
    {
            $data;
            $userData = array(
                "nombre" => $this->input->post("nombre"),
                "apellidop" => $this->input->post("paterno"),
                'apellidom' => $this->input->post("materno"));
            if($this->insertEmpleado($userData))
            {
                $data['insertStatus'] = true;
            }
            else{
                $data['insertStatus'] = false;
            }

            return $data;
    }

    public function getEmpleados($indexSearch)
    {
        $this->db->select("id AS idEmpleado, nombre, apellidop AS paterno, apellidom AS materno");
        $consulta = $this->db->get($this->getTable());
        return $consulta->result_array();
    }





}