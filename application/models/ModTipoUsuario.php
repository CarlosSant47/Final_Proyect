<?php
/**
 * Created by PhpStorm.
 * User: CarlosSant47
 * Date: 10/12/2019
 * Time: 11:48 AM
 */

class ModTipoUsuario extends CI_Model
{
    public function createTipoUsuario($mode)
    {
        $result = array();
        $data = array(
            'nombreTipo' => $this->input->post("nombre"),
            'accesos' => $this->input->post("accesos"));
        switch ((int) $mode) {
            case 1:
                $result['statusInsert'] = $this->insertTipoUsuario($data);
                break;
            case 2:
                //$id = $this->getIDbySecureID($this->input->post("idTipo"));
                $id = $this->input->post("idTipo");
                $result['statusInsert'] = $this->updateTipo($id[0]['idModulo'], $data);
                break;
            default:
                $result['statusInsert'] = $this->insertTipoUsuario($data);
                break;
        }
        return $result;

    }
    public function insertTipoUsuario($data)
    {

    }

    private function initAccess()
    {

    }

    public function updateTipo($id, $data){

    }

    private function consultAccesos($idTipo)
    {
        $this->db->select("tipomodulo.`id` AS idacceso, modulos.`nombre` AS nombreModulo, modulos.`id` AS idModulo, tipomodulo.`status` AS acceso ");
        $this->db->join("tipomodulo", "modulos.`id` = tipomodulo.`modulo`");
        $this->db->where("tipousuario", $idTipo);
    }

    public function consultTipoID($id)
    {
        $data = array();
        $this->db->select("int idTipo, tpnombre as nombre, status as estado");
        $this->db->where("id", $id);
        $tipo = $this->db->get("tipousuario");
        $data['tipoUsuarios'] = $tipo->result_array();
        $data{'accesos'} = $this->consultAccesos($id);
        return $data;
    }
    public function consultTipo()
    {

        $this->db->select("int idTipo, tpnombre as nombre, status as estado");
        //$this->db->like("id", $id);
        $data = $this->db->get("tipousuario");
        return $data->result_array();
    }

}