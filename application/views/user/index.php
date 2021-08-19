<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
			<div class="page-header">
				<h4 class="page-title">Home</h4>
				<div class="btn-group btn-group-page-header ml-auto">
					<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-ellipsis-h"></i>
					</button>
					<div class="dropdown-menu">
						<div class="arrow"></div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
				</div>
			</div>
			<div class="row">
						<div class="col-md-12">
							<div class="card card-info card-annoucement card-round">
								<div class="card-body text-center">
									<div class="card-opening">Welcome <?= $user['name'] ?>,</div>
									<div class="card-desc">
										<?= $menu['isi']; ?>
									</div>
									<div class="card-detail">
										<div class="btn btn-light btn-rounded">View Detail</div>
									</div>	
								</div>
							</div>
						</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<div class="card-head-row">
								<div class="card-title">User Statistics</div>
								<div class="card-tools">
									<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
										<span class="btn-label">
											<i class="fa fa-pencil"></i>
										</span>
										Export
									</a>
									<a href="#" class="btn btn-info btn-border btn-round btn-sm">
										<span class="btn-label">
											<i class="fa fa-print"></i>
										</span>
										Print
									</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<table class="table table-head-bg-secondary mt-4">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">First</th>
										<th scope="col">Last</th>
										<th scope="col">Handle</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<td>3</td>
										<td colspan="2">Larry the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-primary bg-primary-gradient bubble-shadow">
						<div class="card-body">
							<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
							<h1 class="mb-4 fw-bold">17</h1>
							<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
							<div id="activeUsersChart"></div>
							<h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
							<ul class="list-unstyled">
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/azzara/demo.html</small> <span>10</span></li>
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/azzara/demo.html</small> <span>10</span></li>
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/azzara/demo.html</small> <span>10</span></li>
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>

							</ul>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

</div>


<?= $this->session->flashdata('notif'); ?>
</div>
</div>