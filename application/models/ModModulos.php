<?php


class ModModulos extends CI_Model
{

    public function getModulos()
    {
        $this->db->select("id AS idModulo, nombre, icon AS icono, ruta, IF(STATUS = 1, 'Activo', 'Inactivo') AS estado", false);
        $consulta = $this->db->get($this->getTable());
        return $consulta->result_array();
    }


    public function getIcons()
    {
        $json = file_get_contents(base_url('assets/storage/icons.json'));
        $obj = json_decode($json);
        return $obj;
    }


    private function getTable()
    {
        return "modulos";
    }
}