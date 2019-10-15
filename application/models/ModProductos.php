<?php
/**
 * Created by PhpStorm.
 * User: CarlosSant47
 * Date: 10/13/2019
 * Time: 5:54 PM
 */

class ModProductos extends CI_Model
{

    private function insertProducto($data)
    {
        $this->db->insert('productos',$data);
        if($this->db->affected_rows() > 0) {
            $this->insertSecureId($this->db->insert_id());
            return true;
        }
        else
            return false;
    }

    private function insertSecureId($idProducto)
    {
        $query = $this->db->query("SELECT generateSecureID($idProducto) as secureid");
        $data = array("secure_id" => $query->row()->secureid);
        $this->updateProducto($idProducto, $data);
    }

    private function updateProducto($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('productos', $data);
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function getIDbySecureID($secureID)
    {
        $this->db->select("id AS idProducto", false);
        $this->db->where('secure_id', $secureID);
        $consulta = $this->db->get("productos");
        return $consulta->result_array();
    }

    public function getImageConfig()
    {
        $config['upload_path'] = './assets/storage/products';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '500';
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';
        return $config;
    }

    public function uploadProduct()
    {
        $this->load->library('upload', $this->getImageConfig());//CARGA LA LIBRERIA UPLOAD
        if ( ! $this->upload->do_upload('fotoProducto'))
        {
            return $testArray = array('what' => $this->upload->display_errors(), "status", false);
        }
        else{
            return $testArray = array('what' => $this->upload->data(), "status" => true);
        }
    }


    public function createProducto($mode)
    {
        $result = array();
        $data = array(
            'descripcion'=> $this->input->post("nombreProducto"),
            'precio' => $this->input->post("precio"),
            'seccion' => $this->input->post("tipo"),
            'notas' => $this->input->post("notas"));
        switch ((int) $mode) {
            case 1:
                {
                    $result = $this->uploadProduct();
                    if ($result['status']) {
                        $data['img'] = $result['what']['file_name'];
                        if ($this->insertProducto($data)) {
                            $result['statusInsert'] = true;
                        } else {
                            $result['statusInsert'] = false;
                        }
                    }
                }
                break;
            case 2:
                $id = $this->input->post("idProducto");
                //$data['id'] = $id;
                $data{'status'} = $this->input->post("estado");
                $result['statusInsert'] = $this->updateProducto($id, $data);
                break;
            default:
                echo "error";
        }
        return $result;
    }

    public function consultProductos()
    {
        $this->db->select("productos.id AS idProducto, descripcion, precio, seccion.`nombre` AS seccion, img AS imagen, IF(productos.`status` = 1, 'Activo', 'Inactivo') as estado", false);
        $this->db->join("seccion", "productos.`seccion` = seccion.`id`");
        $data = $this->db->get("productos");
        return $data->result_array();

    }

    public function consultProducto($id)
    {
        $this->db->select("productos.id AS idProducto, productos.secure_id as secure, descripcion, precio, seccion AS seccion, concat('".base_url('assets/storage/products/')."',img) AS imagen, status AS estado, notas", false);
        $this->db->where("id", $id);
        $data = $this->db->get("productos");
        return $data->result_array();

    }



    public function consultSecciones()
    {
        $this->db->select("nombre, id");
        $this->db->where("status", 1);
        $data = $this->db->get("seccion");
        return $data->result_array();
    }



}