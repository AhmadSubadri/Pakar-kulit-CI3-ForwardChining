<!--  Header Start -->
<header class="app-header shadow" style="background-color: #CFF1F7;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>

        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a href="<?= site_url('administrator/logout'); ?>" class="btn btn-sm btn-primary rounded">Logout <i class="ti ti-logout"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--  Header End -->