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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($barangs as $product) : ?>
                                        <tr>
                                            <td width="150"><?php echo $product->nama_customer ?></td>
                                            <td width="150"><?php echo $product->phone ?></td>
                                            <td width="150"><?php echo $product->nama_barang ?></td>
                                            <td width="250" class="small">
                                                <?php echo substr($product->alamat_pengiriman, 0, 120) ?>...</td>
                                            </td>
                                            <td width="150"><?php echo $product->harga_barang ?></td>
                                            <td width="150"><?php echo $product->ongkos_kirim ?></td>
                                            <td width="150"><?php echo $product->nama_kurir ?></td>
                                            <td width="150"><?php echo $product->tanggal_kirim ?></td>
                                            <td width="150">
                                                <form action="" method="post">
                                                    <input type="hidden" name="sale_id" value="<?php echo $product->sale_id ?>">
                                                    <input type="hidden" name="id_kurir" value="<?php echo $product->id_kurir ?>">
                                                    <input type="hidden" name="nama_customer" value="<?php echo $product->nama_customer ?>">
                                                    <input type="hidden" name="phone" value="<?php echo $product->phone ?>">
                                                    <input type="hidden" name="nama_barang" value="<?php echo $product->nama_barang ?>">
                                                    <input type="hidden" name="alamat" value="<?php echo $product->alamat_pengiriman ?>">
                                                    <input type="hidden" name="harga" value="<?php echo $product->harga_barang ?>">
                                                    <input type="hidden" name="ongkos" value="<?php echo $product->ongkos_kirim ?>">
                                                    <input type="hidden" name="tkirim" value="<?php echo $product->tanggal_kirim ?>">
                                                    <input type="hidden" name="id_pengiriman" value="<?php echo $product->id_pengiriman ?>">
                                                    <?php if($product->status_pengiriman == "Terkirim"){ ?>
                                                        <button disabled type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"><?php echo $product->status_pengiriman ?></button>
                                                        <?php } elseif($product->status_pengiriman == "Dikirim"){?>
                                                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"><?php echo $product->status_pengiriman ?></button>
                                                        
                                                        <?php } ?>

                                                </form>
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