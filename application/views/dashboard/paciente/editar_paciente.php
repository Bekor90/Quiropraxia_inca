<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

	<center> <h3>Editar Paciente</h3></center>
  	<div class="card-personalizada">
	 <form id="formrEditarPaciente" method="POST" action="<?=base_url();?>actualizar/paciente">
		<?php foreach($result as $row): ?>	
        	<div class="container">
			<div class="row">
			<div class="col-xs-3 col-md-3">
			<input  type="hidden" value="<?php echo $row->id_paciente;?>" name="id" id="id">
			<input  type="hidden" value="<?php echo $row->fecha_reg;?>" name="fecha_reg" id="fecha_reg">
					<div class="form-group">
						<label for="lbnombre">Nombre</label>
						<input type="text" class="form-control" value="<?php echo $row->nombre;?>" id="nombre" name="nombre" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbapellido">Apellidos</label>
						<input type="text" class="form-control" value="<?php echo $row->apellidos;?>" id="apellidos" name="apellidos" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbcedula">Cédula</label>
						<input type="number" class="form-control" value="<?php echo $row->cedula;?>" id="cedula" name="cedula" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbedad">Edad</label>
						<input type="num" class="form-control" value="<?php echo $row->edad;?>"  id="edad" name="edad" required></input>
					</div> <!-- form-group -->
					<div class="form-group">	
						<label for="lbgenero">Género</label>
						 <div class="controls">										
						   <select class="form-control" name="genero">					
						   <?php if($row->genero == "Masculino") : ?>
								<option value="Masculino" selected="selected">Masculino</option>
								<option value="Femenino">Femenino</option>	
							<?php else: ?>					  
								<option value="Femenino" selected="selected">Femenino</option>
								<option value="Masculino">Masculino</option>	
							<?php endif; ?>					
							</select>
						  </div>
			    	</div> <!--form-group -->
					<div class="form-group">
						<label for="lbeps">Eps</label>
						<input type="text" class="form-control" value="<?php echo $row->eps;?>" id="eps" name="eps" required></input>
					</div> <!-- form-group -->					
				</div>	<!-- col-xs-4 col-md-4 -->			
				<div class="col-xs-3 col-md-3">														
					<div class="form-group">
						<label for="lbocupacion">Ocupación</label>
						<input type="text" class="form-control" value="<?php echo $row->ocupacion;?>" id="ocupacion" name="ocupacion" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbescolaridad">Escolaridad</label>
						<input type="text" class="form-control" value="<?php echo $row->escolaridad;?>" id="escolaridad" name="escolaridad" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbciudad">Ciudad</label>
						<input type="text" class="form-control" value="<?php echo $row->ciudad;?>" id="ciudad" name="ciudad" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbmunicipio">Municipio</label>
						<input type="text" class="form-control" value="<?php echo $row->municipio;?>" id="municipio" name="municipio" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbbarrio">Barrio</label>
						<input type="text" class="form-control" value="<?php echo $row->barrio;?>" id="barrio" name="barrio" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbapellido">Medicamentos</label>
						<input type="text" class="form-control" value="<?php echo $row->medicamento;?>" id="medicamento" name="medicamento" required></input>
					</div> <!-- form-group -->	
				</div> <!-- col-xs-3 col-md-3 -->
				<div class="col-xs-3 col-md-3">
					<div class="form-group">
						<label for="lbdireccion">Dirección</label>
						<input type="text" class="form-control" value="<?php echo $row->direccion;?>" id="direccion" name="direccion" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbtelefono">Teléfono</label>
						<input type="num" class="form-control" value="<?php echo $row->telefono;?>" id="telefono" name="telefono" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbpeso">Peso</label>
						<input type="num" class="form-control" value="<?php echo $row->peso;?>" id="peso" name="peso" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbestatura">Estatura</label>
						<input type="num" class="form-control" value="<?php echo $row->estatura;?>" id="estatura" name="estatura" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbfechanac">Fecha nacimiento</label>
						<input type="date" class="form-control" value="<?php echo $row->fecha_nac;?>" id="fecha_nac" name="fecha_nac" required></input>
					</div> <!-- form-group -->
					<div class="form-group">
						<label for="lbcontrol">Fecha control</label>
						<input type="date" class="form-control" id="fecha_control" name="fecha_control" required></input>
					</div> <!-- form-group -->
				</div><!-- col-xs-3 col-md-3 -->
				<div class="col-xs-3 col-md-3">
					<div class="form-group">
						<label for="lbdescripcion">Descripción </label>
						<textarea id="descripcion" name="descripcion" rows="4"><?php echo $row->descripcion;?></textarea>
					</div><!-- form-group -->
					<div class="form-group">
						<label for="lbdiagnostico">Diagnóstico </label>
						<textarea id="diagnostico" name="diagnostico" rows="4"><?php echo $row->diagnostico;?></textarea>
					</div><!-- form-group -->
					<div class="form-group">
						<label for="lbdtratamiento">Tratamiento </label>
						<textarea id="tratamiento" name="tratamiento" rows="4"></textarea>
					</div><!-- form-group -->
				</div> <!-- col-xs-3 col-md-3 -->
				<?php endforeach; ?>
			<div class="col-xs-12 col-md-12">
				<center>
					<button type="submit" id="actualizar" value="actualizar" class="btn btn-primary btn-lg"><span class="fas fa-save"></span> Actualizar
					</button>
				</center>
			</div> <!-- col-xs-12 col-md-12 -->			
		</div>	 <!-- row --> 					
		</div>    <!-- container--> 			
		</form>
		</div>  <!-- card-personalizada--> 
	
</div>     <!-- /#page-content-wrapper -->

