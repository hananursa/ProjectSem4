<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('administrator/dashboard'); ?>">
        <div class="sidebar-brand-icon">
        <i class="fas fa-database"></i>
        </div>
        <div class="sidebar-brand-text mx-1">ADMIN POSYANDU LANSIA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('administrator/dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard Admin</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/data_kader') ?>"> 
        <i class="fas fa-database"></i>
          <span>Data Kader</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/data_posyandu') ?>"> 
        <i class="fas fa-database"></i>
          <span>Data Posyandu</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/data_kes_lansia') ?>"> 
        <i class="fas fa-database"></i>
          <span>Data Kesehatan Lansia</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/jadwal_kegiatan') ?>"> 
        <i class="fas fa-database"></i>
          <span>Jadwal Kegiatan</span>
        </a>
      </li>
      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Yakin akan logout?')">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        
        </nav>
   