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
        <div class="sidebar-brand-text mx-1">NAKES POSYANDU LANSIA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('nakes/dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard Nakes</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-chart-bar"></i>
          <span>Grafik</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Grafik:</h6>
            <a class="collapse-item" href="<?= base_url('nakes/gizi/grafik_IMT') ?>">Grafik IMT</a>
            <a class="collapse-item" href="<?= base_url('nakes/gizi/grafik_tensi') ?>">Grafik Tensi</a>
          </div>
        </div>
         
      </li>
    

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('nakes/data_kes_lansia') ?>"> 
        <i class="fas fa-database"></i>
          <span>Data Kesehatan Lansia</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('nakes/gizi') ?>"> 
        <i class="fas fa-database"></i>
          <span>Gizi</span>
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
        <!-- End of Topbar -->