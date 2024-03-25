<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- Pancarta Superior -->
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
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
                        Actualizar Paciente
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
--------- ACTUALIZAR PACIENTE -------------
<?= $this->endSection() ?>