    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url("admin"); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dinas'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dinas</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/jabatan'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Jabatan</span></a>
      </li>


      <li class="nav-item">

        <a class="nav-link collapsed" href="#anggota" data-toggle="collapse" data-target="#anggota" aria-expanded="true" aria-controls="collapseMaster">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Anggota</span>
        </a>
        <div id="anggota" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <?php foreach ($dinas as $dns) : ?>
              <a class="collapse-item" href="">Dinas <?= $dns->nama ?></a>
            <?php endforeach; ?>
          </div>
      </li>




      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>