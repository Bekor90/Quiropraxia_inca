<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
	
     <?php if($error) : ?>
		<div class="alert alert-success" role="alert" id="alert">
		    <center> <?php echo $mensaje; ?> </center>
		</div>
     <?php endif; ?>
     <center> <h3>Pacientes</h3></center>
     <button class="btn btn-primary" data-toggle="collapse" href="#Collapseregistrar" role="button" aria-expanded="false" aria-controls="registrar" id="registrar">
	 <span class="fas fa-user-plus"></span>  Registrar</button>
     <button class="btn btn-primary" data-toggle="collapse" href="#Collapseconsultar" role="button" aria-expanded="false" aria-controls="consultar" id="consultar">
	 <span class="fas fa-book-open"></span>  Consultar</button>
	 <button class="btn btn-primary" data-toggle="collapse" href="#Collapsetodos" role="button" aria-expanded="false" aria-controls="consultar" id="todos">
	 <span class="fas fa-book-open"></span> Listar todos</button>
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
						<button  type="submit" id="registrar" value="registrar" class="btn btn-primary btn-lg"><span class="fas fa-save"></span> Guardar
						</button>						
					</center>
				</div> <!-- col-xs-12 col-md-12 -->
			</div>	 <!-- row --> 					
			</div>    <!-- container--> 
		</form>
		</div>  <!-- card-personalizada--> 
		</div>   <!-- collapse--> 

  	<div class="collapse" id="Collapseconsultar">
	  <div class="col-xs-12 col-md-12">
	  <div class="col-xs-3 col-md-3">
		<div class="form-group">
			<label id="lbfiltro"><strong> Cédula:</strong></label>
			<input type="number" class="form-control" id="filtro" name="filtro" required></input>
		</div><!-- form-group -->	
		</div><!-- col-xs-3 col-md-3 -->				
		<div class="col-xs-6 col-md-6">
			<div class="form-group">
				<button  type="submit" id="btfiltro" value="" class="btn btn-primary btn-lg"><span class="fa fa-search"></span> Buscar
				</button>			
				<button  type="submit" id="btlimpiar" value="" class="btn btn-primary btn-lg"><span class="fas fa-broom"></span> Limpiar
				</button>
			</div>
		</div><!-- col-xs-6 col-md-6 -->							
	  </div><!-- col-xs-12 col-md-12 -->
	  <div class="card-personalizada" id="cardpersonalizada">		
		<div class="container" id="information" style="display: none;">	
			<div class="card-header">
			  <h2><span class="fas fa-user"></span><strong> Información del paciente</strong></h2>
			</div>
			<div class="row">
				<div class="col-xs-3 col-md-3" style="margin-top: 20px;">
					<div class="form-group">
						<input type="hidden" name="idpaciente" id="idpaciente">
						<label for="lbnombre"><strong>Nombre: </strong></label>		
						<label id="infnombre"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbgenero"><strong>Genero: </strong></label>		
						<label id="infgenero"></label>					
					</div> <!-- form-group -->					
					<div class="form-group">
						<label for="lbciudad"><strong>Ciudad: </strong></label>		
						<label id="infciudad"></label>					
					</div> <!-- form-group -->	
					<div class="form-group">
						<label for="lbtelefono"><strong>Telefono: </strong></label>		
						<label id="inftelefono"></label>					
					</div> <!-- form-group -->							
					<div class="form-group">
						<label for="lbfecnaci"><strong>Fecha naci: </strong></label>		
						<label id="infecnaci"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
					 <button type="submit" id="btdescripcion" class="btn btn-info"><span class="far fa-eye"></span> Ver Descripción</button>
					</div> <!-- form-group -->			
				</div>	<!-- col-xs-3 col-md-3 -->						
				<div class="col-xs-3 col-md-3" style="margin-top: 20px;">														
					<div class="form-group">
						<label for="lbapellidos"><strong>Apellidos: </strong></label>		
						<label id="infapellidos"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbeps"><strong>Eps: </strong></label>		
						<label id="infeps"></label>					
					</div> <!-- form-group -->				
					<div class="form-group">
						<label for="lbmunicipio"><strong>Municipio: </strong></label>		
						<label id="infmunicipio"></label>					
					</div> <!-- form-group -->		
					<div class="form-group">	
						<label for="lbescolaridad"><strong>Escolaridad: </strong></label>		
						<label id="infescolaridad"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbfeccontrol"><strong>Fecha control: </strong></label>		
						<label id="infeccontrol"></label>					
					</div> <!-- form-group -->								
				</div> <!-- col-xs-3 col-md-3 -->
				<div class="col-xs-3 col-md-3" style="margin-top: 20px;">
					<div class="form-group">
						<label for="lbcedula"><strong>Cédula: </strong></label>		
						<label id="infcedula"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbestatura"><strong>Estatura: </strong></label>		
						<label id="infestatura"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbbarrio"><strong>Barrio: </strong></label>		
						<label id="infbarrio"></label>					
					</div> <!-- form-group -->	
					<div class="form-group">
						<label for="lbocupa"><strong>Ocupación: </strong></label>		
						<label id="infocupa"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
					 <button type="submit" id="btdiagnostico" class="btn btn-info"><span class="far fa-eye"></span> Ver Diagnóstico</button>
					</div> <!-- form-group -->							
				</div><!-- col-xs-3 col-md-3 --> 
				<div class="col-xs-3 col-md-3" style="margin-top: 20px;">	
					<div class="form-group">
						<label for="lbedad"><strong>Edad: </strong></label>		
						<label id="infedad"></label>					
					</div> <!-- form-group -->
					<div class="form-group">				
						<label for="lbpeso"><strong>Peso: </strong></label>		
						<label id="infpeso"></label>					
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbdireccion"><strong>Direccion: </strong></label>		
						<label id="infdireccion"></label>					
					</div> <!-- form-group -->	
					<div class="form-group">
						<label for="lbmedicamento"><strong>Medicamento: </strong></label>		
						<label id="infmedicamento"></label>					
					</div> <!-- form-group -->	
					<div class="form-group">
					 <button type="submit" id="bttratamiento" class="btn btn-info"><span class="far fa-eye"></span> Ver Tratamiento</button>
					</div> <!-- form-group -->	
				</div><!-- col-xs-3 col-md-3 -->
				<div class="col-xs-12 col-md-12" id="textdiagnostico" style="display: none">				
					<label for="lbdiagnostico"><strong>Diagnóstico</strong></label>
					<textarea id="txtdiagnostico" name="descripcion" rows="4" style="width:100%"></textarea>				
				</div> <!-- col-xs-12 col-md-12 -->
				<div class="col-xs-12 col-md-12" id="textdescripcion" style="display: none">				
					<label for="lbdescripcion"><strong>Descripción</strong></label>
					<textarea id="txtdescripcion" name="descripcion" rows="4" style="width:100%"></textarea>		
				</div> <!-- col-xs-12 col-md-12 -->
				<div class="col-xs-12 col-md-12" id="texttratamiento" style="display: none">				
					<label for="lbtratamiento"><strong>Tratamiento</strong></label>
					<textarea id="txttratamiento" name="tratamiento" rows="4" style="width:100%"></textarea>		
				</div> <!-- col-xs-12 col-md-12 -->
				<div class="col-xs-12 col-md-12" style="margin-top: 50px;">
					<center>
						<button  type="submit" id="btactualizar" value="" class="btn btn-primary btn-lg"><span class="fas fa-pencil-alt"> Actualizar
						</button>	
						<button  type="submit" id="bteliminar" value="" class="btn btn-danger btn-lg"><span class="fas fa-trash"> Eliminar
						</button>						
					</center>
			    </div> <!-- col-xs-12 col-md-12 -->
			</div>	 <!-- row --> 				
			</div>    <!-- container--> 

	  </div>  <!-- card-personalizada--> 
	</div>   <!-- collapse--> 

	<div class="collapse" id="Collapsetodos">
	  <div class="card-personalizada">
	  	<?php $result = getPacientes();?>
		  <?php if($result): ?>   <!-- validando consulta -->			
	  </br></br>			
	  <div class="table-responsive">			
		    <table class="table table-bordered table-striped">	 <!-- mostrar tabla con resultados-->			
		    	<thead>				
					<th class="info">Id</th>
					<th class="info">Cédula</th>		 		
					<th class="info">Nombre</th>				
					<th class="info">Apellidos</th>					
					<th class="info">Edad</th>							
					<th class="info">Genero</th>
					<th class="info">Peso</th>						
					<th class="info">Estatura</th>
					<th class="info">Diagnóstico</th>								
					<th class="info">Medicamento</th>
					<th class="info">Tratamiento</th>								
					<th class="info">EPS</th>
					<th class="info">Ocupación</th>	
					<th class="info">Escolaridad</th>	
					<th class="info">Ciudad</th>
					<th class="info">Municipio</th>	
					<th class="info">Barrio</th>	
					<th class="info">Direccion</th>	
					<th class="info">Telefono</th>				
					<th class="info">Fecha_nac</th>			
					<th class="info">Fecha_reg</th>	
					<th class="info">Fecha_control</th>	
					<th class="info">Descripcion</th>																
					<th class="info">Editar</th>												
					<th class="info">Eliminar</th>							
				</thead>								
				<tbody>										
					<?php foreach($result as $row): ?>						
					<tr>						<div class="form-group">
						<td><?php echo $row->id_paciente ?></td>
						<td><?php echo $row->cedula ?></td>								
						<td><?php echo $row->nombre ?></td>											
						<td><?php echo $row->apellidos ?></td>										
						<td><?php echo $row->edad ?></td>					
						<td><?php echo $row->genero ?></td>
						<td><?php echo $row->peso ?></td>						
						<td><?php echo $row->estatura ?></td>
						<td><?php echo $row->diagnostico ?></td>
						<td><?php echo $row->medicamento ?></td>
						<td><?php echo $row->tratamiento ?></td>									
						<td><?php echo $row->eps ?></td>
						<td><?php echo $row->ocupacion ?></td>
						<td><?php echo $row->escolaridad ?></td>										
						<td><?php echo $row->ciudad ?></td>	
						<td><?php echo $row->municipio ?></td>
						<td><?php echo $row->barrio ?></td>
						<td><?php echo $row->direccion ?></td>
						<td><?php echo $row->telefono ?></td>
						<td><?php echo $row->fecha_nac ?></td>
						<td><?php echo $row->fecha_reg ?></td>
						<td><?php echo $row->fecha_control ?></td>
						<td><?php echo $row->descripcion ?></td>
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
		</div>  <!-- card-personalizada listar todos--> 
	</div>   <!-- collapse   listar todos--> 
	
</div>     <!-- /#page-content-wrapper -->
