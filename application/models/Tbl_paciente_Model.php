<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_paciente_Model extends CI_model {

	/* function autores()
	{
		$query = $this->db->query("SELECT apellido FROM autores");
		return $query->result();
	}*/

	function savePaciente($nombre, $apellidos, $edad, $genero, $eps, $ocupacion, $escolaridad,
						  $ciudad, $municipio, $barrio, $direccion, $telefono, $peso,
						  $estatura, $fecha_nac, $fecha_reg, $descripcion, $diagnostico, $medicamento,
						  $estado, $fecha_control, $cedula, $tratamiento)
	{	
		$datos = array(
			'nombre' => $nombre,
			'apellidos' => $apellidos,
			'edad' => $edad,
			'genero' => $genero,
			'eps' => $eps,
			'ocupacion' => $ocupacion,
			'escolaridad' => $escolaridad,
			'ciudad' => $ciudad,
			'municipio' => $municipio,
			'barrio' => $barrio,
			'direccion' => $direccion,
			'telefono' => $telefono,
			'peso' => $peso,
			'estatura' => $estatura,
			'fecha_nac' => $fecha_nac,
			'fecha_reg' => $fecha_reg,
			'descripcion' => $descripcion,
			'diagnostico' => $diagnostico,
			'medicamento' => $medicamento,
			'estado' => $estado,
			'fecha_control' => $fecha_control,
			'cedula' => $cedula,
			'tratamiento' => $tratamiento
			);

		$this->db->insert('paciente', $datos);			
	}

	function updatePaciente($data, $idPaciente)
	{
		$this->db->where('id_paciente', $idPaciente);
        return $this->db->update('paciente', $data);	
    }

    function cambioEstadoTarea($idPaciente, $estado)
    {
    	$this->db->where('id_tarea', $idPaciente);
        return $this->db->update('estado', $estado);	
    }
    function deletePaciente($idPaciente)
    {
    	$this->db->where('id_paciente', $idPaciente);
        return $this->db->delete('paciente');	
    }

    function findPaciente()
	{

		$pacientes = $this->db->get("paciente");
		return $pacientes->result();
	}

	/*function findTareasUsuario($idUsuario)
	{

		$this->db->select('id_tarea, titulo, tarea.descripcion, tarea.id_usuario, estado, categoria.nombre');
		$this->db->from('tarea');
		$this->db->join('usuarios', 'usuarios.id_usuario = tarea.id_usuario');
		$this->db->join('categoria', 'categoria.id_categoria = tarea.id_categoriat');
		$this->db->where('usuarios.id_usuario', $idUsuario);

		$tareas = $this->db->get();

		if ($tareas->num_rows()>0) {
			
			return $tareas->result();
		}else{
			return FALSE;
		}
	}

	function findTareasCategoria($id_categoria)
	{

	$this->db->select('id_tarea, titulo, tarea.descripcion, tarea.id_usuario, estado, tarea.id_categoriat');
		$this->db->from('tarea');
		$this->db->join('categoria', 'categoria.id_categoria = tarea.id_categoriat');
		$this->db->where('categoria.id_categoria', $id_categoria);

		$tareas = $this->db->get();

		if ($tareas->num_rows()>0) {
			
			return $tareas->result();
		}else{
			return FALSE;
		}
	}

	function findTareasActivas($id_categoria)
	{

	$this->db->select('id_tarea, titulo, descripcion, id_usuario, estado, id_categoriat');
		$this->db->from('tarea');
		$this->db->distinct('estado', 'c');

		$tareas = $this->db->get();

		if ($tareas->num_rows()>0) {
			
			return $tareas->result();
		}else{
			return FALSE;
		}
	}*/

	function findByCedulaPaciente($cedula)
	{
		$this->db->select('*');
		$this->db->from('paciente');
		$this->db->where('cedula', $cedula);
		$paciente = $this->db->get();
		if ($paciente->num_rows()>0) {			
			return $paciente->result();
		}else{
			return FALSE;
		}
	}

	function findByPaciente($id)
	{
		$this->db->select('*');
		$this->db->from('paciente');
		$this->db->where('id_paciente', $id);
		$paciente = $this->db->get();
		if ($paciente->num_rows()>0) {			
			return $paciente->result();
		}else{
			return FALSE;
		}
	}
}