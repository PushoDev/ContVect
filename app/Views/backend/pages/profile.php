
<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Perfíl de Usuario</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= route_to('admin.home') ?>">Resumen Generaal</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Perfíl
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">
            <div class="profile-photo">
                <a href="modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                <img src="<?= get_user()->picture == null ? '/assets/images/users/user.png' : '/assets/images/users/' . get_user()->picture ?>" alt="" class="avatar-photo ci-avatar-photo">

            </div>
            <h5 class="text-center h5 mb-0 ci-user-name"><?= get_user()->nombre ?></h5>
            <p class="text-center text-muted font-14 ci-user-email">
                <?= get_user()->email ?>
            </p>
            <p class="text-center text-blue-50 font-14">
                <?= get_user()->cargo ?>
            </p>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="card-box height-100-p overflow-hidden">
            <div class="profile-tab height-100-p">
                <div class="tab height-100-p">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#detalles_personales" role="tab">Detalles Personales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#cambiar_contrasena" role="tab">Cambiar Contraseña</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <!-- Datos de Usuario Tab start -->
                        <div class="tab-pane fade show active" role="tabpanel">
                            <div class="pd-20">

                                <?php $validation = \Config\Services::validation(); ?>
                                <form action="<?= route_to('update-personal-details'); ?>" method="POST" id="personal_details_from">
                                    <? csrf_field() ?>
                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('success') ?>
                                            <button type="button" class="close" data-dimiss="alert" aria-label="close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?= session()->getFlashdata('fail') ?>
                                            <button type="button" class="close" data-dimiss="alert" aria-label="close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>

                                    <input type="text" name="id" id="id" hidden>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nombre(s)</label>
                                                <input name="nombre" type="text" placeholder="Nombre(s)" value="<?= get_user()->nombre ?>" class="form-control form-control-lg">
                                            </div>
                                            <?php if ($validation->getError('nombre')) : ?>
                                                <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                                                    <?= $validation->getError('nombre') ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Apellidos</label>
                                                <input name="apellidos" type="text" placeholder="Apellidos" value="<?= get_user()->apellidos ?>" class="form-control form-control-lg">
                                            </div>
                                            <?php if ($validation->getError('apellidos')) : ?>
                                                <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                                                    <?= $validation->getError('apellidos') ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nombre de usuario</label>
                                                <input name="username" id="username" type="text" placeholder="Nick o Usuario" value="<?= get_user()->username ?>" class="form-control form-control-lg">
                                            </div>
                                            <?php if ($validation->getError('username')) : ?>
                                                <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                                                    <?= $validation->getError('username') ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Correo Electrónico</label>
                                                <input name="email" id="email" type="text" placeholder="Correo Electrónico" value="<?= get_user()->email ?>" class="form-control form-control-lg">
                                            </div>
                                            <?php if ($validation->getError('email')) : ?>
                                                <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                                                    <?= $validation->getError('email') ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Cargo o Especialidad</label>
                                                <input name="cargo" id="cargo" type="text" placeholder="Cargo o Especialidad" value="<?= get_user()->cargo ?>" class="form-control form-control-lg">
                                            </div>
                                            <?php if ($validation->getError('cargo')) : ?>
                                                <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                                                    <?= $validation->getError('cargo') ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Biografía</label>
                                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Biografia de trabajo..."><?= get_user()->bio ?></textarea>
                                        <span class="form-control-feedback has-danger"></span>
                                    </div>
                                    <button type="submit" class="btn btn-success"><i class="icon-copy bi bi-arrow-repeat"></i> Actualizar Datos</button>

                                </form>
                            </div>
                        </div>
                        <!-- Datos de Usuario Tab End -->
                        <!-- Cambiar Password -->
                        <div class="tab-pane fade" id="cambiar_contrasena" role="tabpanel">
                            <div class="pd-20 profile-task-wrap">
                                ------ cambiar contraseña -------
                            </div>
                        </div>
                        <!-- Password Tab End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    /*! function($) {
        "use strict";

        var SweetAlert = function() {};

        //Alerta para confirmar update de usuario
        SweetAlert.prototype.init = function() {
            $('#personal_details_from').on('submit', function(e) {
                e.preventDefault();
                
                swal({
                    position: 'top-end',
                    type: 'success',
                    title: 'Datos actualizados correctamente...',
                    showConfirmButton: false,
                    timer: 1500
                })
            });

        }
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
    }(window.jQuery),

    //initializing
    function($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery); */
</script>
<?= $this->endSection() ?>