<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
            <div class="page-header">
                <h4 class="page-title">Profile</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-profile card-secondary">
                        <div class="card-header" style="background-image: url('assets/img/blogpost.jpg')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="<?= base_url('assets/user/'); ?><?= $user['image']; ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name"><?= $user['name']; ?></div>
                                <?php
                                $role;
                                $role_id = $this->session->userdata('role_id');

                                if ($role_id == 1) {
                                    $role = 'Administrator';
                                } else {
                                    $role = 'Anggota';
                                }
                                ?>
                                <div class="job"><?= $role; ?></div>
                                <div class="desc">e-mail: <?= $user['email']; ?></div>

                                <div class="view-profile">
                                    <a href="<?= base_url('profile/edit'); ?>" class="btn btn-secondary btn-block">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row user-stats text-center">
                                <div class="col">
                                    <div class="number">125</div>
                                    <div class="title">Post</div>
                                </div>
                                <div class="col">
                                    <div class="number">25K</div>
                                    <div class="title">Followers</div>
                                </div>
                                <div class="col">
                                    <div class="number">134</div>
                                    <div class="title">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
</div>