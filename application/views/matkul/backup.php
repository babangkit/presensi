<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
            <?php foreach ($data as $d) : ?>
                <?php 
                    $idku = $this->encrypt->encode($d['id_matkul']);
                    $hide = $this->encrypt->encode('AREP MALING ? ORA BERKAH URIPMU BOS, SEMOGA BAHAGIA SELALU!');
                    $x = rand(0,3);

					$link = array(
					'BksCEAF2V2tTJRSQAsJBR1YTgxIHb87VXFaFS33rdVE6tsa',
					'2V2tTJwEZCQFdTlB8bZyBxRsJBR1YTgxIVXFaVQFSVE8HyA',
					'Ziaj897gJSDskiHjbc68bZyBxRsJBR1IN97dnYTgxF8djYak',
					'8aHB5b8DSFNdsf7sJBR1YTg78hbHBdsf6VGUSVE8Hyaj7hkQ'
					);
				?>
				<h4 class="page-title"><a href="<?= base_url("matkul/".$link[$x]."".$idku."01?&id_access=".$hide);?>"><i class="fas fa-angle-left"></i> Kembali</a></h4>
			</div>
            <script language="JavaScript">
                function enable_text(status)
                {
                status=!status;    
                document.f1.other_text.disabled = status;
                document.f1.other_text1.disabled = status;
                document.f1.other_text2.disabled = status;
                }
            </script>
			<div class="row">
                <div class="col-md-6">
                    <div class="card">
                            <div class="card-header">	
                                <div class="card-title"><b>Edit Data Asisten</b></div>
                                <l class="text-warning">Silahkan isi/edit dengan Data Asisten yang bersangkutan.</l>
                            </div>
                            <div class="card-body">
                            
                            <form name=f1 method=post>                                  
                                <div class="form-group">
                                <label for="largeInput">Nama</label>
                                    <input type="text" name="other_text" class="form-control form-control" value="<?= $d['name'];?>" disabled="">
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="largeInput">NIM</label>
                                    <input type="text" name="other_text1" class="form-control form-control" value="<?= $d['nim'];?>" disabled="">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="largeInput">Kelas</label>
                                    <input type="text" name="other_text2" class="form-control form-control" value="<?= $d['kelas'];?>"  disabled="" >
                                </div>
                                </div>
                             </form>
                                </div>
                                <div class="form-group">
                                <button class="btn btn-warning" name=others  onclick="enable_text(true)">
											<span class="btn-label">
												<i class="fas fa-user-edit"></i>
											</span>
											Edit
										</button>
                                <button class="btn btn-success">
											<span class="btn-label">
												<i class="fa fa-check"></i>
											</span>
											Done
										</button>

                                      
                                            <div onload=enable_text(false);>

                                            
                                            </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">				
                            <div class="card-title"><b>Edit Data Presensi</b></div>
                            <l class="text-warning">Silahkan isi/edit dengan total tanda tangan yang di peroleh.</l>
                        </div>
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="largeInput">Matkul Tetap</label>
                                                <input type="text" class="form-control form-control" value="<?= $d['mk_ttp'];?>">
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="largeInput">Matkul Pengganti</label>
                                                <input type="text" class="form-control form-control" value="<?= $d['mk_pg'];?>">
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="largeInput">Total</label>
                                                <input type="text" class="form-control form-control" value="<?= $d['total'];?>">
                                            </div>
                                            </div>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="exampleFormControlSelect1">TTD Dosen</label>
                                                <select class="form-control">
                                                    <option>Lengkap</option>
                                                    <option>Tidak Lengkap</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <button class="btn btn-success">
                                                <span class="btn-label">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                                Update
                                            </button>
                                        <?php endforeach; ?>
                                </div>
                        </div>
                    </div>
            </div>
		</div>
	</div>
</div>