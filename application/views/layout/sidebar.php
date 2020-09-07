
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <?php if ($halaman == 'dashboard'): ?>
            <a href="<?=site_url('admin');?>" class="nav-link active">
            <?php else: ?>
            <a href="<?=site_url('admin');?>" class="nav-link">
            <?php endif ?>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <?php if ($halaman == 'pengaduan'): ?>
            <a href="<?=site_url('admin/pengaduan');?>" class="nav-link active">
            <?php else: ?>
            <a href="<?=site_url('admin/pengaduan');?>" class="nav-link">
            <?php endif ?>
              <i class="nav-icon far fa-flag"></i>
              <p>
                Pengaduan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <?php if ($halaman == 'aspirasi'): ?>
            <a href="<?=site_url('admin/aspirasi');?>" class="nav-link active">
            <?php else: ?>
            <a href="<?=site_url('admin/aspirasi');?>" class="nav-link">
            <?php endif ?>
              <i class="nav-icon far fa-lightbulb"></i>
              <p>
                Aspirasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <?php if ($halaman == 'pengumuman'): ?>
            <a href="<?=site_url('admin/pengumuman');?>" class="nav-link active">
            <?php else: ?>
            <a href="<?=site_url('admin/pengumuman');?>" class="nav-link">
            <?php endif ?>
              <i class="nav-icon far fa-bell"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>