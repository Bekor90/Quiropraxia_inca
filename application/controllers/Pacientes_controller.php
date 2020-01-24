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
		$cedulaform = $this->input->post('cedula', TRUE);
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
		$tratamientoform = $this->input->post('tratamiento', TRUE);
		$fecha_controlform = $this->input->post('fecha_control', TRUE);
		$medicamentoform = $this->input->post('medicamento', TRUE);
		$mensaje = array('titulo' => '', 'body' => '');
		$id = $this->session->userdata("user_id");

		if($nombreform && $apellidosform && $cedulaform && $edadform && $generoform && $epsform &&
		  $ocupacionform && $escolaridadform && $ciudadform && $municipioform && $barrioform &&
		  $direccionform && $telefonoform && $pesoform && $estaturaform && $fecha_nacform && 
		  $descripcionform && $diagnosticoform && $tratamientoform && $fecha_controlform){

		  $fecha_reg = date('Y-m-d');		
		  $estado = 1;			

		  $result = $this->Tbl_paciente_Model->savePaciente($nombreform, $apellidosform, $edadform, $generoform,
		  $epsform, $ocupacionform, $escolaridadform, $ciudadform, $municipioform, $barrioform, $direccionform, 
		  $telefonoform, $pesoform, $estaturaform, $fecha_nacform, $fecha_reg, $descripcionform, $diagnosticoform,
		  $medicamentoform, $estado, $fecha_controlform, $cedulaform, $tratamientoform);
			if ($result){

				$user['nombre'] = '';
				$data = array('result' => '', 
						'error' => true, 
						'mensaje' => 'Error al registrar el paciente',
						'class' => 'alert alert-danger');
				$this->load->view('dashboard/menu', $user);
				$this->load->view('dashboard/paciente/registrar_paciente', $data);
				$this->load->view('dashboard/cierredashboard');			
			}else{
				$user['nombre'] = '';
				$data = array('result' => '', 
						'error' => true, 
						'mensaje' => 'Registro almacenado satisfactoriamente',
						'class' => 'alert alert-success');
				$this->load->view('dashboard/menu', $user);
				$this->load->view('dashboard/paciente/registrar_paciente', $data);
				$this->load->view('dashboard/cierredashboard');
			}
		}else{
			$user['nombre'] = '';
			$data = array('result' => '', 
					'error' => true, 
					'mensaje' => 'Error por campos',
					'class' => 'alert alert-danger');
			$this->load->view('dashboard/menu', $user);
			$this->load->view('dashboard/paciente/registrar_paciente', $data);
			$this->load->view('dashboard/cierredashboard');

		}
	}

	public function editarPaciente($id)
	{	
		$data = array('result' => '');
		if($id >= 0){
			$result = $this->Tbl_paciente_Model->findByPaciente($id);

			if($result){

				$user['nombre'] = '';
				$data = array('result' => $result, 
						'error' => true, 
						'mensaje' => 'Error al cargar los datos del paciente',
						'class' => 'alert alert-danger');
				$this->load->view('dashboard/menu', $user);
				$this->load->view('dashboard/paciente/editar_paciente', $data);
				$this->load->view('dashboard/cierredashboard');		
			
			}else{
				$data['result'] = $result;
				$this->load->view('dashboard/menu');
				$this->load->view('dashboard/paciente/editar_paciente', $data);
				$this->load->view('dashboard/cierredashboard');	
			}
		}

	}
	public function actualizar()
	{
		$id =  $this->input->post('id', TRUE);
		$fecharegform =  $this->input->post('fecha_reg', TRUE);
		$nombreform = $this->input->post('nombre', TRUE);
		$apellidosform = $this->input->post('apellidos', TRUE);
		$cedulaform = $this->input->post('cedula', TRUE);
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
		$tratamientoform = $this->input->post('tratamiento', TRUE);
		$diagnosticoform = $this->input->post('diagnostico', TRUE);
		$fecha_controlform = $this->input->post('fecha_control', TRUE);
		$medicamentoform = $this->input->post('medicamento', TRUE);

		$data = array('id_paciente' =>$id,
					'nombre' => $nombreform,
					'apellidos' => $apellidosform,
					'edad' => $edadform,
					'genero' => $generoform,
					'eps' => $epsform,
					'ocupacion' => $ocupacionform,
					'escolaridad' => $escolaridadform,
					'ciudad' => $ciudadform,
					'municipio' => $municipioform,
					'barrio' => $barrioform,
					'direccion' => $direccionform,
					'telefono' => $telefonoform,
					'peso' => $pesoform,
					'estatura' => $estaturaform,
					'fecha_nac' => $fecha_nacform,
					'fecha_reg' => $fecharegform,
					'descripcion' => $descripcionform,
					'diagnostico' => $diagnosticoform,
					'medicamento' => $medicamentoform,
					'estado' => 1,
					'fecha_control' => $fecha_controlform,
					'cedula' => $cedulaform,
					'tratamiento' => $tratamientoform);


		if($id && $nombreform && $apellidosform && $edadform && $generoform && $epsform &&
			$ocupacionform && $escolaridadform && $ciudadform && $municipioform && $barrioform &&
			$direccionform && $telefonoform && $pesoform && $estaturaform && $fecha_nacform &&
			$fecharegform && $descripcionform && $diagnosticoform && $tratamientoform && $medicamentoform &&
			$fecha_controlform && $cedulaform){

			$result = $this->Tbl_paciente_Model->updatePaciente($data, $id);
			if ($result){
				$user['nombre'] = '';
				$data = array('result' => '', 
						'error' => true, 
						'mensaje' => 'Registro actualizado satisfactoriamente',
						'class' => 'alert alert-success');
				$this->load->view('dashboard/menu', $user);
				$this->load->view('dashboard/paciente/registrar_paciente', $data);
				$this->load->view('dashboard/cierredashboard');
			}else{
				$user['nombre'] = '';
				$data = array('result' => '', 
						'error' => true, 
						'mensaje' => 'Registro actualizado satisfactoriamente',
						'class' => 'alert alert-danger');
				$this->load->view('dashboard/menu', $user);
				$this->load->view('dashboard/paciente/registrar_paciente', $data);
				$this->load->view('dashboard/cierredashboard');
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