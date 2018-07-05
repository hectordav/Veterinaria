<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Especie extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->library('grocery_crud');
	}
	public function index(){
			redirect('especie/grilla');
	}
	public function grilla(){
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('t_especie');
		$crud->set_subject('Especie');
		$crud->set_language('spanish');
		$crud->display_as('descripcion','Especie');
		$crud->columns('descripcion');
		$crud->required_fields('descripcion');
		$output = $crud->render();
		$this->load->view('../../assets/inc/head_common', $output);
		$this->load->view('../../assets/inc/menu_lateral');
		$this->load->view('../../assets/inc/menu_superior');
		$this->load->view('especie/especie',$output );
		$this->load->view('../../assets/inc/footer_common',$output);
	}

}