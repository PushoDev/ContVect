<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!-- PAncarata superior navagar inter -->
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
                    <li class="breadcrumb-item active" aria-current="page">
                        Listado
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<hr>
<!-- Contenido -->
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title text-blue h4">
                <h4>Listado de Pacientes</h4>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    Otras Opciones
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" role="button" id="add_nuevo_paciente">Agreagr Nuevo</a>
                    <a class="dropdown-item" href="#" role="button" id="">Exportar PDF</a>
                    <a class="dropdown-item" href="#" role="button" id="">Exportar Excel</a>
                    <a class="dropdown-item" href="#" role="button" id="">Copiar Documento</a>
                </div>
            </div>
        </div>

        <!-- Tabla de los pacientes -->
        <div class="card card-body">
            <table class="table table-bordeless table-bordered table-hover table-striped table-sm" id="pacientes-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre y Apellidos</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Dirección Particular</th>
                        <th scope="col">CMF</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $key) : ?>
                        <tr>
                            <td scope="row"><?php echo $key->id ?></td>
                            <td scope="row"><?php echo $key->nombre_apellidos ?></td>
                            <td scope="row"><?php echo $key->edad ?></td>
                            <td scope="row"><?php echo $key->sexo ?></td>
                            <td scope="row"><?php echo $key->direccion_residencia ?></td>
                            <td scope="row"><?php echo $key->cmf ?></td>
                            <td scope="row">
                                <div class="table-actions align-content-center">
                                    <a href="<?php echo base_url('admin/paciente/edit_paciente/' . $key->id); ?>" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-edit2 btn btn-lg btn-primary" role="button" id="editar-paciente"></i></a>

                                    <a href="<?php echo "Eliminar Paciente"; ?>" data-color="#e95959" style="color: rgb(233, 89, 89);"><i class="icon-copy dw dw-delete-3 btn btn-lg btn-danger"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- fin de tabla -->
<hr>

<br>
<?php echo $totalPacientes; ?>


<!-- Estructura del modal -->
<?php include('modals/list-sind-modal-form.php'); ?>
<?php include('modals/edit-sind-modal-form.php'); ?>


<?= $this->endSection() ?>

<?= $this->section('stylesheets') ?>

<link rel="stylesheet" href="/backend/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/backend/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<script src="/backend/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="/backend/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="/backend/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script>
    // formulario de registro
    $(document).on('click', '#add_nuevo_paciente', function(e) {
        e.preventDefault();
        var modal = $('body').find('div#pacientes-modal');
        var modal_title = 'Formulario para nuevo paciente';
        var modal_btn_text = 'Agregar Paciente';
        modal.find('.modal-title').html(modal_title);
        modal.find('.modal-footer > button.action').html(modal_btn_text);
        modal.find('input.error-text').html('');
        modal.find('input[type="text"]').val('');
        modal.modal('show');
    });

    // Alerta para confirmar registro
    // $('#agg_paciente_form').on('submit', function(e) {
    //     e.preventDefault();
    //     var modal = $('body').find('div#pacientes-modal');
    //     alert ('Registrado correctamente');
    //     modal.modal('hide');
    // });

    // Ordenar tabla de pacientes
    var pacientesDT = $('#pacientes-table').DataTable({
        processing: true,
        ServerSide: true,

    });

    // Editar pacientes registrados
    // $(document).on('click', '#editar-paciente', function(e) {
    //     e.preventDefault();
    //     var id = $(this).data("id");
    //     var modal = $('body').find('div#edit-pacientes-modal');
    //     var modal_title = 'Editar paciente';
    //     var modal_btn_text = 'Guardar Cambios';
    //     modal.find('form').find('input[type="hidden"][name="id"]').val(id);
    //     modal.find('.modal-title').html(modal_title);
    //     modal.find('.modal-footer > button.action').html(modal_btn_text);
    //     modal.find('input.error-text').html('');
    //     modal.find('input[type="text"]').val('');
    //     modal.modal('show');

    //     // alert(id);
    //     // var url = "<php route_to('edit_paciente') ?>" ;
    //     // $.get(url,{id:id}, function(response){
    //     //     var modal_title = 'Editar paciente';
    //     //     var modal_btn_text = 'Guardar Cambios';
    //     //     var modal = $('body').find('div#edit-pacientes-modal');
    //     //     modal.find('form').find('input[type="hidden"][name="id"]').val(id);
    //     //     modal.find('.modal-title').html(modal_title);
    //     //     modal.find('.modal-footer > button.action').html(modal_btn_text);
    //     //     modal.find('input[type="text"]').val(response.data.name);
    //     //     modal.find('span.error-text').html('');
    //     //     modal.modal('show');
    //     // }, 'json');
    // });
</script>
<?= $this->endSection() ?>