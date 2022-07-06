  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url ('dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Praktikum 10</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url ('dist/img/user2-160x160.jpg" class="img-circle elevation-2')?>" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <!-- Untuk menyetting nama pada website nya terganti sesuai dengan username dan role yang di masukkan -->
            <?php
              if($this->session->has_userdata('USERNAME')){
                echo $this->session->userdata('USERNAME');
                echo '-'.$this->session->userdata('ROLE');
              }
            ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url ('index.php')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php
            if($this->session->userdata('ROLE')=='ADMIN'){
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="fas fa-book-open"></i>
              <p>
                Praktikum 10
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url ('index.php/mahasiswa')?>" class="nav-link">
                  <i class="fas fa-graduation-cap"></i>
                  <p>Daftar Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url ('index.php/dosen')?>" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>Daftar Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url ('index.php/matakuliah')?>"class="nav-link">
                <i class="fas fa-book"></i>
                  <p>Daftar Matakuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url ('index.php/prodi')?>"class="nav-link">
                <i class=" fas fa-table"></i>
                  <p>Daftar Prodi</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
            }elseif($this->session->userdata('ROLE')=='MAHASISWA'){
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="fas fa-book-open"></i>
              <p>
                Praktikum 10
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url ('index.php/mahasiswa')?>" class="nav-link">
                  <i class="fas fa-graduation-cap"></i>
                  <p>Daftar Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
            }
          ?>
          <li class="nav-item">
            <a href="<?php echo base_url ('index.php/login')?>" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>