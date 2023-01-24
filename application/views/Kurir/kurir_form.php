<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
	
	<?php $this->load->view("admin/_partials/sidebar.php") ?>
	
	<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
	
	<?php if ($this->session->flashdata('success')) : ?>
	<?php endif; ?>
	
	<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('kurir/Kurir/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
	<?php
	$namakurir='';
	$notelp='';
	$emailkurir='';
	$alamatkurir='';
	
	if(isset($kurir)) {
		$namakurir = $kurir->nama_kurir;
		$notelp = $kurir->no_telp;
		$emailkurir = $kurir->email_kurir;
		$alamatkurir = $kurir->alamat_kurir;
	}
	?>
	<form action="" method="post">
	<table align="center">
	<tr>
		<td>Nama Kurir</td>
		<td><input type="text" name="nama_kurir" value="<?=$namakurir?>" required></td>
	</tr>
	<tr>
		<td>No telepon</td>
		<td><input type="number" name="no_telp" value="<?=$notelp?>" required></td>
	</tr>
	<tr>
		<td>Email Kurir</td>
		<td><input type="text" name="email_kurir" value="<?=$emailkurir?>" required></td>
	</tr>
	<tr>
		<td>Alamat Kurir</td>
		<td><input type="text" name="alamat_kurir" value="<?=$alamatkurir?>" required></td>
	</tr>
	<tr>
		<td></td>
		<td>
		<div class="form-group row">
		<div class="col-sm-9 offset-md-3">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm">Tambah Data</button>
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
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
		
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>