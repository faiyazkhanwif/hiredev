<div class="text-success">
	<?php
	if ($this->session->flashdata('login_success')) {
		print '<div class= "container alert alert-success">' . $this->session->flashdata('login_success') . '</div>';
	}
	if ($this->session->flashdata('success')) {
		print '<div class= "container alert alert-success">' . $this->session->flashdata('success') . '</div>';
	}
	?>
</div>

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">
		<h5 class="mb-2 mb-sm-0 pt-1">
			<a href="<?= base_url() ?>Admin" target="_blank"><i class="fas fa-home"></i>&nbsp;Home</a>
		</h5>
		<div class="mb-2 mb-sm-0 pt-1">
			<h5>
				Welcome, <span class="text-primary"><?= $this->session->userdata('name') ?></span>
			</h5>
		</div>
	</div>

</div>
<div class="admin-index section-padding" style="min-height: 500px">

	<div class="admin-content section-padding">
		<div class="container">

			<div class="row con-flex">
				<div class="row gx-5">
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-primary bg-gradient rounded-pill mb-2"><i class="fas fa-users"></i> Total Users</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/allusers') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_users = count($this->Admin_model->get_users());
																			print $count_users;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-primary bg-gradient rounded-pill mb-2"><i class="fas fa-code"></i> Total Devs</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/devs') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_devs = count($this->Admin_model->count_total_devs());
																			print $count_devs;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-primary bg-gradient rounded-pill mb-2"><i class="far fa-envelope"></i> Total Dev Applications</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/devapplications') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_apps = count($this->Admin_model->count_total_devapplications());
																			print $count_apps;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-primary bg-gradient rounded-pill mb-2">Edit Admin Profile</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/editadminprofile/' . $this->session->userdata('id') . '') ?>">
									<h2 class="card-title mb-3 text-center"><i class="far fa-id-card"></i></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-primary bg-gradient rounded-pill mb-2"><i class="fas fa-dollar-sign"></i> Total Hires</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/hires') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_hires = count($this->Admin_model->count_total_hires());
																			print $count_hires;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-primary bg-gradient rounded-pill mb-2">Change Password</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/change_password/' . $this->session->userdata('id') . '') ?>">
									<h2 class="card-title mb-3 text-center"><i class="fas fa-key"></i></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>