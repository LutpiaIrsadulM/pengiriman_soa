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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>product</th>
										<th>Date</th>
										<th>Address</th>
										<th>Courier</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($customers as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->customer_name_834 ?>
										</td>
										<td>
											<?php foreach ($barangs as $barang):
                                                if($product->bajuk_id_834 == $barang->baju_id_834) echo $barang->nama_baju_834; endforeach?>
										</td>
										<td class="small">
                                            <?php echo $product->sale_date_834 ?></td>
                                        <td class="small">
                                            <?php echo $product->customer_address_834 ?></td>
                                        
                                            <form action="<?php echo site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data" >
                                        <td>
                                            <input type="hidden" name="">
                                            <select name="id_kurir" id="">
                                                <option value="id_kurir">Kurir</option>
                                                <option value="">Yanto</option>
                                                <option value="">Surya</option>
                                                <option value="">Rani</option>
                                            </select>
                                        </td>   
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/pengiriman/assign/'.$product->sale_id_834) ?>"
                                            class="btn btn-small"><i class="fas fa-shipping-fast"></i> Kirim</a>
                                        </form>										
                                        <a data-toggle="modal" data-target="#detailBarang" href="#!"
                                        class="btn btn-small"><i class="fas fa-info-circle"></i> Detail</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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