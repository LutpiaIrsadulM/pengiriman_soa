<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
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
						<a href="<?php echo site_url('admin/overview/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
	<div class="card-body">
	<a href="<?=site_url('kurir/Kurir/add')?>">Tambah Data Kurir</a>
	
	<div class="table-responsive">
                 <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
	<tr>
		<th>No</th>
		<th>NamaKurir</th>
		<th>Notelp</th>
		<th>EmailKurir</th>
		<th>AlamatKurir</th>
		<th colspan="4">Action</th>
		</thead>
	</tr>
	<?php $i=1; foreach($kurirs as $kurir) { ?>
	<tr>
		<td><?=$i++?></td>
		<td><?=$kurir->nama_kurir?></td>
		<td><?=$kurir->no_telp?></td>
		<td><?=$kurir->email_kurir?></td>
		<td><?=$kurir->alamat_kurir?></td>
		<td><a href="<?=site_url('kurir/Kurir/edit/'.$kurir->id_kurir)?>">Edit</a></td>
		<td><a href="<?=site_url('kurir/Kurir/delete/'.$kurir->id_kurir)?>" 
		onclick="return confirm('Apakah Anda Yakin Ingin Menghapus')">Delete</a></td>
	</tr><?php } ?>
	</table>
	</div>
	
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
		<?php $this->load->view("admin/_partials/modal.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>