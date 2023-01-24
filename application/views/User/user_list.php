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
	<a href="<?=site_url('user/user/add')?>">Add New user</a>
	
	<div class="table-responsive">
                 <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
	<tr>
		<th>No</th>
		<th>name</th>
		<th>Username</th>
		<th>email</th>
		<th>no_telp</th>
		<th>UserType</th>
		<th colspan="3">Action</th>
		</thead>
	</tr>
	<?php $i=1; foreach($users as $user) { ?>
	<tr>
		<td><?=$i++?></td>
		<td><?=$user->name?></td>
		<td><?=$user->username?></td>
		<td><?=$user->email?></td>
		<td><?=$user->no_telp?></td>
		<td><?=$user->usertype?></td>
		<td><a href="<?=site_url('user/user/edit/'.$user->id_user)?>">Edit</a></td>
		<td><a href="<?=site_url('user/user/delete/'.$user->id_user)?>" 
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