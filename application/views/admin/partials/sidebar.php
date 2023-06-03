<aside class="left-sidebar">
    <div>
        <div class="justify-content-center navbar">
            <ul class="navbar-nav align-items-center justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url() ?>assets/dashboard/images/profile/user-1.jpg" alt="" width="50" height="50" class="rounded-circle">
                    </a>
                </li>
                <h4><?= $this->session->userdata('username'); ?></h4>
                <p><span class="round-8 bg-success rounded-circle me-2 d-inline-block"></span> Online</p>
            </ul>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('dashboard') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">UI COMPONENTS</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-penyakit') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Data Penyakit</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-gejala') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Data Gejala</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-riwayat') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-history-toggle"></i>
                        </span>
                        <span class="hide-menu">Data Riwayat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-rule') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-ruler-off"></i>
                        </span>
                        <span class="hide-menu">Data Rule</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-pasien') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="hide-menu">Data Pasien</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-admin') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="hide-menu">User</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>