<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header/header');?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/simple-sidebar.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styletable.css') ?>">
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-primary">Quiropraxia Inca </div>
      <div class="list-group list-group-flush">
        <a href="<?=base_url(); ?>Dashboard/usuarios" class="list-group-item list-group-item-action bg-dark text-white">Usuarios</a></li>
        <a href="<?=base_url(); ?>Dashboard/paciente" class="list-group-item list-group-item-action bg-dark text-white">Pacientes</a>
         <!-- <a href="<?=base_url(); ?>Dashboard/categorias" class="list-group-item list-group-item-action bg-dark text-white">Categorias</a>-->
        <a href="<?=base_url(); ?>Dashboard/salir" class="list-group-item list-group-item-action bg-dark text-white">Salir</a> 
        <img src="<?=base_url(); ?>assets/img/marca.png">

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
      <div id="page-content-wrapper">
         <h3><strong> <?php echo $nombre; ?> </strong></h3>

