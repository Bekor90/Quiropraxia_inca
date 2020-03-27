<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');


function getUsuarios()
{
	$ci =& get_instance();
	$query= $ci->db->get('usuarios');
	return $query->result();
}

function getPacientes()
{
	$ci =& get_instance();

	$sql = "SELECT id_paciente, nombre, apellidos, edad, genero, eps, ocupacion, escolaridad, ciudad, municipio, barrio, direccion, telefono, peso, estatura, fecha_nac, fecha_reg, descripcion, diagnostico, medicamento, estado, fecha_control, cedula, tratamiento, enfermedad_actual
	  FROM quiropraxia_inca.paciente order by id_paciente DESC ";
	$query= $ci->db->query($sql);	
	return $query->result();
}

function getTareas()
{
	$ci =& get_instance();
	$id = $ci->session->userdata("user_id");
	$ci->load->model('Tbl_tarea_Model');
	if($id > 0){

		 $query= $ci->Tbl_tarea_Model->findTareasUsuario($id);		 
		 if($query){	
		 	return $query;
		 }else{
		 	return false;
		 }
	}
	return false;
}


?>