<script src="<?= base_url('assets/'); ?>js/plugin/sweetalert/sweetalert.min.js"></script>


<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
				<h4 class="page-title">Daftar Matakuliah</h4>
			</div>
			<div class="row">
            <div class="col-md-9">
							<div class="card">
								<div class="card-header">
								<div class="card-title">Daftar Matakuliah saat ini.</b></div>
								</div>
								<div class="card-body">
								<?= $this->session->flashdata('message'); ?>
								<button class="btn btn-success" data-toggle="modal" data-target="#menuModal">
											<span class="btn-label">
												<i class="fa fa-plus"></i>
											</span>
											 Tambah
									
									</button><br/><br/>
								<div class="table-responsive">
								<?php
									$role_id = $user['role_id'];

								if ($role_id == 1) {?>
								
									<table class="table table-head-bg-info">
										<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Nama Matakuliah</th>
												<th scope="col">Program Studi</th>
												<th scope="col">Tahun Angkatan</th>
												<th scope="col">Hapus</th>
											</tr>
										</thead>
										<tbody>
										<?php
										$i=1;
										foreach ($matkul as $m) : ?>
											<tr>
												<td><?=$i++?>.</td>
												<td><?= $m['nama_matkul'];?></td>
												<td><?= $m['prodi'];?></td>
												<td><?= $m['tahun'];?></td>
												<td><form action="<?= base_url("daftar/del") ?>" method="post">
												<input type="hidden" id="id" name="id" value="<?= $m['id']?>">
												<button type="submit" onclick="return confirm('Hapus Data?');" class="btn btn-icon btn-round btn-sm btn-danger">
												<i class="fas fa-trash"></i>
												</button></form>
												</td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								<?php	
								} else {?>
										<table class="table table-head-bg-info">
									<div class="alert alert-primary" role="alert">
									Kamu Bukan Ko`or Matakuliah
								  	</div>
									</table>
								<?php
								}
								?>
								</div>								

								<!--	 <div class="alert alert-success" role="alert">
                                    This is a primary alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                    This is a primary alert—check it out!
                                    </div> -->
                                
							</div>
						</div>
			</div>
		</div>
	</div>
	

	
<!-- Modal id -->

<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="menuModalLabel">Aksi Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <form action="<?= base_url("daftar") ?>" method="post">
      <div class="modal-body">
	  <div class="form-group">
			<label for="disableinput">Nama Matakuliah</label>
			<input type="text" name="matkul" id="matkul" class="form-control" required oninvalid="this.setCustomValidity('*Nama Matakuliah wajib diisi!')" oninput="setCustomValidity('')">
	  </div>
	  <div class="form-group">
			<label for="disableinput">Program Study</label>
			<input type="text" name="prodi" id="prodi" class="form-control" required oninvalid="this.setCustomValidity('*Program Studi wajib diisi!')" oninput="setCustomValidity('')">
	  </div>
	  <div class="form-group">
			<label for="disableinput">Tahun Angkatan</label>
			<input type="text" name="th" id="th" class="form-control" required oninvalid="this.setCustomValidity('Tahun Angkatan wajib diisi!')" oninput="setCustomValidity('')">
	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
	  </div>
	  </from>
    </div>
  </div>
</div>
<!-- end-->



</div>
</div>
</div>
