<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
	
     <?php if($error) : ?>
		<div class="alert alert-success" role="alert" id="alert">
		    <center> <?php echo $mensaje; ?> </center>
		</div>
     <?php endif; ?>
     <center> <h3>Pacientes</h3></center>
     <button class="btn btn-primary" data-toggle="collapse" href="#Collapseregistrar" role="button" aria-expanded="false" aria-controls="registrar" id="registrar">Registrar</button>
     <button class="btn btn-primary" data-toggle="collapse" href="#Collapseconsultar" role="button" aria-expanded="false" aria-controls="consultar" id="consultar">Consultar</button>
     <style> #Collapseregistrar {margin: 10px; }</style>
  	<div class="collapse" id="Collapseregistrar">
  	<div class="card-personalizada">
		<form id="formRegistroPaciente" method="POST" action="<?=base_url();?>registrar/paciente">
        	<div class="container">
			<div class="row">
				<div class="col-xs-3 col-md-3">
					<div class="form-group">
						<label for="lbnombre">Nombre</label>
						<input type="text" class="form-control" placeholder="nombre" id="nombre" name="nombre" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbapellido">Apellidos</label>
						<input type="text" class="form-control" placeholder="apellidos" id="apellidos" name="apellidos" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbcedula">Cédula</label>
						<input type="number" class="form-control" id="cedula" name="cedula" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbedad">Edad</label>
						<input type="number" class="form-control"  id="edad" name="edad" required></input>
					</div> <!-- form-group -->
					<div class="form-group">	
						<label for="lbgenero">Género</label>
						 <div class="controls">										
						   <select  class="form-control" name="genero">					
								<option value="Masculino">Masculino</option>						  
								<option value="Femenino">Femenino</option>
							</select>
						  </div>
			    	</div> <!--form-group -->
					<div class="form-group">
						<label for="lbeps">Eps</label>
						<input type="text" class="form-control" placeholder="eps" id="eps" name="eps" required></input>
					</div> <!-- form-group -->					
				</div>	<!-- col-xs-4 col-md-4 -->			
				<div class="col-xs-3 col-md-3">														
					<div class="form-group">
						<label for="lbocupacion">Ocupación</label>
						<input type="text" class="form-control" placeholder="ocupacion" id="ocupacion" name="ocupacion" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbescolaridad">Escolaridad</label>
						<input type="text" class="form-control" placeholder="escolaridad" id="escolaridad" name="escolaridad" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbciudad">Ciudad</label>
						<input type="text" class="form-control" placeholder="ciudad" id="ciudad" name="ciudad" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbmunicipio">Municipio</label>
						<input type="text" class="form-control" placeholder="municipio" id="municipio" name="municipio" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbbarrio">Barrio</label>
						<input type="text" class="form-control" placeholder="barrio" id="barrio" name="barrio" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbapellido">Medicamentos</label>
						<input type="text" class="form-control" placeholder="medicamento" id="medicamento" name="medicamento" required></input>
					</div> <!-- form-group -->	
				</div> <!-- col-xs-3 col-md-3 -->
				<div class="col-xs-3 col-md-3">
					<div class="form-group">
						<label for="lbdireccion">Dirección</label>
						<input type="text" class="form-control" placeholder="direccion" id="direccion" name="direccion" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbtelefono">Teléfono</label>
						<input type="text" class="form-control" id="telefono" name="telefono" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbpeso">Peso</label>
						<input type="text" class="form-control" placeholder="peso" id="peso" name="peso" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbestatura">Estatura</label>
						<input type="text" class="form-control"  id="estatura" name="estatura" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbfechanac">Fecha nacimiento</label>
						<input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbcontrol">Fecha control</label>
						<input type="date" class="form-control" id="fecha_control" name="fecha_control" required></input>
					</div> <!-- form-group -->
				</div><!-- col-xs-3 col-md-3 --> 
				<div class="col-xs-3 col-md-3">
					<div class="form-group">
						<label for="lbdescripcion">Descripción </label>
						<textarea id="descripcion" name="descripcion" rows="4"></textarea>
					</div><!-- form-group -->
					<div class="form-group">
						<label for="lbdiagnostico">Diagnóstico </label>
						<textarea id="diagnostico" name="diagnostico" rows="4"></textarea>
					</div><!-- form-group -->
					<div class="form-group">
						<label for="lbdtratamiento">Tratamiento </label>
						<textarea id="tratamiento" name="tratamiento" rows="4"></textarea>
					</div><!-- form-group -->					
				</div><!-- col-xs-3 col-md-3 -->
				<div class="col-xs-12 col-md-12">
					<center>
						<button  type="submit" id="registrar" value="registrar" class="btn btn-primary btn-lg"> Guardar
						</button>						
					</center>
				</div> <!-- col-xs-12 col-md-12 -->
			</div>	 <!-- row --> 					
			</div>    <!-- container--> 
		</form>
		</div>  <!-- card-personalizada--> 
		</div>   <!-- collapse--> 

  	<div class="collapse" id="Collapseconsultar">
	  <div class="card-personalizada">
	  <div class="col-xs-3 col-md-3">
		<div class="form-group">
				<label for="lbfiltro"> Cédula</label>
				<input type="text" class="form-control" id="filtro" name="filtro" required></input>
				<button  type="submit" id="btfiltro" value="" class="btn btn-primary btn-lg"> Buscar
				</button>
			</div><!-- form-group -->
		</div><!-- col-xs-3 col-md-3 -->		  
		
	  	<?php if($result): ?>   <!-- validando consulta -->
	  </br></br>
	  <div class="table-responsive">
		    <table class="table table-bordered table-striped">	 <!-- mostrar tabla con resultados-->
		    	<thead>
					<th class="info">Id</th>
					<th class="info">Nombre</th>
					<th class="info">Apellidos</th>
					<th class="info">Edad</th>	
					<th class="info">Genero</th>	
					<th class="info">EPS</th>
					<th class="info">Peso</th>
					<th class="info">Estatura</th>
					<th class="info">Diagnóstico</th>
					<th class="info">Medicamento</th>
					<th class="info">Editar</th>					
					<th class="info">Eliminar</th>	
				</thead>
				<tbody>
					<?php foreach($result as $row): ?>
					<tr>
						<td><?php echo $row->id_paciente ?></td>
						<td><?php echo $row->nombre ?></td>
						<td><?php echo $row->apellidos ?></td>
						<td><?php echo $row->edad ?></td>
						<td><?php echo $row->genero ?></td>
						<td><?php echo $row->eps ?></td>
						<td><?php echo $row->peso ?></td>
						<td><?php echo $row->estatura ?></td>
						<td><?php echo $row->diagnostico ?></td>
						<td><?php echo $row->medicamento ?></td>
						<td>
						  <a class="btn-outline-primary" href="<?php echo base_url().'editar/paciente/'.$row->id_paciente?>"><i class="fa fa-pencil-square-o"></i></a>
						</td>
						<td>
						 <a class="btn-outline-danger" href="<?php echo base_url().'eliminar/paciente/'.$row->id_paciente?>"><i class=" fa fa-trash"></i></a>		
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php endif; ?> 
	  </div>  <!-- card-personalizada--> 
	</div>   <!-- collapse--> 
</div>     <!-- /#page-content-wrapper -->
