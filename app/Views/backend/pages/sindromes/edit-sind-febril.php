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
            Nombre del paciente: <?php echo $nombre_apellidos ?>
        </p>
    </div>
    <!-- Contenido einput del formulario -->
    <form action="<?= route_to('update-paciente') ?>" method="post" class="form form-group">
        <!-- id del paciente oculto -->
        <input type="text" name="id" id="id" hidden value="<?php echo $id ?>" id="id" name="id">

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label class="text text-blue-50">Fecha de Ingreso</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label class="text text-blue-50">Nombre(s) y Apellidos</label>
                    <input type="text" class="form-control" value="<?php echo $nombre_apellidos ?>" id="nombre_apellidos" name="nombre_apellidos">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label class="text text-blue-50">Edad</label>
                    <input type="text" class="form-control" value="<?php echo $edad ?>" id="edad" name="edad">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>Sexo</label>
                    <input type="text" class="form-control" id="sexo" name="sexo">
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="form-group">
                    <label class="text text-blue-50">Dirección de Residencia</label>
                    <input type="text" class="form-control" value="<?php echo $direccion_residencia ?>" id="direccion_residencia" name="direccion_residencia">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label class="text text-blue-50">Consultorio MF</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>col-md-3</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>col-md-6</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>col-md-6</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>col-md-6</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>col-md-3</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>col-md-3</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>col-md-12</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>col-md-2</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>col-md-2</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>col-md-2</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>col-md-2</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>col-md-2</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>col-md-2</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
    </form>
</div>

<!-- respuesta de la base datos -->
<hr>
<?php print_r($respuesta); ?>

<?= $this->endSection() ?>

<?= $this->section('stylesheets') ?>
<link rel="stylesheet" href="/backend/src/plugins/jquery-steps/jquery.steps.css">
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="/backend/src/plugins/jquery-steps/jquery.steps.js"></script>
<?= $this->endSection() ?>