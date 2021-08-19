<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <div style="text-align: center;">
                <img class="brand-img" style="img-align:center" src="<?= base_url('assets/') ?>img/logo.png" alt="..." width="180px">
            </div><br/><br/>
            <div class="login-form">
                <form id="sign_in" method="POST" action="<?= base_url('auth'); ?>">

                    <div class="form-group form-floating-label">
						<input id="username" name="username" type="text" class="form-control input-border-bottom" required oninvalid="this.setCustomValidity('*Username wajib diisi!')" oninput="setCustomValidity('')">
						<label for="username" class="placeholder">Username</label>
					</div>
                    <?php //= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?></small>
                    <div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required oninvalid="this.setCustomValidity('*Password wajib diisi!')" oninput="setCustomValidity('')">
						<label  for="password" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
					</div>
                    <?php //= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?></small>
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                        </div>

                        <a href="#" class="link float-right">Forget Password ?</a>
                    </div>
                    <div class="form-group form-action-d-flex mb-3">
                        <button class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0" type="submit">Sign In</button>
                    </div>
                </form>
                <div class="login-account">
                    <span class="msg">Belum memiliki akun ?</span>
                    <a href="<?= base_url('auth/registration'); ?>" class="link">Daftar disini!</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <?= $this->session->flashdata('message'); ?>