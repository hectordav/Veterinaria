<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raza_model extends CI_Model {

	public function guardar_raza($id_especie,$raza){
		$data = array('id_especie' =>$id_especie,
		'descripcion' =>$raza);
		$this->db->insert('t_raza', $data);
	}
	public function get_raza_id_especie($id_especie){
		$this->db->where('id_especie', $id_especie);
		$consulta=$this->db->get('t_raza');
		  if($consulta->num_rows() > 0){
		      return $consulta->result();
		  }
	}

}

/* End of file raza_model.php */
/* Location: ./application/models/raza_model.php */