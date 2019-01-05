<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
        <i class="ion ion-android-person d-lg-none"></i>
        <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('email'); ?></div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="<?php echo base_url('profile');?>" class="dropdown-item has-icon">
          <i class="ion ion-android-person"></i> Profile
        </a>
        <a href="<?php echo base_url('admin/change_password');?>" class="dropdown-item has-icon">
          <i class="ion ion-wrench"></i> Settings
        </a>
        <a href="<?php echo base_url('admin/logout');?>" class="dropdown-item has-icon">
          <i class="ion ion-log-out"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
