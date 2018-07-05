<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function get_usuario(){
		$consulta=$this->db->get('t_usuario');
		  if($consulta->num_rows() > 0){
		      return $consulta->result();
		  }
	}

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */