<?php


class ModPrincipal extends CI_Model
{
	public function showPrincipalParts()
	{
		$this->db->select('*');
		$this->db->where('id', 1);
		$result = $this->db->get('pagina');
		return $result->result_array();
	}

	public function updateInformation($data)
	{
		$this->db->where('id', 1);
		$this->db->update('pagina', $data);
		
		if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
	}

	public function createInformation()
	{
		$data = array('nosotros' =>  $this->input->post('nosotrosr'),
						'nosotros_completo' => $this->input->post('nosotroscom'),
						'contacto' => $this->input->post('contacto'),
						'primeracompra' => $this->input->post('compra'));
		$result['insertStatus'] = $this->updateInformation($data);
		$result['datos'] = $data;
		return $result;
	}

	public function showProductos()
	{
		$this->db->select('secure_id AS id, descripcion, precio, CONCAT("'.base_url('assets/storage/products/').'", img) as img, notas');
		$this->db->where('status', 1);
		$data = $this->db->get('productos');
		return $data->result_array();
	}


	public function consultProducto($secure_id)
	{
		$this->load->model('ModProductos');
		$id = $this->ModProductos->getIDbySecureID($secure_id);
		return $this->ModProductos->consultProducto($id[0]['idProducto']);
	}
}