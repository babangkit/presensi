<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
				<h4 class="page-title">Presensi Asisten</h4>
			</div>
			<div class="row">
            <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									
								<div class="card-title">Daftar <b>Matakuliah</b></div>
								</div>
								<div class="card-body">
								<div class="table-responsive">
								<?php
									$koor_id = $user['koor'];

								if ($koor_id == 1) {?>
								
									<table class="table table-head-bg-info">
										<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Nama Matakuliah</th>
												<th scope="col">Program Studi</th>
												<th scope="col">Tahun Angkatan</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody>
										<?php
										$i=1;

										foreach ($matkul as $m) : ?>
										<?php 
										$ida = $link;
										$idku = $this->encrypt->encode($m['id']);
										$hide = $this->encrypt->encode('AREP MALING ? ORA BERKAH URIPMU BOS, SEMOGA BAHAGIA SELALU!');
										$prodi = $this->encrypt->encode($m['prodi']);
										$x = rand(0,3);

										$link = array(
											'BksCEAF2V2tTJRSQAsJBR1YTgxIHb87VXFaFS33rdVE6tsa',
											'2V2tTJwEZCQFdTlB8bZyBxRsJBR1YTgxIVXFaVQFSVE8HyA',
											'Ziaj897gJSDskiHjbc68bZyBxRsJBR1IN97dnYTgxF8djYak',
											'8aHB5b8DSFNdsf7sJBR1YTg78hbHBdsf6VGUSVE8Hyaj7hkQ'
										);
							
										?>
											<tr>
												<td><?=$i++?>.</td>
												<td><?= $m['nama_matkul'];?></td>
												<td><?= $m['prodi'];?></td>
												<td><?= $m['tahun'];?></td>
												<td><a class="btn btn-icon btn-round btn-xs btn-warning" href = "<?= base_url("matkul/".$link[$x]."".$idku."01?&id_access=".$hide."2020&private=".$prodi);?>"><i class="far fa-edit"></i></a>										
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
    
   

</div>
</div>
</div>