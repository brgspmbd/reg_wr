
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url('assets/'); ?>img/logo-aarc-2023.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AARC 2023</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url(''); ?>dashboard" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(''); ?>user" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(''); ?>user_approved" class="nav-link ">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                User Approved
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(''); ?>business_forum" class="nav-link ">
              <i class="nav-icon fas fa-business-time"></i>
              <p>
                Business Forum
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(''); ?>submission_paper" class="nav-link ">
              <i class="nav-icon fas fa-paperclip"></i>
              <p>
                Submission Paper
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>