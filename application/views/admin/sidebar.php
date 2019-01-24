<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/img/admin/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('name'); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">DASHBOARD</li>
            <li class="active"><a href="<?php echo base_url('/admin'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="header">PARAMETERS</li>
            <li class="treeview">
                <a href="#"><i class="fa fa-balance-scale"></i> <span>Sizes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('size/create'); ?>">Add Size</a></li>
                    <li><a href="<?php echo base_url('size'); ?>">Sizes List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-paint-brush"></i> <span>Colors</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('color/create'); ?>">Add Color</a></li>
                    <li><a href="<?php echo base_url('color'); ?>">Colors List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-newspaper-o"></i> <span>Gsm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('gsm/create'); ?>">Add Gsm</a></li>
                    <li><a href="<?php echo base_url('gsm'); ?>">Gsm List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-thumbs-up"></i> <span>Quality</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('quality/create'); ?>">Add Quality</a></li>
                    <li><a href="<?php echo base_url('quality'); ?>">Quality List</a></li>
                </ul>
            </li>
            <li class="header">CATEGORY PAGE</li>
            <li class="treeview">
                <a href="#"><i class="fa fa-tags"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('category/create'); ?>">Add Category</a></li>
                    <li><a href="<?php echo base_url('category'); ?>">Categories List</a></li>
                </ul>
            </li>
            <li class="header">PRODUCT PAGE</li>
            <li class="treeview">
                <a href="#"><i class="fa fa-cube"></i> <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('product/create'); ?>">Add Product</a></li>
                    <li><a href="<?php echo base_url('product'); ?>">Products List</a></li>
                </ul>
            </li>
            <!-- <li><a href="addons.php"><i class="fa fa-puzzle-piece"></i> <span>Addons</span></a></li> -->
            <li class="header">HOME PAGE</li>
            <li class="treeview">
                <a href="#"><i class="fa fa-image"></i> <span>Home Banner</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('banner/create'); ?>">Add Banner</a></li>
                    <li><a href="<?php echo base_url('banner'); ?>">Banners List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-sliders"></i> <span>Sliders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('slider/create'); ?>">Add Sliders</a></li>
                    <li><a href="<?php echo base_url('slider'); ?>">Sliders List</a></li>
                </ul>
            </li>
            <li class="header">HEADER</li>
            <li><a href="<?php echo base_url('/logo'); ?>"><i class="fa fa-link"></i> <span>Logo</span></a></li>
            <li class="header">ORDERS</li>
            <li><a href="<?php echo base_url('/orders'); ?>"><i class="fa fa-shopping-cart"></i> <span>Orders</span></a></li>
            <li class="header">REQUEST</li>
            <li><a href="<?php echo base_url('/request'); ?>"><i class="fa fa-handshake-o"></i> <span>Requests</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
