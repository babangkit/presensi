<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
				<h4 class="page-title">Management Submenu</h4>

			</div>
			<div class="row">
						<div class="col-md">
							<div class="card">
								<div class="card-body">
                                    
									<?= form_error('title', '<div class="alert alert-danger" role="alert">', ' </div>');?>
									<?= form_error('menu_id', '<div class="alert alert-danger" role="alert">', ' </div>');?>
									<?= form_error('url', '<div class="alert alert-danger" role="alert">', ' </div>');?>
									<?= form_error('icon', '<div class="alert alert-danger" role="alert">', ' </div>');?>
									<?= $this->session->flashdata('message'); ?>

									<a href ="" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#submenuModal">
										<span class="btn-label">
										<i class="fa fa-plus" ></i>
										</span> Tambah Submenu Baru</a>

									<table class="table table-hover">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Title</th>
												<th scope="col">Menu</th>
												<th scope="col">Url</th>
												<th scope="col">Icon</th>
												<th scope="col">Aktif</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php $i =1; ?>
											<?php foreach($subMenu as $sm ) : ?>
											<tr>
												<td><?= $i++ ?></td>
												<td><?= $sm['title']; ?></td>
												<td><?= $sm['menu']; ?></td>
												<td><?= $sm['url']; ?></td>
												<td><?= $sm['icon']; ?></td>
												<td><?= $sm['is_active']; ?></td>
												<td>
													<a href ="" class="btn btn-success btn-xs">Edit</a>
													<a href ="" class="btn btn-danger btn-xs">Delete</a>
													</td>
											</tr>
											<?php endforeach;?>
										</tbody>
									</table>
								</div>
							</div>							
						</div>
			</div>
    
<!-- Modal -->
<div class="modal fade" id="submenuModal" tabindex="-1" role="dialog" aria-labelledby="submenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="submenuModalLabel">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <form action="<?= base_url("management/submenu") ?>" method="post">
      <div class="modal-body">
	  	<div class="form-group form-group-default">
              <label>Title</label>
              <input id="text" type="text" id="title" name="title" class="form-control" placeholder="Isi disini">
              </div>
              <div class="form-group form-group-default">
              <label>Menu</label>
              <select name="menu_id" id="menu_id" class="form-control">
                  <option value="">Pilih Menu</option>
                  <?php foreach($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                  <?php endforeach; ?>
              </select>
              </div>
              <div class="form-group form-group-default">
              <label>Url</label>
              <input id="text" type="text" id="url" name="url" class="form-control" placeholder="Isi disini">
              </div>
              <div class="form-group form-group-default">
              <label>Icon</label>
              <input id="text" type="text" id="icon" name="icon" class="form-control" placeholder="Isi disini">
              </div>
              <div class="form-group form-group-default">
              <label>Aksi</label>
              <select name="is_active" id="is_active" class="form-control">
                  <option value="1">Aktif</option>
                  <option value="0">Tidak Aktif</option>
                  
              </select>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
	  </div>
	  </from>
    </div>
  </div>
</div>
<!-- end-->

</div>
</div>
</div>