<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['Ingresar'] = 'Login_controller/ValidarIngreso';
$route['Dashboard'] = 'Dashboard_controller'; 
$route['Dashboard/usuarios'] = 'Dashboard_controller/usuarios';
$route['Dashboard/paciente'] = 'Dashboard_controller/pacientes';
$route['Dashboard/salir'] = 'Dashboard_controller/salir';

$route['registrar/usuario'] = 'Usuarios_controller/registrarUsuarios';
$route['editar/usuario/(:num)'] = 'Usuarios_controller/editarUsuarios/$1';
$route['actualizar/usuario'] = 'Usuarios_controller/editar';
$route['eliminar/usuario/(:num)'] = 'Usuarios_controller/eliminarUsuario/$1';

$route['registrar/paciente'] = 'Pacientes_controller/registrarPaciente';
$route['editar/paciente/(:num)'] = 'Pacientes_controller/editarPaciente/$1';
$route['actualizar/paciente'] = 'Pacientes_controller/actualizar';
$route['eliminar/paciente/(:num)'] = 'Pacientes_controller/eliminarPaciente/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
