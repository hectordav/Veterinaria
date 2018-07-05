<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignacion_pago_model extends CI_Model {

	public function get_asignacion_pago_id_usuario($id_usuario){
			$this->db->where('id_usuario_conductor', $id_usuario);
			$consulta=$this->db->get('t_asignacion_monto');
			  if($consulta->num_rows() > 0){
			      return $consulta->result();
			  }
	}
	public function actualizar_asignacion_pago($id_asignacion_pago,$monto_nuevo,$fecha){
			$data = array('monto' =>$monto_nuevo,'fecha' =>$fecha);
			$this->db->where('id', $id_asignacion_pago);
			$this->db->update('t_asignacion_monto', $data);
	}	
	public function guardar_asignacion_pago($id_usuario,$id_empresa,$monto,$fecha){
		$data = array('id_usuario_conductor' =>$id_usuario,'id_empresa'=>$id_empresa,'monto' =>$monto,'fecha' =>$fecha);
		$this->db->insert('t_asignacion_monto', $data);
	}

}

/* End of file asignacion_pago_model.php */
/* Location: ./application/models/asignacion_pago_model.php */