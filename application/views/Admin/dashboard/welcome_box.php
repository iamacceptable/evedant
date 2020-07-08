<div class="card position-relative">
	<div class="card-body">
		<p class="card-title">Welcome to Dashboard!!</p>
		<div class="row">
			<div class="col-md-4 col-sm-12 col-xl-4 d-flex flex-column justify-content-center">
				<div class="ml-xl-4">
					<img class="img-welcome shadow img-fluid" src="<?= base_url();?>assets/images/uploads/teachers/<?= $profile->display_picture;?>" >
				</div>  
			</div>
			<div class="col-md-8 col-sm-12 col-xl-8 d-flex flex-column justify-content-left">
				<h2 class="font-weight-bold"><?= $profile->name; ?></h2>
				<h4 class="font-weight-normal mt-2"><?= $profile->qualification;?> | <?= $profile->designation;?></h4>
				<h5 class="font-weight-light mt-3">Phone: <?= $profile->phone;?></h5>
				<h5 class="font-weight-light mt-2">Email: <?= $profile->email;?></h5>
				<!-- <h5 class="font-weight-light mt-2">Phone: </h5> -->
			</div>
		</div>
	</div>
</div>