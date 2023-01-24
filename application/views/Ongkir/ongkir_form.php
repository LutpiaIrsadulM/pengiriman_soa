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
						<a href="<?php echo site_url('ongkir/Ongkir/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
	<?php
	$kabptn='';
	$hrg='';
	
	if(isset($ongkir)) {
		$kabptn = $ongkir->kabupaten;
		$hrg = $ongkir->harga;
	}
	?>
	<form action="" method="post">
	<table align="center">
	<tr>
		<td>Kabupaten</td>
		<td><input type="text" name="kabupaten" value="<?=$kabptn?>" required></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="number" name="harga" value="<?=$hrg?>" required></td>
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