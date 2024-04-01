<div class="modal fade bs-example-modal-lg" id="pacientes-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<!-- Formulario -->
		<form class="modal-content tab-wizard wizard-circle id=" steps-uid-0" action="<?= route_to('agregar-paciente') ?>" method="post" id="agg_paciente_form">
			<div class="modal-header">
				<h4 class="modal-title text-blue" id="myLargeModalLabel">
					Modal para Agregar Pacientes
				</h4>
				<button type="button" class="close" data-dismiss=aria-hidden="true">
					×
				</button>
			</div>
			<div class="modal-body">
				<div class="wizard-content">

					<!-- Contenido del Modal -->
					<div class="pd-20 card-box">

						<div class="tab">
							<!-- botones superiores -->
							<ul class="nav nav-pills justify-content-end" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-blue active" data-toggle="tab" href="#home6" role="tab" aria-selected="false"><i class="icon-copy fa fa-user" aria-hidden="true"></i> Datos Personales</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-blue" data-toggle="tab" href="#profile6" role="tab" aria-selected="false"><i class="icon-copy fa fa-hospital-o" aria-hidden="true"></i> Registro Médico</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-blue" data-toggle="tab" href="#contact6" role="tab" aria-selected="true"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> Observaciones</a>
								</li>
							</ul>
							<hr>
							<div class="tab-content">
								<!-- datos personales -->
								<div class="tab-pane fade active show" id="home6" role="tabpanel">
									<div class="row">

										<div class="col-md-4 col-sm-12">
											<div class="form-group">
												<label>Fecha de Registro</label>
												<input type="text" class="form-control date-picker" placeholder="Fecha de Ingreso" name="fecha" id="fecha">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label for="nomre_apellidos">Nombre(s) y Apellidos</label>
												<input type="text" class="form-control" name="nombre_apellidos" id="nombre_apellidos">
											</div>
										</div>
										<div class="col-md-2 col-sm-12">
											<div class="form-group">
												<label for="edad">Edad</label>
												<input type="text" class="form-control" name="edad" id="edad">
											</div>
										</div>

									</div>
									<div class="row">

										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label>Sexo</label>
												<select class="custom-select" name="sexo" id="sexo">
													<option selected="">Seleccionar...</option>
													<option value="1">Masculino</option>
													<option value="2">Femenino</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label for="direccion_residencia">Dirección de Residencia</label>
												<input type="text" class="form-control" name="direccion_residencia" id="direccion_residencia">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label>Municipio</label>
												<input type="text" name="municipio" id="municipio" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- observaciones -->
								<div class="tab-pane fade" id="profile6" role="tabpanel">
									<div class="row">

										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Consultorio</label>
												<input type="text" class="form-control" name="cmf" id="cmf">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Área de Salud</label>
												<input type="text" class="form-control" name="areasalud" id="areasalud">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Hogar Visitado</label>
												<input type="text" class="form-control" name="hogar_visitado" id="hogar_visitado">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">GBT No.1</label>
												<input type="text" class="form-control" name="gbtuno" id="gbtuno">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">GBT No.2</label>
												<input type="text" class="form-control" name="gbtdos" id="gbtdos">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Ingresos</label>
												<input type="text" class="form-control" name="ingresos" id="ingresos">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Hospital</label>
												<input type="text" class="form-control" name="hospital" id="hospital">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Febriles</label>
												<input type="text" class="form-control" name="febriles" id="febriles">
											</div>
										</div>

									</div>
								</div>
								<!-- otros datos -->
								<div class="tab-pane fade" id="contact6" role="tabpanel">
									<div class="row">

										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Zika</label>
												<input type="text" class="form-control" name="zika" id="zika">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">Rangos</label>
												<input type="text" class="form-control" name="rangos" id="rangos">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label for="Consultorio">CMU</label>
												<input type="text" class="form-control" name="cmu" id="cmu">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label>Fecha de Alta</label>
												<input type="text" class="form-control date-picker" placeholder="Alta Médica" name="fecha_alta" id="fecha_alta">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label for="">Síntomas</label>
												<textarea name="sintomas" id="sintomas" cols="30" rows="10" class="form-control" placeholder="Síntomas del paciente..."></textarea>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label>Otros</label>
												<input type="text" class="form-control date-picker" placeholder="Otras Observaciones" name="otros" id="otros">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Fin del Contenido del Modal -->

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secdata-dismiss=" modal">
						Cancelar
					</button>
					<button type="submit" class="btn btn-primary action">
						Guardar
					</button>
				</div>
		</form>

	</div>
</div>