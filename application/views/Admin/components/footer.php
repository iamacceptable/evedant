<!-- plugins:js -->
<script src="<?= base_url();?>assets/admin/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?= base_url();?>assets/admin/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url();?>assets/admin/js/off-canvas.js"></script>
<script src="<?= base_url();?>assets/admin/js/hoverable-collapse.js"></script>
<script src="<?= base_url();?>assets/admin/js/template.js"></script>
<script src="<?= base_url();?>assets/admin/js/todolist.js"></script>
<script src="<?= base_url();?>assets/admin/js/file-upload.js"></script>
<script src="<?= base_url();?>assets/admin/js/chart.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url();?>assets/admin/js/dashboard.js"></script>
<!-- End custom js for this page-->
<!-- counter -->
<script>
	$('.counts-counter').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
</script>
<!-- boys girls chart -->
<script type="text/javascript">
	
</script>
</body>

</html>