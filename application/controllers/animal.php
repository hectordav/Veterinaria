<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Animal extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->library('grocery_crud');
			$this->load->model('usuario_model');
			$this->load->model('especie_model');
			$this->load->model('raza_model');
			$this->load->model('color_model');
			$this->load->model('animal_model');
			$this->load->library('upload');

	}
	public function index(){
			redirect('animal/grilla');
	}
	public function grilla(){
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('t_animal');
		$crud->set_relation('id_especie','t_especie','descripcion');
		$crud->set_relation('id_raza','t_raza','descripcion');
		$crud->set_relation('id_sexo','t_sexo','descripcion');
		$crud->set_relation('id_color','t_color','descripcion');
		$crud->set_subject('Animal');
		$crud->set_language('spanish');
		$crud->display_as('id_especie','Especie');
		$crud->display_as('id_raza','Raza');
		$crud->display_as('id_sexo','Sexo');
		$crud->display_as('id_color','Color');
		$crud->display_as('codigo','Codigo');
		$crud->display_as('nombre','Nombre');
		$crud->columns('codigo','nombre','id_especie','id_raza','id_sexo','id_color');
		$crud->required_fields('codigo','nombre','id_especie','id_raza','id_sexo','id_color');
		$crud->add_action('Ver', '', '','fa fa-eye',array($this,'fn_ver'));
		$crud->unset_edit();
		$crud->unset_read();
		$output = $crud->render();
		$state = $crud->getState();
			if($state == 'add'){
			redirect('animal/add');
			}
		$this->load->view('../../assets/inc/head_common', $output);
		$this->load->view('../../assets/inc/menu_lateral');
		$this->load->view('../../assets/inc/menu_superior');
		$this->load->view('animal/animal',$output );
		$this->load->view('../../assets/inc/footer_common',$output);
	}
	function fn_ver($primary_key , $row){
		return site_url('animal/ver').'/'.$row->id;
		}
	public function add(){
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('t_animal');
		$data = array('usuario' =>$this->usuario_model->get_usuario(),
			'especie' =>$this->especie_model->get_especie(),
			'color'=>$this->color_model->get_color());
		$output = $crud->render();
		$this->load->view('../../assets/inc/head_common_add', $output);
		$this->load->view('../../assets/inc/menu_lateral');
		$this->load->view('../../assets/inc/menu_superior');
		$this->load->view('animal/add',$data );
		$this->load->view('../../assets/script/script_combo_animal');
		$this->load->view('../../assets/inc/footer_common_add',$output);
	}
	public function Ver(){
		$id_animal['id_animal']=$this->uri->segment(3);
			if ($id_animal['id_animal']) {
				$this->session->set_userdata($id_animal);
				}
		$id_animal=$this->session->userdata('id_animal');
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('t_animal');
		$data = array('animal' =>$this->animal_model->get_animal_id_animal($id_animal));
		$output = $crud->render();
		$this->load->view('../../assets/inc/head_common_add', $output);
		$this->load->view('../../assets/inc/menu_lateral');
		$this->load->view('../../assets/inc/menu_superior');
		$this->load->view('animal/ver',$data );
		$this->load->view('../../assets/script/script_combo_animal');
		$this->load->view('../../assets/inc/footer_common_add',$output);
	}
	/*busca la raza segun la especie*/
		public function fill_raza(){
         $id_especie = $this->input->post('id_especie');
        if($id_especie){
            $raza = $this->raza_model->get_raza_id_especie($id_especie);
            echo '<option value="">Seleccione raza</option>';
            foreach($raza as $fila){
                echo '<option data-tokens="'.$fila->id.','.$fila->descripcion.'" value="'. $fila->id .'">'. $fila->descripcion.'</option>';
            }
        }  else {
            echo '<option value="">Sin Resultados</option>';
        }
   }
   public function guardar_animal(){
			$this->form_validation->set_rules('id_usuario', 'Propietario', 'required|callback_check_default');
			$this->form_validation->set_rules('id_especie', 'Especie', 'required|callback_check_default');
			$this->form_validation->set_rules('id_raza', 'Raza', 'required|callback_check_default');
			$this->form_validation->set_rules('id_sexo', 'Sexo', 'required|callback_check_default');
			$this->form_validation->set_rules('id_color', 'Color', 'required|callback_check_default');
			$this->form_validation->set_rules('id_esterilizado', 'Esterilizado', 'required|callback_check_default');
			$this->form_validation->set_rules('txt_codigo', 'Codigo', 'required|required');
			$this->form_validation->set_rules('txt_nombre', 'Nombre', 'required|required');
			$this->form_validation->set_rules('txt_peso', 'Peso', 'required|required');
			$this->form_validation->set_rules('txt_fecha_nac', 'Fecha de Nacimiento', 'required|required');
			$this->form_validation->set_rules('txt_nacionalidad', 'Nacionalidad', 'required|required');
			$this->form_validation->set_message("required","El campo %s es Requerido");
			$this->form_validation->set_message("callback_check_default","El campo %s es Requerido");
			if ($this->form_validation->run()===false) {
				/*lo regresa al add porque no furula*/
					$this->add();
			}else{
			$id_usuario=$this->input->post('id_usuario','true');
			$id_especie=$this->input->post('id_especie','true');
			$id_raza=$this->input->post('id_raza','true');
			$id_sexo=$this->input->post('id_sexo','true');
			$id_color=$this->input->post('id_color','true');
			$id_esterilizado=$this->input->post('id_esterilizado','true');
			$codigo=$this->input->post('txt_codigo','true');
			$nombre=$this->input->post('txt_nombre','true');
			$peso=$this->input->post('txt_peso','true');
			$fecha_nac=$this->input->post('txt_fecha_nac','true');
			$nacionalidad=$this->input->post('txt_nacionalidad','true');
			$observacion=$this->input->post('txt_observacion','true');
			$mi_imagen = 'mi_imagen';
				if (!empty($_FILES['mi_imagen']['name'])) {
					$config['upload_path'] = "./assets/img";
					$config['allowed_types'] = "*";
					$config['max_size'] = "0";
					$config['max_width'] = "0";
					$config['max_height'] = "0";
					$config['remove_spaces']=TRUE;
					$config['overwrite'] = true;
					$this->upload->initialize($config);
				if ($this->upload->do_upload('mi_imagen')){
					$data= $this->upload->data();
					$archivo=$data['file_name'];
					$this->animal_model->guardar_animal($id_usuario,$id_especie,$id_raza,$id_sexo,$id_color,$id_esterilizado,$codigo,$nombre,$peso,$fecha_nac,$nacionalidad,$observacion,$archivo);
					}else{
					echo $this->upload->display_errors();
					$archivo=null;
					$this->animal_model->guardar_animal($id_usuario,$id_especie,$id_raza,$id_sexo,$id_color,$id_esterilizado,$codigo,$nombre,$peso,$fecha_nac,$nacionalidad,$observacion,$archivo);
					}
				}
				$this->session->set_flashdata('alerta', 'Se ha guardado correctamente');
					redirect('animal/grilla','refresh');
				}
   }
}