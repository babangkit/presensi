<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script>
setInterval(function(){
$(".berkedip").fadeToggle();
},800);
</script>
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
				<h4 class="page-title"><a href="./"><i class="fas fa-angle-left"></i> Kembali</a></h4>
			</div>
			<div class="row">
            <div class="col-md-12">
							<div class="card">
								<div class="card-header">
								<?php foreach ($matkul as $m) : ?>
								<div class="card-title">Mata Kuliah <b><?= $m['nama_matkul']; ?></b></div>
								<?php endforeach; ?>
								</div>
								<div class="card-body">
								<?php	$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(); ?>
								
								<?php if( $id['id_user'] == $user['id']){ ?>
											
								<button class="btn btn-success">
											<span class="btn-label">
												<i class="fa fa-plus"></i>
											</span>
											 Tambah
									
								</button><br/><br/>

								<div class="table-responsive">
								<table class="table table-head-bg-info">
										<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Nama</th>
												<th scope="col">NIM</th>
												<th scope="col">Kelas</th>
												<th scope="col">Matkul Tetap</th>
												<th scope="col">Matkul Pengganti</th>
												<th scope="col">Total Presensi</th>
												<th scope="col">TTD Dosen</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>																		
									<tbody>
										<?php
										$i=1;
										foreach ($presensi as $m) : ?>
										<?php 
										$idku = $this->encrypt->encode($m['id']);
										$hide = $this->encrypt->encode('AREP MALING ? ORA BERKAH URIPMU BOS, SEMOGA BAHAGIA SELALU!');
										$x = rand(0,3);

										$link = array(
											'Ahyd87jHnkd98AS5fsd6bN75Kc5SADG007JSDA7dklcbrci',
											'mjP935vagd7HD9sdf6gdsnK7D5SG8AKHGBOldu5fsp026gd',
											'BTrsad6imFydsFD89fsDfog98fnG6kb53GBj7gde4df8ilc',
											'RzJ864H8sd0MJF6dKj8rDbJ8Mks9JGD6hsdj0O96vd5kdyU'
										);
										?>
											<tr>
												<td><?=$i++?>.</td>
												<td><?= $m['name'];?></td>
												<td><?= $m['nim'];?></td>
												<td><?= $m['kelas'];?></td>
												<td><?= $m['mk_ttp'];?></td>
												<td><?= $m['mk_pg'];?></td>
												<td><?= $m['total'];?></td>
												<td><?= $m['ttd'];?></td>
												<td><a class="btn btn-icon btn-round btn-xs btn-warning" href = "<?= base_url("matkul/edit_action=".$link[$x]."".$idku."?&id_access=".$hide);?>"><i class="far fa-edit"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
										</tbody>
								</table>
								</div>
								<?php }else{ ?>

								<div class="table-responsive">
								<table class="table table-head-bg-info">
										<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Nama</th>
												<th scope="col">NIM</th>
												<th scope="col">Kelas</th>
												<th scope="col">Matkul Tetap</th>
												<th scope="col">Matkul Pengganti</th>
												<th scope="col">Total Presensi</th>
												<th scope="col">TTD Dosen</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>																		
									<tbody>
								</table>	
								</div>
								<span class="h4"><l class="text-danger"><b><span class="berkedip">KAMU BUKAN KO'OR MATKUL INI</span></b></l></span><l>`</l>
								<?php } ?>

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