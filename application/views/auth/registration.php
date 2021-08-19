<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-signup animated fadeIn">
            <div style="text-align: center;">
                <img class="brand-img" style="img-align:center" src="<?= base_url('assets/') ?>img/logo.png" alt="..." width="200px">
            </div><br/><br/>
            <div class="login-form">
                <form id="sign_in" method="POST" action="<?= base_url('auth/registration'); ?> ">
                    <div class="form-group form-floating-label">
                        <input id="name" name="name" type="text" class="form-control input-border-bottom" value="<?= set_value('name'); ?>">
                        <label for="name" class="placeholder">Fullname <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?></small></label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="username" name="username" type="username" class="form-control input-border-bottom" value="<?= set_value('username'); ?>">
                        <label for="username" class="placeholder">Username <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?></small></label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="text" class="form-control input-border-bottom" value="<?= set_value('email'); ?>">
                        <label for="email" class="placeholder">Email <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?></small></label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom">
                        <label for="password" class="placeholder">Password <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?></label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>
                    <div class="form-group form-action-d-flex mb-2">
                        <button href="#" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0">Sign Up</button>
                    </div>
                </form>
                <div class="login-account">
                    <span class="msg">Sudah menjadi Anggota ?</span>
                    <a href="<?= base_url('auth'); ?>" class="link">Login disini!</a>
                </div>
            </div>
        </div>
    </div>