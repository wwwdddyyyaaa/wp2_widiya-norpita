<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-whitetopbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-mdnone rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!--Page Heading -->
            <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
            <!--Topbar Navbar-->
            <ul class="navbar-navml-auto">
                <div class="topbar-dividerd-noned-sm-block"></div>
                <!--Nav Item -User Information-->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-linkdropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false">
                        <span class="mr-2d-noned-lg-inlinetextgray-600small"><?=$user['nama'];?></span>
                        <img class="img-profilerounded-circle"src="<?=base_url('assets/img/profile/'). $user['image'];?>"></a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-rightshadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('user'); ?>"><i class="fas fa-user fa-sm fa-fw mr-2text-gray-400"></i>Profile Saya</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=base_url('autentifikasi/logout'); ?>" data-toggle="modal" datatarget="#logoutModal"><i class="fasfa-sign-out-altfa-smfafwmr-2text-gray-400"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!--End of Topbar -->