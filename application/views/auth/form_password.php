<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view("Admin/_partials/head.php") ?>
</head>
<body>
	<?php $this->load->view("Admin/_partials/navbar.php") ?>
	<div id="wrapper">
	
	<?php $this->load->view("Admin/_partials/sidebar.php") ?>
	
	<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("Admin/_partials/breadcrumb.php") ?>
	
	<?php if ($this->session->flashdata('success')) : ?>
	<?php endif; ?>
	
	<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('user/user/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
                    <?= $this->session->flashdata('masg') ?>
	<form action="" method="post" class="was-validated">
	<table align="center">
    <div class="form-group">
        <label for="username">Old Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Oldpassword" name="oldpassword" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="password">New Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Newpassword" name="newpassword" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <td><input type="submit" name="change" value="CHANGE PASSWORD" class="btn btn-primary"></td>
	</table>
	</form>
	</div>
					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("Admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
		
		<?php $this->load->view("Admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("Admin/_partials/js.php") ?>
</body>
</html>