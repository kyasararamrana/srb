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
        <p>
          <?php echo $this->session->userdata('name'); ?>
        </p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">DASHBOARD</li>
      <li class="active"><a href="<?php echo base_url('/admin'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <?php if($this->session->userdata('role') == 'Admin') { ?>
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
      <?php } ?>
      <!-- Super Admin -->
      <?php if ($this->session->userdata('role') == 'Superadmin') { ?>
        <li class="header">BAGS</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-shopping-bag"></i> <span>Bags</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('bagtype/create'); ?>">Add Bag Type</a></li>
            <li><a href="<?php echo base_url('bagtype'); ?>">Bag Type List</a></li>
            <li><a href="<?php echo base_url('baglayout/create'); ?>">Add Bag Layout</a></li>
            <li><a href="<?php echo base_url('baglayout'); ?>">Bag Layout List</a></li>
            <li><a href="<?php echo base_url('bagsize/create'); ?>">Add Bag Size</a></li>
            <li><a href="<?php echo base_url('bagsize'); ?>">Bag Size List</a></li>
            <li><a href="<?php echo base_url('bagcolor/create'); ?>">Add Bag Color</a></li>
            <li><a href="<?php echo base_url('bagcolor'); ?>">Bag Color List</a></li>
            <li><a href="<?php echo base_url('baggsm/create'); ?>">Add Bag GSM</a></li>
            <li><a href="<?php echo base_url('baggsm'); ?>">Bag GSM List</a></li>
            <li><a href="<?php echo base_url('printingmethod/create'); ?>">Add Printing Method</a></li>
            <li><a href="<?php echo base_url('printingmethod'); ?>">Printing Method List</a></li>
            <li><a href="<?php echo base_url('printingcolortype/create'); ?>">Add Printing Color Type</a></li>
            <li><a href="<?php echo base_url('printingcolortype'); ?>">Printing Color Type List</a></li>
            <li><a href="<?php echo base_url('printingstyle/create'); ?>">Add Printing Style</a></li>
            <li><a href="<?php echo base_url('printingstyle'); ?>">Printing Style List</a></li>
            <li><a href="<?php echo base_url('suggestedprintingcolor/create'); ?>">Add Suggested Printing Color</a></li>
            <li><a href="<?php echo base_url('suggestedprintingcolor'); ?>">Suggested Printing Color List</a></li>
            <li><a href="<?php echo base_url('printinglanguage/create'); ?>">Add Printing Language</a></li>
            <li><a href="<?php echo base_url('printinglanguage'); ?>">Printing Language List</a></li>
            <li><a href="<?php echo base_url('bag/create'); ?>">Add Bag</a></li>
            <li><a href="<?php echo base_url('bag'); ?>">Bags List</a></li>
          </ul>
        </li>
        <li class="header">Price</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Price</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('price/create'); ?>">Add Price</a></li>
            <li><a href="<?php echo base_url('price'); ?>">Prices List</a></li>
          </ul>
        </li>
        <li class="header">ROLES</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Roles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('superadmin/role'); ?>">Add Role</a></li>
            <li><a href="<?php echo base_url('superadmin/roles'); ?>">Roles List</a></li>
          </ul>
        </li>
        <li class="header">ORDERS</li>
        <li><a href="<?php echo base_url('superadmin/orderslist'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Orders List</span></a>
        </li>
      <?php } ?>
      <!-- Order Management -->
      <?php if ($this->session->userdata('role') == 'Order') { ?>
        <li><a href="<?php echo base_url('order/orderconfirm'); ?>">
          <i class="fa fa-check-circle"></i> <span>Confirmation Orders</span></a>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Roll Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('order/work'); ?>">Add Work</a></li>
            <li><a href="<?php echo base_url('order/works'); ?>">Works List</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('order/orderstatus'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Orders Status List</span></a>
        </li>
        <li><a href="<?php echo base_url('order/stocks'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Stock List</span></a>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-reply"></i> <span>Return Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('order/return_bags'); ?>">Add Return Quantity</a></li>
            <li><a href="<?php echo base_url('order/return_bags_list'); ?>">Return Quantity List</a></li>
          </ul>
        </li>
      <?php } ?>
      <!-- Sales Management -->
      <?php if ($this->session->userdata('role') == 'Sales') { ?>
        <li><a href="<?php echo base_url('sales/create'); ?>">
          <i class="fa fa-file-text"></i> <span>Orders</span></a>
        </li>
        <li><a href="<?php echo base_url('sales'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Orders List</span></a>
        </li>
        <li><a href="<?php echo base_url('sales/pricelist'); ?>">
          <i class="fa fa-money"></i> <span>Price List</span></a>
        </li>
        <li><a href="<?php echo base_url('sales/wishlist'); ?>">
          <i class="fa fa-star"></i> <span>Wishlist</span></a>
        </li>
      <?php } ?>
      <!-- Inventory -->
      <?php if($this->session->userdata('role') == 'Inventory') { ?>
        <li><a href="<?php echo base_url('inventory/orderslist'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Orders List</span></a>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cubes"></i> <span>Stocks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/addstock'); ?>">Add Stock</a></li>
            <li><a href="<?php echo base_url('inventory/stocklist'); ?>">Stock List</a></li>
            <li><a href="<?php echo base_url('inventory/add_damage_stock'); ?>">Add Damage Stock</a></li>
            <li><a href="<?php echo base_url('inventory/damaged_stock_list'); ?>">Damaged Stock List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Vendors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('vendor/add'); ?>">Add Vendor</a></li>
            <li><a href="<?php echo base_url('vendor/lists'); ?>">Vendors List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Roles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/role'); ?>">Add Role</a></li>
            <li><a href="<?php echo base_url('inventory/roles'); ?>">Roles List</a></li>
          </ul>
        </li>
		 <li><a href="<?php echo base_url('inventory/materialorderlist'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Stcok order List</span></a>
        </li>
      <?php } ?>
        <!-- Zip Module -->
        <?php if ($this->session->userdata('role') == 'Zip') { ?>
          <li class="header">Zip Role Module</li>
          <li><a href="<?php echo base_url('zipmodule/orderslist'); ?>">
            <i class="fa fa-shopping-cart"></i> <span>Orders List</span></a>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-file-archive-o"></i> <span>Zips</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('zipmodule/addzip'); ?>">Add Zip</a></li>
              <li><a href="<?php echo base_url('zipmodule/ziplist'); ?>">Zip List</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('zipmodule/orderstock'); ?>">
            <i class="fa fa-shopping-cart"></i> <span>Order Stock</span></a>
          </li>
        <?php } ?>
        <!-- Handle Module -->
        <?php if ($this->session->userdata('role') == 'Handle') { ?>
          <li class="header">Handle Role Module</li>
          <li><a href="<?php echo base_url('handle/orders'); ?>">
            <i class="fa fa-shopping-cart"></i> <span>Orders List</span></a>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-cubes"></i> <span>Handles</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('handle/create'); ?>">Add Handle</a></li>
              <li><a href="<?php echo base_url('handle'); ?>">Handle List</a></li>
            </ul>
          </li>
		  <li class="treeview">
            <a href="#"><i class="fa fa-cubes"></i> <span>Order Stock</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('handle/orderstock'); ?>">Add Order Stock</a></li>
              <li><a href="<?php echo base_url('handle/orderstocklist'); ?>">Order Stock List</a></li>
            </ul>
          </li>
        <?php } ?>
        <!-- Sidepatty Module -->
        <?php if ($this->session->userdata('role') == 'Sidepatty') { ?>
          <li class="header">Sidepatty Role Module</li>
          <li><a href="<?php echo base_url('sidepattymodule/orderslist'); ?>">
            <i class="fa fa-shopping-cart"></i> <span>Orders List</span></a>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-cubes"></i> <span>Sidepatty</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('sidepattymodule/addsidepatty'); ?>">Add Sidepatty</a></li>
              <li><a href="<?php echo base_url('sidepattymodule/sidepattylist'); ?>">Sidepatty List</a></li>
            </ul>
          </li>
		  <li class="treeview">
            <a href="#"><i class="fa fa-cubes"></i> <span>Order Stock</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('sidepattymodule/orderstock'); ?>">Add Order Stock</a></li>
              <li><a href="<?php echo base_url('sidepattymodule/orderstocklist'); ?>">Order Stock List</a></li>
            </ul>
          </li>

          <li><a href="<?php echo base_url('sidepattymodule/printing'); ?>">
            <i class="fa fa-paint-brush"></i> <span>Printing</span></a>
          </li>
        <?php } ?>
        <!-- Bag Module -->
        <?php if ($this->session->userdata('role') == 'Bag') { ?>
        <li class="header">Bag Role Module</li>
        <li><a href="<?php echo base_url('bagmodule/orderslist'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Orders List</span></a>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-shopping-bag"></i> <span>Bags</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('bagmodule/addbag'); ?>">Add Bag</a></li>
            <li><a href="<?php echo base_url('bagmodule/baglist'); ?>">Bag List</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('bagmodule/orderstock'); ?>">
          <i class="fa fa-shopping-cart"></i> <span>Order Stock</span></a>
        </li>
      <?php } ?>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
