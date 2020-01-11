<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_controller extends CI_Controller {
	/**
	 **Cargar por defecto la vista del login 
	 */

	public function __construct()
    {
        parent::__construct(); 
       // $this->load->helper('helpers_helper');       
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
	public function usuarios()
	{
		$data = array('result' => '');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/usuarios/registrar_usuario', $data);
		$this->load->view('dashboard/cierredashboard');	
	}
	public function paciente()
	{
		$data = array('result' => '');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/paciente/registrarPaciente', $data);
		$this->load->view('dashboard/cierredashboard');	
	}

	public function salir()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}