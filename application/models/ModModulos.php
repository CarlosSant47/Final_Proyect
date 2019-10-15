<?php


class ModModulos extends CI_Model
{

    public function getModulos()
    {
        
        $this->db->select("secure_id AS idModulo, nombre, icon AS icono, ruta, IF(STATUS = 1, 'Activo', 'Inactivo') AS estado", false);
        //$this->db->like('secure_id', $search);
        $consulta = $this->db->get($this->getTable());
        return $consulta->result_array();
    }

    public function getModuloByID($secureID)
    {
        $this->db->select("secure_id AS idModulo, nombre, icon AS icono, ruta, IF(STATUS = 1, 'Activo', 'Inactivo') AS estado", false);
        $this->db->where('secure_id', $secureID);
        $consulta = $this->db->get($this->getTable());
        return $consulta->result_array();
    }


    public function getIcons()
    {
        $json = file_get_contents(base_url('assets/storage/icons.json'));
        $obj = json_decode($json);
        return $obj;
    }

    private function insertSecureId($idModulo)
    {
        $query = $this->db->query("SELECT generateSecureID($idModulo) as secureid");
        $data = array("secure_id" => $query->row()->secureid);
        $this->updateModulo($idModulo, $data);
    }

            



    private function insertModulo($data)
    {
        $this->db->insert('modulos',$data);
        if($this->db->affected_rows() > 0) {
            $this->insertSecureId($this->db->insert_id());
            return true;
        }
        else
            return false;
    }

    public function getIDbySecureID($secureID)
    {
        $this->db->select("id AS idModulo", false);
        $this->db->where('secure_id', $secureID);
        $consulta = $this->db->get($this->getTable());
        return $consulta->result_array();
    }

    private function updateModulo($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('modulos', $data);
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }



    public function createModulo($mode)
    {
        $result = array();
        $data = array(
            'nombre'=> $this->input->post("nombreModulo"),
            'icon' => $this->input->post("icono"),
            'ruta' => $this->input->post("ruta"));
        switch ((int) $mode) {
            case 1:
                $result['statusInsert'] = $this->insertModulo($data);
                break;
            case 2:
                $id = $this->getIDbySecureID($this->input->post("idModulo"));
                $result['statusInsert'] = $this->updateModulo($id[0]['idModulo'], $data);
                break;
            default:

                $result['statusInsert'] = $this->insertModulo($data);
                break;
        }
        return $result;

    }

    private function getTable()
    {
        return "modulos";
    }
}