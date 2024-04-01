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
<hr>

<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">
            <div class="profile-photo">

                <a href="" onclick="event.preventDefault();document.getElementById('user_profile_file').click();" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                <input type="file" name="user_profile_file" id="user_profile_file" class="d d-none" style="opacity: 0;">
                <img src="<?= get_user()->picture == null ? '/assets/images/users/user.png' : '/assets/images/users/' . get_user()->picture ?>" alt="" class="avatar-photo ci-avatar-photo">

            </div>
            <h5 class="text-center h5 mb-0 ci-nombre"><?= get_user()->nombre ?></h5>
            <p class="text-center text-muted font-14 ci-user-email">
                <?= get_user()->email ?>
            </p>
            <p class="text-center text-blue-50 font-14 ci-user-cargo">
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
                        <div class="tab-pane fade show active" id="detalles_personales" role="tabpanel">
                            <div class="pd-20">

                                <form action="<?= route_to('update-personal-details'); ?>" method="post" id="formulario-detalles-personales">

                                    <?= csrf_field(); ?>

                                    <input type="text" name="id" id="id" hidden>

                                    <div class="row">
                                        <div class="col col-md-6">
                                            <div class="form form-group">
                                                <label for="" class="text text-blue-50">Nombre(s):</label>
                                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" value="<?= get_user()->nombre ?>">
                                                <span class="text text-danger error-text nombre_error"></span>
                                            </div>
                                        </div>

                                        <div class="col col-md-6">
                                            <div class="form form-group">
                                                <label for="" class="text text-blue-50">Apellidos:</label>
                                                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos paterno y materno" value="<?= get_user()->apellidos ?>">
                                                <span class="text text-danger error-text apellidos_error"></span>
                                            </div>
                                        </div>

                                        <div class="col col-md-6">
                                            <div class="form form-group">
                                                <label for="" class="text text-blue-50">Nick de Usuario</label>
                                                <input type="text" name="username" id="username" class="form form-control" placeholder="Nick de la Plataforma" value="<?= get_user()->username ?>">
                                                <span class="text text-danger error-text username_error"></span>
                                            </div>
                                        </div>

                                        <div class="col col-md-6">
                                            <div class="form form-group">
                                                <label for="" class="text text-blue-50">Cargo:</label>
                                                <input type="text" name="cargo" id="cargo" class="form form-control" placeholder="Cargo que desempeña" value="<?= get_user()->cargo ?>" <span class="text text-danger error-text cargo_error"></span>
                                            </div>
                                        </div>

                                        <div class="col col-md-12">
                                            <div class="form form-group">
                                                <label for="" class="text text-blue-50">Correo Electrónico:</label>
                                                <input type="text" name="email" id="email" class="form form-control" placeholder="Buzón de Trabajo" value="<?= get_user()->email ?>">
                                                <span class="text text-danger error-text email_error"></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text text-blue-50">Acerca de mi:</label>
                                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Biografia de trabajo..."><?= get_user()->bio ?></textarea>
                                        <span class="text text-danger error-text bio_error"></span>
                                    </div>

                                    <div class="form form-group">
                                        <button type="submit" class="btn btn-primary"><i class="icon-copy bi bi-arrow-repeat"></i> Guardar Cambios</button>
                                    </div>

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
<hr>

<?= $this->endSection() ?>

<?= $this->section('stylesheets') ?>
<link rel="stylesheet" href="/assets/ijabo/ijabo.min.css">
<link rel="stylesheet" href="/assets/ijaboCroopTool/ijaboCropTool.min.css">
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script src="/assets/ijabo/ijabo.min.js"></script>
<script src="/assets/ijabo/jquery.ijaboViewer.min.js"></script>
<script src="/assets/ijaboCroopTool/ijaboCropTool.min.js"></script>
<script src="/assets/ijaboCroopTool/jquery-1.7.1.min.js"></script>

<script>
    ! function($) {
        "use strict";

        var SweetAlert = function() {};

        //Alerta para confirmar update de usuario
        SweetAlert.prototype.init = function() {
            $('#').on('submit', function(e) {
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
    }(window.jQuery);
</script>
<?= $this->endSection() ?>