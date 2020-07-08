<?php 
$this->view('Admin/components/header');
?>
<div class="container-scroller">
	<!-- topbar _> @graphicsbyGolu -->
	<?php
	$this->view('Admin/components/topbar');
	?>
	<div class="container-fluid page-body-wrapper">
		<!-- sidebar _> @graphicsByGolu -->
		<?php
		$this->view('Admin/components/sidebar');
		?>
		<div class="main-panel">
			<div class="content-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<?php
								$this->view('Admin/components/breadcrumb');
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<?php
							$this->view('Admin/dashboard/welcome_box');
						?>
					</div>
				</div>
				<div class="row">
					<?php
					$this->view('Admin/dashboard/counters');
					?>
				</div>
				<div class="row">
					<?php
						$this->view('Admin/dashboard/charts/income_expense');
						$this->view('Admin/dashboard/charts/boys_girls');
					?>
				</div>
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<?php
							$this->view('Admin/dashboard/notices');
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<p class="card-title mb-0">Team Evedent</p>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												<th>Designation</th>
												<th>Qualification</th>
												<th>Role</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="py-1">
					                            	<img src="<?= base_url();?>assets/images/uploads/teachers/dr_arvind_dagur.jpg" class="img img-fluid" alt="image"/>
					                          	</td>
												<td>Jacob</td>
												<td>Photoshop</td>
												<td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
												<td><label class="badge badge-danger">Pending</label></td>
											</tr>
											<tr>
												<td>Peter</td>
												<td>After effects</td>
												<td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
												<td><label class="badge badge-success">Completed</label></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- bottombar _> @graphicsByGolu -->
			<?php
				$this->view('Admin/components/bottom_bar');
			?>
		</div>
	</div>
</div>
<?php
$this->view('Admin/components/footer');
?>