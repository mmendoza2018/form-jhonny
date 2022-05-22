<div class="wrapper">
	<section class="section-container">
		<!-- Page content-->
		<div class="content-wrapper">
			<div class="content-heading">
				<div>Persona Moral
					<!-- <small>Standard and custom elements for any form</small> -->
				</div>
			</div>
			<!-- START card-->
			<div class="card card-default">
               <div class="card-header"></div>
               <div class="card-body">
                  <form id="example-form" action="#">
                     <div style="panndig-right: 1em;">
                        <h4>Datos Generales<br><small></small></h4>
                        <section>
							<div class="row">

								<div class="form-group col-lg-2">
									<label class="control-label">Fecha:</label>
									<div class="input-group">
										<input name="fecha" id="fecha" value="" type="text" class="form-control datetimepicker" data-provide="datepicker" autocomplete="off">
									</div>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Referenciado a:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Contrato No:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Discrecionalidad:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Personalidad Juridica:</label>
									<input class="form-control" name="confirm-test" type="text" value="Moral" readonly="true">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Informacion del Cliente </strong>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">No Cliente:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre o Razón Social:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Subtipo Personalidad Juridica:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Tipo Cliente:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Datos de la persona Moral </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre Comercial:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">RFC:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Nacionalidad:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, '  class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', ' class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Fecha de Constitución:</label>
									<div class="input-group">
										<input name="fecha2" id="fecha2" value="" type="text" class="form-control datetimepicker" data-provide="datepicker" autocomplete="off">
									</div>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Giro:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Objeto Social:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">No. de Empleados:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Domicilio Fiscal </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Calle:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Exterior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Interior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Colonia:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Ciudad:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Delegación/ Municipio:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Estado:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Pais:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">CP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Domicilio Postal </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Calle:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Exterior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Interior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Colonia:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Ciudad:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Delegación/ Municipio:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Estado:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Pais:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">CP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

							</div>
                        </section>
						
                        <h4>Datos Legales<br><small></small></h4>
                        <section>
							<div class="row">
								<div class="form-group col-lg-3">
									<label class="control-label">Acta Constitutiva:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Nombre Notario:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">No Notario:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Datos de Incripcion RPP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Contacto dentro de la empresa </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Telefono:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Telefono:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Tel. Celular:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Puesto:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Email:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Director General de la empresa:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Datos Complementarios </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">La empresa capta recursos de terceros para su operación?:</label>
									<select name="status" class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario">
									<option value="" selected="selected">Seleccione una opción</option>
									<option value="Si">Si</option>
									<option value="No">No</option>
									</select>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Principal Proveedor de recursos?</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-5">
									<label class="control-label">Observaciones:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Datos de los accionistas </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Género:</label>
									<select name="status" class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario">
									<option value="" selected="selected">Seleccione una opción</option>
									<option value="Maculino">Maculino</option>
									<option value="Femenino">Femenino</option>
									</select>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">RFC:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">CURP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Estado civil:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Fecha de nacimiento:</label>
									<div class="input-group">
										<input name="fecha3" id="fecha3" value="" type="text" class="form-control datetimepicker" data-provide="datepicker" autocomplete="off">
									</div>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nacionalidad:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Pais de Nacimiento:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Entidad Federativa:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Domicilio </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Calle:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Exterior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Interior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Colonia:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">CP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Ciudad:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Delegación/ Municipio:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Estado:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Pais:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Datos Legales </strong>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">No de Acta:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre Notario:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">No Notario:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Datos de Incripcion RPP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Otros </strong>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Responsable Fiscal en USA?:</label>
									<select name="status" class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario">
									<option value="" selected="selected">Seleccione una opción</option>
									<option value="Si">Si</option>
									<option value="No">No</option>
									</select>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">TIN:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Participacion Accionaria %:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Es PEPS:</label>
									<select name="status" class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario">
									<option value="" selected="selected">Seleccione una opción</option>
									<option value="Si">Si</option>
									<option value="No">No</option>
									</select>
								</div>
								
							</div>
                        </section>
                        <h4>Apoderados Legales<br><small></small></h4>
                         <section>
							<div class="row">

								<div class="form-group col-lg-2">
									<label class="control-label">Tipo de Firma:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Género:</label>
									<select name="status" class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario">
									<option value="" selected="selected">Seleccione una opción</option>
									<option value="Maculino">Maculino</option>
									<option value="Femenino">Femenino</option>
									</select>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">RFC:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">CURP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Estado civil:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Fecha de nacimiento:</label>
									<div class="input-group">
										<input name="fecha4" id="fecha4" value="" type="text" class="form-control datetimepicker" data-provide="datepicker" autocomplete="off">
									</div>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Nacionalidad:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Pais de Nacimiento:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Entidad Federativa:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Domicilio </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Calle:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Exterior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Interior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Colonia:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">CP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Ciudad:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Delegación/ Municipio:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Estado:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Pais:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Datos Legales </strong>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">No de Acta:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre Notario:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">No Notario:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Datos de Incripcion RPP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Es PEPS:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Principales funcionarios </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Nombre:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Género:</label>
									<select name="status" class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario">
									<option value="" selected="selected">Seleccione una opción</option>
									<option value="Maculino">Maculino</option>
									<option value="Femenino">Femenino</option>
									</select>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">RFC:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">CURP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Estado civil:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Fecha de nacimiento:</label>
									<div class="input-group">
										<input name="fecha5" id="fecha5" value="" type="text" class="form-control datetimepicker" data-provide="datepicker" autocomplete="off">
									</div>
								</div>

								<div class="form-group col-lg-2">
									<label class="control-label">Nacionalidad:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Pais de Nacimiento:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Entidad Federativa:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<strong class="campo_obli"> Domicilio </strong>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Calle:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Exterior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-1">
									<label class="control-label">No. Interior:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Colonia:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">CP:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Ciudad:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Delegación/ Municipio:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Estado:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Pais:</label>
									<div>
										<!-- SELECT2-->
										<?php if (isset($status)) {
											echo form_dropdown('status', $countries, $status, 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} else {
											echo form_dropdown('status', $countries, '', 'class="form-control" id="status" data-requerido="1" title="Se requiere el estatus del cliente/usuario"');
										} ?>
										<!-- END SELECT2-->
									</div>
								</div>
								
							</div>
                        </section>
                        <h4>Distribucion del Patrimonio (montos aproximados)<br><small></small></h4>
                        <section>
							<strong class="campo_obli"> Valor total del Patrimonio: $<spm id="totalPatrimonio"> 00.00</spm> </strong>

							<div class="table-responsive table-bordered">
								<table class="table">
									<thead>
										<tr style="background-color:#343a40;border-color:#454d55">
											<th colspan="2" style="color: #fff;">Inversión Moneda Nacional</th>
											<th colspan="2" style="color: #fff;">Inversión Moneda Extranjera</th>
											<th colspan="2" style="color: #fff;">Otros Activos</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Instrumentos Deuda MN</td>
											<td><input class="form-control" name="column1-1" id="column1-1" type="number" value="0.00" onfocusout="inversionMonedaNacional();"></td>
											<td>Instrumentos Deuda ME</td>
											<td><input class="form-control" name="column2-1" id="column2-1" type="number" value="0.00" onfocusout="inversionMonedaExtranjera();"></td>
											<td>Empresa Propia</td>
											<td><input class="form-control" name="column3-1" id="column3-1"  type="number" value="0.00" onfocusout="otrosActivos();"></td>
										</tr>
										<tr>
											<td>Sociedades de Inversion Deuda MN</td>
											<td><input class="form-control" name="column1-2" id="column1-2" type="number" value="0.00" onfocusout="inversionMonedaNacional();"></td>
											<td>Sociedades de Inversion Deuda ME</td>
											<td><input class="form-control" name="column2-2" id="column2-2" type="number" value="0.00" onfocusout="inversionMonedaExtranjera();"></td>
											<td>Otros Bienes raices</td>
											<td><input class="form-control" name="column3-2" id="column3-2" type="number" value="0.00" onfocusout="otrosActivos();"></td>
										</tr>
										<tr>
											<td>Intrumentos Renta variable MN</td>
											<td><input class="form-control" name="column1-3" id="column1-3" type="number" value="0.00" onfocusout="inversionMonedaNacional();"></td>
											<td>Intrumentos Renta variable ME</td>
											<td><input class="form-control" name="column2-3" id="column2-3" type="number" value="0.00" onfocusout="inversionMonedaExtranjera();"></td>
											<td>Casa Habitación</td>
											<td><input class="form-control" name="column3-3" id="column3-3" type="number" value="0.00" onfocusout="otrosActivos();"></td>
										</tr>
										<tr>
											<td>Sociedades de Inversión renta variable MN</td>
											<td><input class="form-control" name="column1-4" id="column1-4" type="number" value="0.00" onfocusout="inversionMonedaNacional();"></td>
											<td>Sociedades de Inversión renta variable ME</td>
											<td><input class="form-control" name="column2-4" id="column2-4" type="number" value="0.00" onfocusout="inversionMonedaExtranjera();"></td>
											<td>Obras arte</td>
											<td><input class="form-control" name="column3-4" id="column3-4" type="number" value="0.00" onfocusout="otrosActivos();"></td>
										</tr>
										<tr>
											<td>Instrumentos Bancarios MN</td>
											<td><input class="form-control" name="column1-5" id="column1-5" type="number" value="0.00" onfocusout="inversionMonedaNacional();"></td>
											<td>Instrumentos Bancarios ME</td>
											<td><input class="form-control" name="column2-5" id="column2-5" type="number" value="0.00" onfocusout="inversionMonedaExtranjera();"></td>
											<td>Vehiculos</td>
											<td><input class="form-control" name="column3-5" id="column3-5" type="number" value="0.00" onfocusout="otrosActivos();"></td>
										</tr>
										<tr>
											<td>Derivados/ Fores MN</td>
											<td><input class="form-control" name="column1-6" id="column1-6" type="number" value="0.00" onfocusout="inversionMonedaNacional();"></td>
											<td>Derivados/ Fores ME</td>
											<td><input class="form-control" name="column2-6" id="column2-6" type="number" value="0.00" onfocusout="inversionMonedaExtranjera();"></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td><b>Total MN</b></td>
											<td><input class="form-control" name="column1-7" id="column1-7" type="number" value="0.00" readonly></td>
											<td><b>Total ME</b></td>
											<td><input class="form-control" name="column2-7" id="column2-7" type="number" value="0.00" readonly></td>
											<td><b>Total Otros</b></td>
											<td><input class="form-control" name="column3-7" id="column3-7" type="number" value="0.00" readonly></td>
										</tr>
									</tbody>
								</table>
							</div>
							<br>

							<strong class="campo_obli"> EXPERIENCIA EN INVERSIONES </strong><br><br>

							<div class="table-responsive table-bordered">
								<table class="table">
									<thead>
										<tr style="background-color:#343a40;border-color:#454d55">
											<th colspan="2" style="color: #fff;"></th>
											<th style="color: #fff;">Moneda Nacional</th>
											<th style="color: #fff;">Años</th>
											<th style="color: #fff;">Moneda Extranjera</th>
											<th style="color: #fff;">Años</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="2">Instrumentos de Deuda</td>
											<td>Moderada</td>
											<td>5</td>
											<td>Nula</td>
											<td>0</td>
										</tr>
										<tr>
											<td colspan="2">Sociedades de Inversion de deuda</td>
											<td>Moderada</td>
											<td>5</td>
											<td>Nula</td>
											<td>0</td>
										</tr>
										<tr>
											<td colspan="2">Instrumentos de renta variable</td>
											<td>Moderada</td>
											<td>5</td>
											<td>Nula</td>
											<td>0</td>
										</tr>
										<tr>
											<td colspan="2">Sociedades de Inversión renta variable</td>
											<td>Moderada</td>
											<td>5</td>
											<td>Nula</td>
											<td>0</td>
										</tr>
										<tr>
											<td colspan="2">Sociedades de Inversión cobertura</td>
											<td>Moderada</td>
											<td>5</td>
											<td>Nula</td>
											<td>0</td>
										</tr>
										<tr>
											<td colspan="2">Instrumentos Bancarios (pagare)</td>
											<td>Moderada</td>
											<td>5</td>
											<td>Nula</td>
											<td>0</td>
										</tr>
										<tr>
											<td colspan="2">Derivados</td>
											<td>Moderada</td>
											<td>5</td>
											<td>Nula</td>
											<td>0</td>
										</tr>
									</tbody>
								</table>
							</div>
							<br>
							
                        </section>
						<h4>Objetivos de Inversión<br><small></small></h4>
                        <section>
							<div class="row">
								<div class="form-group col-lg-12">
									<label class="control-label">HORIZONTE DE INVERSION</label>
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Mi nececidad de Liquidez:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Horizonte de Inversión:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Tolerancia al riesgo:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<label class="control-label">Entiendo que a mayor plazo, mayor rendimiento. Qué porcentaje de Inversión destinaré a:</label>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">1 Año:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">3 Año:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">5 Año:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">7 Año:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Experiencia en servicios de Inversión asesorados:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Experiencia en servicios de Inversión no asesorados:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Portafolio Ideal:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Conocimientos en temas de Inversión:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-4">
									<label class="control-label">Porcentaje a Invertir en Mercado de capitales:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>
							</div>
                        </section>
						<h4>Perfil Transaccional de la Cuenta<br><small></small></h4>
                        <section>
							<div class="row">

								<div class="form-group col-lg-12">
									<label class="control-label">PERFIL TRANSACCIONAL DE LA CUENTA</label>
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">No. Maximo de Depositos:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Máximo de Depositos ($):</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">No. Máximo de Retiros:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Máximo de Retiros($):</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Tipo de operaciones esperadas:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-3">
									<label class="control-label">Principal propósito de la cuenta:</label>
									<input class="form-control" name="confirm-test" type="text">
								</div>

								<div class="form-group col-lg-12">
									<label class="control-label">Relacion de Cuentas</label>
								</div>

								<div class="table-responsive table-bordered">
									<table class="table">
										<thead>
											<tr style="background-color:#343a40;border-color:#454d55">
												<th style="color: #fff;" class="text-center">Contrato de IB</th>
												<th style="color: #fff;" class="text-center">Internediario</th>
												<th style="color: #fff;" class="text-center">Cuenta de Inversión</th>
												<th style="color: #fff;" class="text-center">Cuenta de Bancaria</th>
												<th style="color: #fff;" class="text-center">Institución Bancaria</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input class="form-control" name="confirm-test" type="text"></td>
												<td><input class="form-control" name="confirm-test" type="text"></td>
												<td><input class="form-control" name="confirm-test" type="text"></td>
												<td><input class="form-control" name="confirm-test" type="text"></td>
												<td><input class="form-control" name="confirm-test" type="text"></td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
                        </section>
                     </div>
                  </form>
				  
               </div>
            </div>
			<!-- END card-->
		</div>
	</section>
</div>
<script src="http://localhost/kyc-asesores/assets/vendor/modernizr/modernizr.custom.js"></script><!-- STORAGE API-->
<script src="http://localhost/kyc-asesores/assets/vendor/js-storage/js.storage.js"></script><!-- SCREENFULL-->
<script src="http://localhost/kyc-asesores/assets/vendor/screenfull/dist/screenfull.js"></script><!-- i18next-->
<script src="http://localhost/kyc-asesores/assets/vendor/i18next/i18next.js"></script>
<script src="http://localhost/kyc-asesores/assets/vendor/i18next-xhr-backend/i18nextXHRBackend.js"></script>
<script src="http://localhost/kyc-asesores/assets/vendor/jquery/dist/jquery.js"></script>
<script src="http://localhost/kyc-asesores/assets/vendor/popper.js/dist/umd/popper.js"></script>
<script src="http://localhost/kyc-asesores/assets/vendor/bootstrap/dist/js/bootstrap.js"></script><!-- =============== PAGE http://localhost/kyc-asesores/assets/VENDOR SCRIPTS ===============-->
<!-- JQUERY VALIDATE-->
<script src="http://localhost/kyc-asesores/assets/vendor/jquery-validation/dist/jquery.validate.js"></script>
<script src="http://localhost/kyc-asesores/assets/vendor/jquery-validation/dist/additional-methods.js"></script><!-- JQUERY STEPS-->
<script src="http://localhost/kyc-asesores/assets/vendor/jquery-steps/build/jquery.steps.js"></script><!-- =============== APP SCRIPTS ===============-->