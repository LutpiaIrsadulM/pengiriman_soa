<!DOCTYPE html>
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

				<!--	<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
			-->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/overview/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php echo site_url('admin/pengiriman/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<table class="table " width="100%" cellspacing="0">
									<tr>
										<td width="120"><label for="nama_customer">Nama </label></td>
										<td><?php echo $products->customer_name_834 ?></td>
									</tr>
									<input class="form-control <?php echo form_error('nama_customer') ? 'is-invalid' : '' ?>" type="hidden" name="nama_customer" value="<?php echo $products->customer_name_834 ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('nama_customer') ?>
									</div>
							</div>

							<div class="form-group">
								<table class="table " width="100%" cellspacing="0">
									<tr>
										<td width="120"><label for="phone">Phone </label></td>
										<td><?php echo $products->customer_phone_834 ?></td>
									</tr>
									<input class="form-control <?php echo form_error('phone') ? 'is-invalid' : '' ?>" type="hidden" name="phone" value="<?php echo $products->customer_phone_834 ?>" />
									<div class="invalid-feedback">
										<?php echo form_error('phone') ?>
									</div>
							</div>

							<div class="form-group">
								<tr>
									<td width="120"><label for="nama_barang">Product </label></td>
									<td><?php echo $products->nama_baju_834 ?></td>
								</tr>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid' : '' ?>" type="hidden" name="nama_barang" value="<?php echo $products->nama_baju_834 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_barang') ?>
								</div>
							</div>


							<div class="form-group">
								<tr>
									<td width="120"><label for="alamat">Alamat </label></td>
									<td><?php echo $products->customer_address_834 ?></td>
								</tr>
								<input class="form-control-file <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="hidden" name="alamat" value="<?php echo $products->customer_address_834 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<tr>
									<td width="120"><label for="harga">Harga </label></td>
									<td><?php echo $products->harga_baju_834 ?></td>
								</tr>
								<input class="form-control-file <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="hidden" name="harga" value="<?php echo $products->harga_baju_834 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<tr>
									<td width="120"><label for="ongkos">Ongkos </label></td>
									<td><?php echo $fees->harga ?></td>
								</tr>
								<input class="form-control-file <?php echo form_error('ongkos') ? 'is-invalid' : '' ?>" type="hidden" name="ongkos" value="<?php echo $fees->harga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ongkos') ?>
								</div>
							</div>

							<div class="form-group">
								<tr>
									<td width="120"><label for="tkirim">Tanggal Kirim </label></td>
									<td><?php echo $products->sale_date_834 ?></td>
								</tr>
								<input class="form-control-file <?php echo form_error('tkirim') ? 'is-invalid' : '' ?>" type="hidden" name="tkirim" value="<?php echo $products->sale_date_834 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tkirim') ?>
								</div>
							</div>

							<div class="form-group">
								<tr>
									<td><label for="name">Courier*</label></td>
									<td>
										<select name="id_kurir" class="form-control <?php echo form_error('id_kurir') ? 'is-invalid' : '' ?>">
											<option value="">------------Choose Courier------------</option>
											<?php foreach ($couriers as $courier) : ?>
												<option value="<?php echo $courier->id_kurir ?>"><?php echo $courier->nama_kurir ?></option>
											<?php endforeach ?>
										</select>
									</td>
								</tr>
								</table>
								<div class="invalid-feedback">
									<?php echo form_error('id_kurir') ?>
								</div>
							</div>
							<input type="hidden" name="sale_id" value="<?php echo $products->sale_id_834 ?>">
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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