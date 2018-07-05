<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especie_model extends CI_Model {

	public function get_especie(){
		$consulta=$this->db->get('t_especie');
		  if($consulta->num_rows() > 0){
		      return $consulta->result();
		  }
	}

}

/* End of file especie_model.php */
/* Location: ./application/models/especie_model.php */