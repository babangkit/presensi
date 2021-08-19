<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
				<h4 class="page-title">Management Menu</h4>

			</div>
			<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">

									<?= form_error('menu', '<div class="alert alert-danger" role="alert">', ' </div>');?>
									<?= $this->session->flashdata('message'); ?>

									<a href ="" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#menuModal">
										<span class="btn-label">
										<i class="fa fa-plus" ></i>
										</span> Tambah Menu Baru</a>

									<table class="table table-hover">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Menu</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php $i =1; ?>
											<?php foreach($menu as $m ) : ?>
											<tr>
												<td><?= $i++ ?></td>
												<td><?= $m['menu']; ?></td>
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
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="menuModalLabel">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <form action="<?= base_url("management") ?>" method="post">
      <div class="modal-body">
	  	<div class="form-group form-group-default">
				<label>Nama Menu</label>
				<input id="text" type="text" id="menu" name="menu" class="form-control" placeholder="Isi disini">
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