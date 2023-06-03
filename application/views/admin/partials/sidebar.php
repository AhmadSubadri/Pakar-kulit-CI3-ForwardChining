<aside class="left-sidebar" style="background-color: #CFF1F7;">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="<?= site_url('dashboard') ?>" class="text-nowrap logo-img">
                <h4>FORWARD CHINING</h4>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
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
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-gejala') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Data Gejala</span>
                    </a>
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
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('data-riwayat') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-history-toggle"></i>
                        </span>
                        <span class="hide-menu">Data Riwayat</span>
                    </a>
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