<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SRB</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sri Raja Bags</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
				<li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url('admin/notifications'); ?>">View all</a></li>
            </ul>
          </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo base_url('assets/img/admin/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->

                        <li class="user-header">
                            <img src="<?php echo base_url('assets/img/admin/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $this->session->userdata('name'); ?>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url('admin/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url('admin/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!--notification messages-->
<?php if($this->session->flashdata('success')): ?>
  <div class="alert_msg1 animated slideInUp bg-succ">
    <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
  </div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
  <div class="alert_msg1 animated slideInUp bg-warn">
    <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
  </div>
<?php endif; ?>
<div id="message"></div>
