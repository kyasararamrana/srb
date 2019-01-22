<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fas fa-mobile-alt"></i></div>+91 xxx 005 xx70
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="far fa-envelope"></i></div>
                        <a href="#">srbsales@gmail.com</a>
                    </div>
                    <div class="top_bar_content ml-auto">

                        <div class="top_bar_user">
                            <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
                              <div class="user_icon"><i class="far fa-user"></i></div>
                              <div><a href="<?php echo base_url('home/profile'); ?>" class="text-white"><?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname'); ?></a></div>
                              <div class="user_icon"><i class="fas fa-sign-out-alt"></i></div>
                              <div><a class="text-white" href="<?php echo base_url('home/logout') ?>">logout</a></div>
                            <?php } else { ?>
                              <div class="user_icon"><i class="far fa-user"></i></div>
                              <div><a class="text-white" href="<?php echo base_url('home/register'); ?>">Register</a></div>
                              <div class="user_icon"><i class="fas fa-sign-in-alt"></i></div>
                              <div><a class="text-white" href="<?php echo base_url('home/login') ?>">Sign in</a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                      <div class="logo">
                        <a href="<?php echo base_url(); ?>">
                          <?php if((isset($logo->logo) && !empty($logo->logo)) && file_exists('assets/uploads/logo/'.$logo->logo)){ ?>
                            <img style="width:100px;height:auto;" src="<?php echo base_url('assets/uploads/logo/'.$logo->logo); ?>" class="img-responsive">
                          <?php } else{ ?>
                            <img style="width:100px;height:auto;" src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-responsive">
                          <?php } ?>
                        </a>
                      </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list clc">
                                            <span class="custom_dropdown_placeholder clc">All Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <?php if (count($categories) > 0) { ?>
                                                  <?php foreach($categories as $c){ ?>
                                                    <li><a class="clc" href="shop.php"><?php echo $c->name; ?></a></li>
                                                  <?php } ?>
                                                <?php } else { ?>
                                                  <li>No Categories found</li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo base_url('assets/img/search.png'); ?>" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist_icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                <div class="wishlist_count">115</div>
                            </div>
                        </div>

                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <i class="fas fa-shopping-bag"></i>
                                    <div class="cart_count">
                                      <span>
                                        <?php if (isset($cart->cart_count) && !empty($cart->cart_count)) { ?>
                                          <?php echo $cart->cart_count; ?>
                                        <?php } else { ?>
                                          <?php echo 0; ?>
                                        <?php } ?>
                                      </span>
                                    </div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="<?php echo base_url('cart'); ?>">Cart</a></div>
                                    <div class="cart_price">
                                      <?php if (isset($cart->cart_count) && !empty($total->total_cart)) { ?>
                                        ₹ <?php echo number_format($total->total_cart,2, '.', ','); ?>
                                      <?php } else { ?>
                                        ₹ <?php echo number_format(0,2, '.', ','); ?>
                                      <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row">

                        <!-- Categories Menu -->

                        <div class="cat_menu_container">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">categories</div>
                            </div>

                            <ul class="cat_menu">
                                <?php if (count($categories) > 0) { ?>
                                  <?php foreach($categories as $c){ ?>
                                    <li><a class="clc" href="<?php echo base_url('products/'.$c->id); ?>"><?php echo $c->name; ?></a></li>
                                  <?php } ?>
                                <?php } else { ?>
                                  <li>No Categories found</li>
                                <?php } ?>
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-5">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li><a href="<?php echo base_url(); ?>">Home<i class="fas fa-chevron-down"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>">About Us<i class="fas fa-chevron-down"></i></a></li>
                                <li><a href="<?php echo base_url('products'); ?>">Products<i class="fas fa-chevron-down"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>">Blog<i class="fas fa-chevron-down"></i></a></li>
                                <li><a href="<?php echo base_url('contact'); ?>">Contact<i class="fas fa-chevron-down"></i></a></li>
                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->

    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page_menu_content">

                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav">
                            <li class="page_menu_item">
                                <a href="index.php">Home<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="page_menu_item"><a href="#">About Us<i class="fas fa-chevron-down"></i></a></li>
                            <li class="page_menu_item"><a href="shop.php">Products<i class="fas fa-chevron-down"></i></a></li>
                            <li class="page_menu_item"><a href="product.php">Single Product<i class="fas fa-chevron-down"></i></a></li>
                            <li class="page_menu_item"><a href="#">blog<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="contact.php">contact<i class="fa fa-angle-down"></i></a></li>
                        </ul>

                        <div class="menu_contact">
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon"><img src="img/phone_white.png" alt=""></div>+91 xxx 005 xx70
                            </div>
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon"><img src="img/mail_white.png" alt=""></div><a href="#">srbsales@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--notification messages-->
<div id="message" style=""></div>
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
