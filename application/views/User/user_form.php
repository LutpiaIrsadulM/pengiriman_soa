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
	<?php
	$name='';
	$username='';
	$email='';
	$no_telp='';
	$usertype='';
	$password='';

	
	if(isset($user)) {
		$name = $user->name;
		$username = $user->username;
		$email = $user->email;
		$no_telp = $user->no_telp;
		$usertype = $user->usertype;
		$pasword = $user->password;

	}
	?>
	<form action="" method="post">
	<table align="center">
	<tr>
        <label><td>Name</td></label>
        <td><input type="text" class="form-control" name="name" value="<?= $name ?>" required></td>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </tr>
	<tr>
        <label><td>Username</td></label>
        <td><input type="text" class="form-control" name="username" value="<?= $username ?>" required></td>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </tr>
	<tr>
        <label><td>Email</td></label>
        <td><input type="text" class="form-control" name="email" value="<?= $email ?>" required></td>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </tr>
	<tr>
        <label><td>No.Telp</td></label>
        <td><input type="text" class="form-control" name="no_telp" value="<?= $no_telp ?>" required></td>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </tr>
    <tr>
        <td>User Type</td>
        <td><input type="radio" name="usertype" value="Admin" <?= $usertype == 'Admin' ? 'checked' : '' ?> required>Admin
        <input type="radio" name="usertype" value="Kurir" <?= $usertype == 'Kurir' ? 'checked' : '' ?> required>Kurir
        </td>
</tr>
	<tr>
		<td></td>
		<td>
		<div class="form-group row">
		<div class="col-sm-9 offset-md-3">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm">Save</button>
            <button type="button" class="btn btn-light btn-sm" onclick="window.history.back()">Kembali</button>
        </div>
		</div>
		</td>
	</tr>
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