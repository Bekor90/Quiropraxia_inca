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
		$nombreform = $this->input->post('nombre', TRUE);
		$apellidosform = $this->input->post('apellidos', TRUE);
		$edadform = $this->input->post('edad', TRUE);
		$generoform = $this->input->post('genero', TRUE);
		$epsform = $this->input->post('eps', TRUE);
		$ocupacionform = $this->input->post('ocupacion', TRUE);
		$escolaridadform = $this->input->post('escolaridad', TRUE);
		$ciudadform = $this->input->post('ciudad', TRUE);
		$municipioform = $this->input->post('municipio', TRUE);
		$barrioform = $this->input->post('barrio', TRUE);
		$direccionform = $this->input->post('direccion', TRUE);
		$telefonoform = $this->input->post('telefono', TRUE);
		$pesoform = $this->input->post('peso', TRUE);
		$estaturaform = $this->input->post('estatura', TRUE);
		$fecha_nacform = $this->input->post('fecha_nac', TRUE);
		$descripcionform = $this->input->post('descripcion', TRUE);
		$diagnosticoform = $this->input->post('diagnostico', TRUE);
		$fecha_controlform = $this->input->post('fecha_control', TRUE);
		$mensaje = array('titulo' => '', 'body' => '');
		$id = $this->session->userdata("user_id");

		if($nombreform && $apellidosform &&  $edadform && $generoform && $epsform &&
		  $ocupacionform && $escolaridadform && $ciudadform && $municipioform && $barrioform &&
		  $direccionform && $telefonoform && $pesoform && $estaturaform && $fecha_nacform && 
		  $descripcionform && $diagnosticoform && $fecha_controlform){

			$fecha_reg = date('d-m-Y');
			$estado = true;

		  $result = $this->Tbl_paciente_Model->savePaciente($nombreform, $apellidosform, $edadform, $generoform,
		  $epsform, $ocupacionform, $escolaridadform, $ciudadform, $municipioform, $barrioform, $direccionform, 
		  $telefonoform, $pesoform, $estaturaform, $fecha_nacform, $fecha_reg, $descripcionform, $diagnosticoform,
		  $medicamento, $estado, $fecha_controlform);
			if ($result){

				//mostrar mensaje exitoso
				//limpiar formulario*/
				$mensaje = array('titulo' => 'Paciente', 'body' => 'Registro satisfactorio');
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