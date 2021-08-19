<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
				<h4 class="page-title">Control Panel</h4>
			</div>
                      
			<div class="row">
     
						<div class="col-md-6">
							<div class="card">
                <div class="card-header">
									<div class="card-title">Menu Management</div>
								</div>
								<div class="card-body">
                <?= $this->session->flashdata('message'); ?>
									<table class="table table-hover">
										<thead>
											<tr>
												<th scope="col">No.</th>
                        <th scope="col">Sub Menu</th>
                        <th scope="col">Menu</th>
												<th scope="col">Status</th>
											</tr>
										</thead>
										<tbody>
                      <?php $i =1; ?>
											<?php foreach($cpanel1 as $cp1) : ?>
											<tr>
											    <td><?= $i++ ?></td>
                            <td><?= $cp1['title']; ?></td>
                            <td><?= $cp1['menu']; ?></td>
                            <?php  if($cp1['is_active'] == 0)
                            {
                                echo  '<td>Tidak Aktif</td>';
                            }else{
                                echo  '<td>Aktif</td>';
                            } ?>
                            </tr>
										    <?php endforeach;?>
										</tbody>
									</table>
                  <a href ="" class="btn btn-success btn-sm col-md-3" data-toggle="modal" data-target="#menuModal">
                      <span class="btn-label">
											<i class="fas fa-edit"></i>
											</span> Edit</a>     
								</div>
							</div>							
              </div>

              <div class="col-md-6">
							<div class="card">
                <div class="card-header">
									<div class="card-title">Judul Konten</div>
								</div>
								  <div class="card-body">
                  Konten
                  </div>
              </div>
              </div>

              <div class="col-md">
							 <div class="card">
                 <div class="card-header">
									<div class="card-title">Deskripsi</div>
								</div>
								<div class="card-body">
                   <div class="form-group">
										<label>Deskripsi Home</label>
                    <textarea class="form-control" name ='home'id="home" rows="2" spellcheck="false"><?= $menu['isi']; ?></textarea>
                    <small id="homeHelp" class="form-text text-muted">Silahkan di isi sesuai dengan kebutuhan, tidak di anjurkan menggunakan enter untuk ganti baris</small>
                     </div>
                     <div class="form-group">
                     <label>Deskripsi Contoh format file tugas</label>
                    <input type="text" class="form-control col-md-6" id="email2" placeholder=""> 
                     </div>
                     <div class="form-group">
								  	  <?= form_error('iduu', '<div class="alert alert-danger" role="alert">', ' </div>');?>
								    	<?= $this->session->flashdata('message1'); ?>
                        <a href ="" class="btn btn-success btn-sm col-md-3" data-toggle="modal" data-target="#menusModal">
                        <span class="btn-label">
											<i class="fas fa-edit"></i>
                      </span> Edit</a>
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
	  <form action="<?= base_url("cpanel") ?>" method="post">
      <div class="modal-body">
      <div class="form-group form-group-default">
              <label>Menu</label>
              <select name="idu" id="idu" class="form-control">
              <?php foreach($cpanel1 as $cp3 ) : ?>
              <option value="<?= $cp3['id'];?>"><?= $cp3['title'];?></option>
              <?php endforeach;?>
              </select>              
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
	  </div>
	  </from>
    </div>
  </div>
</div>
<!-- end-->


</div>
</div>
</div>