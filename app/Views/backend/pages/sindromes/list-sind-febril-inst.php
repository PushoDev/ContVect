<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- Pancarta Superior -->


<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Listado de Pacientes</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= route_to('admin.home') ?>">Resumen General</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="<?= route_to('sindromes_febriles') ?>">Listado</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Nuevo Paciente
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    January 2018
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Export List</a>
                    <a class="dropdown-item" href="#">Policies</a>
                    <a class="dropdown-item" href="#">View Assets</a>
                </div>
            </div>
        </div>
    </div>
</div>
--------- INSERTAR NUEVO PACIENTE-------------
<!-- Formulario Especial -->

<?= $this->endSection() ?>