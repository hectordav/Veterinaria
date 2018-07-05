<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_model extends CI_Model {

	public function guardar_animal($id_usuario,$id_especie,$id_raza,$id_sexo,$id_color,$id_esterilizado,$codigo,$nombre,$peso,$fecha_nac,$nacionalidad,$observacion,$archivo){
		$data = array('id_usuario'=>$id_usuario,
		'id_especie'=>$id_especie,
		'id_raza'=>$id_raza,
		'id_sexo'=>$id_sexo,
		'id_color'=>$id_color,
		'id_esterilizacion'=>$id_esterilizado,
		'codigo'=>$codigo,
		'nombre'=>$nombre,
		'peso'=>$peso,
		'fecha_nac'=>$fecha_nac,
		'nacionalidad'=>$nacionalidad,
		'observaciones'=>$observacion,
		'imagen' =>$archivo);
		$this->db->insert('t_animal', $data);
	}
	public function get_animal_id_animal($id_animal){
		$this->db->select('t_animal.id as id_animal, t_animal.codigo as codigo,t_animal.nombre as nombre,t_animal.peso as peso,t_animal.fecha_nac as fecha_nac,t_animal.nacionalidad as nacionalidad,t_animal.observaciones as observaciones,t_animal.imagen as imagen, t_especie.descripcion as especie, t_raza.descripcion as raza, t_sexo.descripcion as sexo, t_color.descripcion as color, t_esterilizacion.descripcion as esterilizado, t_usuario.nombre as nombre_usuario');
		$this->db->join('t_especie', 't_animal.id_especie = t_especie.id', 'left');
		$this->db->join('t_raza', 't_animal.id_raza = t_raza.id', 'left');
		$this->db->join('t_sexo', 't_animal.id_sexo = t_sexo.id', 'left');
		$this->db->join('t_color', 't_animal.id_color = t_color.id', 'left');
		$this->db->join('t_esterilizacion', 't_animal.id_esterilizacion= t_esterilizacion.id', 'left');
		$this->db->join('t_usuario', 't_animal.id_usuario= t_usuario.id', 'left');
		$this->db->where('t_animal.id', $id_animal);
		$consulta=$this->db->get('t_animal',1);
			  if($consulta->num_rows() > 0){
			      return $consulta->result();
			  }
	}
}

/* End of file animal_model.php */
/* Location: ./application/models/animal_model.php */