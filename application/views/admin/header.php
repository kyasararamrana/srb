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

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo base_url('assets/img/admin/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $this->session->userdata('first_name').$this->session->userdata('last_name'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="<?php echo base_url('assets/img/admin/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $this->session->userdata('first_name').$this->session->userdata('last_name'); ?>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url('admin/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Settings -->
                <!--<li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-gears"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header"><a href="#">My Profile</a></li>
                        <li class="header"><a href="#">Change Password</a></li>
                        <li class="header"><a href="#">Sign Out</a></li>
                    </ul>
                </li>-->

            </ul>
        </div>
    </nav>
</header>
