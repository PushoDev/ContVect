<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>

<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Ingresar a ContVect</h2>
    </div>

    <?php $validation = \Config\Services::validation(); ?>
    <form action="<?= route_to('admin.login.handler') ?>" method="post">
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
        <div class="input-group custom">
            <input type="text" class="form-control form-control-lg" placeholder="Usuario o Email" name="login_id" value="<?= set_value('login_id') ?>" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
            </div>
        </div>
        <?php if ($validation->getError('login_id')) : ?>
            <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                <?= $validation->getError('login_id') ?>
            </div>
        <?php endif; ?>
        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="**********" name="password" value="<?= set_value('password') ?>" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>
        <?php if ($validation->getError('password')) : ?>
            <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                <?= $validation->getError('password') ?>
            </div>
        <?php endif; ?>
        <div class="row pb-30">
            <div class="col-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1">Recordar</label>
                </div>
            </div>
            <div class="col-6">
                <div class="forgot-password">
                    <a id="ajax-alert" href="<?= route_to('admin.forgot.form') ?>">Olvidaste tu contraseña</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group mb-0">

                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Ingresar">

                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>