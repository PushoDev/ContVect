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
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="<?= route_to('sindromes_febriles') ?>">Listado</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    Otras Opciones
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Agreagr Nuevo</a>
                    <a class="dropdown-item" href="#">Exportar PDF</a>
                    <a class="dropdown-item" href="#">Exportar Excel</a>
                    <a class="dropdown-item" href="#">Copiar Documento</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contenido -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4 align-center"><center>Listado de pacientes con Síntomas Febriles</center></h4>
    </div>
</div>

    <div class="row">
        <div class="col-sm-12">
            <div class="table table-responsive">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nombre y Apellidos</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Dirección Particular</th>
                        <th>CMF</th>
                        <th>Opciones</th>
                    </tr>
                    <?php foreach ($datos as $key) : ?>
                        <tr>
                            <td><?php echo $key->id ?></td>
                            <td><?php echo $key->nombre_apellidos ?></td>
                            <td><?php echo $key->edad ?></td>
                            <td><?php echo $key->sexo ?></td>
                            <td><?php echo $key->direccion_residencia ?></td>
                            <td><?php echo $key->cmf ?></td>
                            <td>
                                <div class="table-actions align-content-center">
                                    <a href="<?php echo route_to('febriles/editar_pacientes/$key->id'); ?>" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-edit2"></i></a>
                                    <a href="<?php echo "Eliminar Paciente"; ?>" data-color="#e95959" style="color: rgb(233, 89, 89);"><i class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <hr>

                <?php print_r($datos); ?>
            </div>
        </div>
    </div>



    <?= $this->endSection() ?>