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

        <!-- search form (Optional) -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <li class="active"><a href="index.php"><i class="fa fa-link"></i> <span>Logo</span></a></li>
            <li class="header">SHOP PAGE</li>
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
                    <li><a href="<?php echo base_url('products/create'); ?>">Add Product</a></li>
                    <li><a href="product_list.php">Products List</a></li>
                </ul>
            </li>
            <li><a href="addons.php"><i class="fa fa-puzzle-piece"></i> <span>Addons</span></a></li>
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
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
