<div class="modal fade bs-example-modal-lg" id="pacientes-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<!-- Formulario -->
		<form class="modal-content tab-wizard wizard-circle id=" steps-uid-0">
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
							<ul class="nav nav-pills justify-content-end" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-blue active" data-toggle="tab" href="#home6" role="tab" aria-selected="false"><i class="icon-copy fa fa-user" aria-hidden="true"></i> Datos Personales</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-blue" data-toggle="tab" href="#profile6" role="tab" aria-selected="false"><i class="icon-copy fa fa-hospital-o" aria-hidden="true"></i> Observaciones</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-blue" data-toggle="tab" href="#contact6" role="tab" aria-selected="true"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> Otros Datos</a>
								</li>
							</ul>
							<hr>
							<div class="tab-content">
								<div class="tab-pane fade active show" id="home6" role="tabpanel">
									<div class="row">

										<div class="col-md-4 col-sm-12">
											<div class="form-group">
												<label>Fecha de Registro</label>
												<input type="text" class="form-control date-picker" placeholder="Fecha">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Nombre(s) y Apellidos</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-2 col-sm-12">
											<div class="form-group">
												<label>Edad</label>
												<input type="text" class="form-control">
											</div>
										</div>

									</div>
									<div class="row">

										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label>Sexo</label>
												<select class="custom-select">
													<option selected="">Seleccionar...</option>
													<option value="1">Masculino</option>
													<option value="2">Femenino</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label>Dirección de Residencia</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<div class="form-group">
												<label>Municipio</label>
												<input type="text" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="tab-pane fade" id="profile6" role="tabpanel">
									<div class="pd-20">
										----- DATOS DE SALUD -------
									</div>
								</div>
								<div class="tab-pane fade" id="contact6" role="tabpanel">
									<div class="pd-20">
										----- OTRAS OBSERVACIONES --------
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