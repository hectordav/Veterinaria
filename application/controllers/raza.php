<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Raza extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->library('grocery_crud');
			$this->load->model('especie_model');
			$this->load->model('raza_model');
	}
	public function index(){
			redirect('raza/grilla');
	}
	public function grilla(){
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('t_raza');
		$crud->set_relation('id_especie','t_especie','descripcion');
		$crud->set_subject('Raza');
		$crud->set_language('spanish');
		$crud->display_as('descripcion','Raza');
		$crud->display_as('id_especie','Especie');
		$crud->columns('id_especie','descripcion');
		$crud->required_fields('id_especie','descripcion');
		$output = $crud->render();
		$this->load->view('../../assets/inc/head_common', $output);
		$this->load->view('../../assets/inc/menu_lateral');
		$this->load->view('../../assets/inc/menu_superior');
		$this->load->view('raza/raza',$output );
		$this->load->view('../../assets/inc/footer_common',$output);
	}

}