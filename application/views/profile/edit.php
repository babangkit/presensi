<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
            <div class="page-header">
                <h4 class="page-title">Edit Profile</h4>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <div class="card-header">
                            <div class="row row-nav-line">
                                <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Edit Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $user['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Name" value="<?= $user['email']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="avatar avatar-xxl">
                                        <img src="<?= base_url('assets/user/'); ?><?= $user['image']; ?>" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="text-right mt-3 mb-3">
                                <button class="btn btn-success">Save</button>
                                <button class="btn btn-danger">Reset</button>
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