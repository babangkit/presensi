<!-- Sidebar -->
<div class="sidebar">

	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?= base_url('assets/user/'); ?><?= $user['image']; ?>" class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" aria-expanded="true">
						<span>
							<?= $user['name'] ?>

							<?php
							$role;
							$role_id = $this->session->userdata('role_id');

							if ($role_id == 1) {
								$role = 'Administrator';
							} else {
								$role = 'Anggota';
							}
							?>
							<span class="user-level"><?= $role ?></span>

						</span>
					</a>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- MENU -->
			<ul class="nav">
				<li class="nav-item <?= $nav1 ?>">
					<a href="<?= base_url(); ?>">
						<i class="fas fa-home"></i>
						<p>Home</p>
					</a>
				</li>

				<?php
				$role_id = $this->session->userdata('role_id');

				$queryMenu = "SELECT `user_menu`.`id`, `menu`
									FROM `user_menu` JOIN `user_access_menu`
									  ON `user_menu`.`id` = `user_access_menu`.`menu_id`
								   WHERE `user_access_menu`.`role_id` = $role_id
								ORDER BY `user_access_menu`.`menu_id` ASC
					
					";
				$menu = $this->db->query($queryMenu)->result_array();
				?>
				<?php foreach ($menu as $m) : ?>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section"><?= $m['menu']; ?></h4>
				</li>

				<?php
					$menuId = $m['id'];
					$quetySubMenu = "SELECT * 
									   FROM `user_sub_menu`
									  WHERE `menu_id` = $menuId
									  	AND `is_active` = 1
					
					";
					$subMenu = $this->db->query($quetySubMenu)->result_array();

					?>

				<?php foreach ($subMenu as $sm) : ?>
				<?php if ($title == $sm['title']) :	?>
				<li class="nav-item active">
					<?php else : ?>
				<li class="nav-item">
					<?php endif; ?>
					<a href="<?= base_url($sm['url']); ?>">
						<i class="<?= $sm['icon']; ?>"></i>
						<p><?= $sm['title']; ?></p>
						<?php
								$q =  $user['username'];
								$qq = "SELECT count(no) as jumlah
										 FROM `file`
										WHERE `user` = '$q'
									";
								$qqq = $this->db->query($qq)->result_array();
								?>
						<?php foreach ($qqq as $t) : ?>
						<?php
									if ($sm['id'] == 3) {
										echo '<span class="badge badge-count">' . $t["jumlah"];
										'</span>';
									}
									?>
						<?php endforeach; ?>

					</a>
				</li>

				<?php endforeach; ?>
				<?php endforeach; ?>

			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->