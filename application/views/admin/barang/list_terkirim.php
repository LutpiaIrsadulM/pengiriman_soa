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
                    
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                        <th>Phone</th>
                                        <th>Product</th>
                                        <th>Alamat</th>
                                        <th>Harga</th>
                                        <th>Ongkos</th>
                                        <th>Kurir</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Tanggal Sampai</th>
                                        <th>Status Pengiriman</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($barangs as $product) : ?>
                                        <tr>
                                        <td width="150"><?php echo $product->nama_customer ?></td>
                                            <td width="150"><?php echo $product->phone ?></td>
                                            <td width="150"><?php echo $product->nama_barang ?></td>
                                            <td class="small" width="150">
                                                <?php echo substr($product->alamat_pengiriman, 0, 30) ?>...</td>
                                            </td>
                                            <td width="150"><?php echo $product->harga_barang ?></td>
                                            <td width="150"><?php echo $product->ongkos_kirim ?></td>
                                            <td width="150"><?php echo $product->nama_kurir ?></td>
                                            <td width="150"><?php echo $product->tanggal_kirim ?></td>
                                            </td>
                                            <td width="150">
                                                <?php echo $product->tanggal_sampai ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $product->status_pengiriman ?>
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