<?php

class ModEmployes extends CI_Model
{

    private function getTable()
    {
        return "employes";
    }

    public function insertEmpleado($data = null)
    {

    }

    public function getEmpleados($indexSearch)
    {
        $this->db->select("id AS idEmpleado, nombre, apellidop AS paterno, apellidom AS materno");
        $consulta = $this->db->get($this->getTable());
        return $consulta->result_array();
    }





}