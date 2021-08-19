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
				<h4 class="page-title"><a href="../"><i class="fas fa-angle-left"></i> Kembali</a></h4>

			</div>
			<div class="row">
            <div class="col-md-12">
							<div class="card">
								<div class="card-header">
								<div class="card-title">Absensi <b>Kosong</b></div>
								</div>
								<div class="card-body">
								
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
										</tbody>
									</table>
									<CENTER><l>`</l><span class="h4"><l class="text-danger"><b><span class="berkedip">KAMU SALAH JALAN!</span></b></l></span><l>`</l></CENTER>
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