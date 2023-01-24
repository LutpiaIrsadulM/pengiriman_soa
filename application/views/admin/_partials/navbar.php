<nav class="navbar navbar-expand navbar-dark bg-info static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>"><?php echo SITE_NAME ?></a>
<!--
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>
-->
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        

    <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><strong><?= $this->session->userdata('username') ?></strong>

        <img class=" card-img-top" src="<?= base_url('uploads/user/' . $this->session->userdata('photo')) ?>" style="width: 30px;" />
            </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('user/_validasi'); ?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
        <a class="dropdown-item" href="<?= site_url('auth/changephoto'); ?>">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Change Photo
        </a>
        <a class="dropdown-item" href="<?= site_url('auth/changepass'); ?>">
        <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
            Change Password
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?= site_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
        </div>
        </li>
    </ul>

</nav>
