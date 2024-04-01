<?php include('data/select.php'); ?>

<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- Pancarata superior navagar inter -->
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Listado de Pacientes</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= route_to('admin.home') ?>">Resumen Generaal</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="<?= route_to('sindromes_febriles') ?>">Listado</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Editar Paciente
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<!-- Formularo a trabajar -->
<div class="card card-body">
    <!-- Encabezado del formulario -->
    <div class="pull-left">
        <h4 class="text-blue h4">Editar Paciente</h4>
        <p class="mb-30 text-success">
            <?php echo $updated_at ?>
        </p>
    </div>
    <!-- Contenido einput del formulario -->
    <form action="<?= route_to('update-paciente') ?>" method="post" class="form form-group">
        <!-- id del paciente oculto -->
        <input type="text" name="id" id="id" hidden value="<?php echo $id ?>" id="id" name="id">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Fecha de Registro</label>
                    <input type="text" class="form-control date-picker" placeholder="Fecha de Ingreso" name="fecha" id="fecha" value="<?php echo $fecha ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="nomre_apellidos">Nombre(s) y Apellidos</label>
                    <input type="text" class="form-control" name="nombre_apellidos" id="nombre_apellidos" value="<?php echo $nombre_apellidos ?>">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="text" class="form-control" name="edad" id="edad" value="<?php echo $edad ?>">
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>Sexo</label>
                    <select class="custom-select" name="sexo" id="sexo" value="<?php echo $sexo ?>">
                        <option selected="">Seleccionar...</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="direccion_residencia">Dirección de Residencia</label>
                    <input type="text" class="form-control" name="direccion_residencia" id="direccion_residencia" value="<?php echo $direccion_residencia ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>Municipio</label>
                    <input type="text" name="municipio" id="municipio" class="form-control" value="<?php echo $municipio ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Consultorio</label>
                    <input type="text" class="form-control" name="cmf" id="cmf" value="<?php echo $cmf ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Área de Salud</label>
                    <input type="text" class="form-control" name="areasalud" id="areasalud" value="<?php echo $areasalud ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Hogar Visitado</label>
                    <input type="text" class="form-control" name="hogar_visitado" id="hogar_visitado" value="<?php echo $hogar_visitado ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">GBT No.1</label>
                    <input type="text" class="form-control" name="gbtuno" id="gbtuno" value="<?php echo $gbtuno ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">GBT No.2</label>
                    <input type="text" class="form-control" name="gbtdos" id="gbtdos" value="<?php echo $gbtdos ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Ingresos</label>
                    <input type="text" class="form-control" name="ingresos" id="ingresos" value="<?php echo $ingresos ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Hospital</label>
                    <input type="text" class="form-control" name="hospital" id="hospital" value="<?php echo $hospital ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Febriles</label>
                    <input type="text" class="form-control" name="febriles" id="febriles" value="<?php echo $febriles ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Zika</label>
                    <input type="text" class="form-control" name="zika" id="zika" value="<?php echo $zika ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">Rangos</label>
                    <input type="text" class="form-control" name="rangos" id="rangos" value="<?php echo $rangos ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label for="Consultorio">CMU</label>
                    <input type="text" class="form-control" name="cmu" id="cmu" value="<?php echo $cmu ?>">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>Fecha de Alta</label>
                    <input type="text" class="form-control date-picker" placeholder="Alta Médica" name="fecha_alta" id="fecha_alta" value="<?php echo $fecha_alta ?>">
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="">Síntomas</label>
                    <textarea name="sintomas" id="sintomas" cols="30" rows="10" class="form-control" placeholder="Síntomas del paciente..." value="<?php echo $sintomas ?>"></textarea>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Otros</label>
                    <input type="text" class="form-control date-picker" placeholder="Otras Observaciones" name="otros" id="otros" value="<?php echo $otros ?>">
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form form-group col-md-12">
                    <button type="submit" class="btn btn-warning btn-lg"><i class="icon-copy fa fa-superpowers" aria-hidden="true"></i> Actualizar datos del paciente</button>
                </div>
            </div>
        </div>

    </form>
</div>

<!-- respuesta de la base datos -->
<hr>


<?= $this->endSection() ?>

<?= $this->section('stylesheets') ?>
<link rel="stylesheet" href="/backend/src/plugins/jquery-steps/jquery.steps.css">
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="/backend/src/plugins/jquery-steps/jquery.steps.js"></script>
<?= $this->endSection() ?>