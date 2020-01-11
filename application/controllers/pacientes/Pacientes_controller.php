<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pacientes_controller extends CI_Controller {
	/**
	 **Cargar por defecto la vista del login 
	 */

	public function __construct()
    {
        parent::__construct(); 
        $this->load->helper('helpers_helper');       
        $this->load->model('Tbl_usuarios_Model');
        $this->load->model('Tbl_paciente_Model');
        if(!$this->session->userdata('log')){
        	redirect('Home');
        }
    }

	public function index()
	{
		$this->load->view('dashboard/menu');		
	}
	public function registrarPaciente()
	{
		$tituloform = $this->input->post('titulo', TRUE);
		$descripcionform = $this->input->post('descripcion', TRUE);
		$categoriaform = $this->input->post('categoria', TRUE);
		$mensaje = array('titulo' => '', 'body' => '');
		$id = $this->session->userdata("user_id");

		if($tituloform && $descripcionform &&  $categoriaform){
			$result = $this->Tbl_tarea_Model->saveTarea($tituloform, $descripcionform, $id, $categoriaform);
			if ($result != FALSE){

				//mostrar mensaje exitoso
				//limpiar formulario*/
				$mensaje = array('titulo' => 'Tarea', 'body' => 'Registro satisfactorio');
				redirect('Dashboard');
				/*$this->load->view('dashboard/menu');
				$this->load->view('errors/perzonalizado/mensajes', $mensaje);
				$this->load->view('dashboard/cierredashboard');	*/
				
			}
		}
	}

	public function editarPaciente($id)
	{	
		$data = array('result' => '');
		if($id >= 0){
			$result = $this->Tbl_paciente_Model->findByPaciente($id);
			$data['result'] = $result;
				$this->load->view('dashboard/menu');
				$this->load->view('dashboard/paciente/editar_paciente', $data);
				$this->load->view('dashboard/cierredashboard');	
		}

	}
	public function actualizar()
	{
		$id =  $this->input->post('id', TRUE);
		$tituloform = $this->input->post('edititulo', TRUE);
		$descripcionform = $this->input->post('editdescrip', TRUE);
		$id_usuario = $this->input->post('idusuario', TRUE);
		$categoriaform = $this->input->post('categoria', TRUE);

		$data = array('id_tarea' =>$id,
					'titulo' => $tituloform,
					'descripcion' => $descripcionform,
					'id_usuario' => $id_usuario,
					'estado' => 'a',
					'id_categoriat' => $categoriaform,);


		if($id && $tituloform && $descripcionform && $id_usuario  && $categoriaform){
			$result = $this->Tbl_tarea_Model->updateTarea($data, $id);
			if ($result != FALSE){

				//mostrar mensaje exitoso
				//limpiar formulario*/
				$mensaje = array('titulo' => 'Usuario', 'body' => 'Registro satisfactorio');
				redirect('Dashboard');
			}
		}	
	}

	public function eliminarPaciente($id)
	{		
		if($id >= 0){
			$result = $this->Tbl_paciente_Model->deletePaciente($id);
			if ($result != FALSE){
		
				redirect('Dashboard');
			}
		}

	}
}