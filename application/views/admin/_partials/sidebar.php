<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <?php if($this->session->userdata('usertype') == "Kurir") { ?>
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/overview/kurir') ?>">
            <i class="fa fa-home"></i>
            <span>Home</span>
        </a>
    </li>
<?php } else { ?>

    <!-- ============================================================= -->
    <!--                tampilan side bar jang admin -->
    <!-- ============================================================= -->

    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fa fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pengiriman' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Pengiriman</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/pengiriman/dikirim') ?>">Di kirim</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/pengiriman/diterima') ?>">Terkirim</a>
        </div>
    </li>
   <li class="nav-item <?php echo $this->uri->segment(2) == 'kurir' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('kurir/Kurir') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Kurir</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'ongkir' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('ongkir/Ongkir') ?>">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Ongkos Kirim</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'user' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('user/User') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Management User</span></a>
    </li>
    <?php } ?>
</ul>