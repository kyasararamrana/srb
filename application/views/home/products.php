<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SRB | <?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $links; ?>
  </head>
  <body>
    <div class="super_container">
      <?php echo $header; ?>
      <!-- Home -->

      <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/img/shop_background.jpg'); ?>"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
          <h1 class="home_title">Products</h1>
        </div>
      </div>

      <!-- Shop -->

      <div class="shop">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3">

              <!-- Shop Sidebar -->
              <div class="shop_sidebar">
                <div class="sidebar_section">
                  <div class="sidebar_title">Categories</div>
                  <ul class="sidebar_categories1">
                    <?php if (count($categories) > 0) { ?>
                      <?php foreach ($categories as $c) { ?>
                        <li><a href="<?php echo base_url('products/'.$c->id); ?>"><?php echo $c->name; ?></a></li>
                      <?php } ?>
                    <?php } else { ?>
                      <li>No Categories found</li>
                    <?php } ?>
                    <!-- <li><a href="shop.html">D-Cut Bags</a></li>
                    <li><a href="shop.html">Handle Bags</a></li>
                    <li><a href="shop.html">U- Cut Bags</a></li>
                    <li><a href="shop.html">Gazetted Bags</a></li>
                    <li><a href="shop.html">Plain Sheets</a></li> -->
                  </ul>
                  <!-- <ul class="sidebar_categories2">
                    <li><a href="shop.html">Model Number Sheets</a></li>
                    <li><a href="shop.html">Missprint Bags</a></li>
                    <li><a href="shop.html">Printed Rolls</a></li>
                    <li><a href="shop.html">Printed sheets</a></li>
                    <li><a href="shop.html">Printed Bags</a></li>
                  </ul> -->
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="sidebar_section filter_by_section">
                  <div class="sidebar_title">Filter By</div>
                  <div class="sidebar_subtitle">Price</div>
                  <div class="filter_price">
                    <div id="slider-range" class="slider_range"></div>
                    <p>Range: </p>
                    <p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Material Type</label>
                    <select class="form-control">
                      <option>select</option>
                      <option>Type 1</option>
                      <option>Type 2</option>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Bag Size</label>
                    <select class="form-control">
                      <option>select</option>
                      <option>Size 1</option>
                      <option>Size 2</option>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="sidebar_subtitle color_subtitle">Bag Color</div>
                  <ul class="colors_list">
                    <li class="color"><a href="#" style="background: #b19c83;"></a></li>
                    <li class="color"><a href="#" style="background: #000000;"></a></li>
                    <li class="color"><a href="#" style="background: #999999;"></a></li>
                    <li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
                    <li class="color"><a href="#" style="background: #df3b3b;"></a></li>
                    <li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
                  </ul>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Bag GSM</label>
                    <select class="form-control">
                      <option>select</option>
                      <option>GSM 1</option>
                      <option>GSM 2</option>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Handle Type</label>
                    <select class="form-control">
                      <option>select</option>
                      <option>Type 1</option>
                      <option>Type 2</option>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="sidebar_subtitle color_subtitle">Sidepatty Color</div>
                  <ul class="colors_list">
                    <li class="color"><a href="#" style="background: #b19c83;"></a></li>
                    <li class="color"><a href="#" style="background: #000000;"></a></li>
                    <li class="color"><a href="#" style="background: #999999;"></a></li>
                    <li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
                    <li class="color"><a href="#" style="background: #df3b3b;"></a></li>
                    <li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
                  </ul>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Sidepatty GSM</label>
                    <select class="form-control">
                      <option>select</option>
                      <option>GSM 1</option>
                      <option>GSM 2</option>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Printing Type</label>
                    <select class="form-control">
                      <option>select</option>
                      <option>Type 1</option>
                      <option>Type 2</option>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Model Number</label>
                    <select class="form-control">
                      <option>select</option>
                      <option>Number 1</option>
                      <option>Number 2</option>
                    </select>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-9 col-md-9">

              <!-- Shop Content -->

              <div class="shop_content">
                <div class="shop_bar clearfix">
                  <div class="shop_product_count"><span><?php echo (isset($products) && count($products) > 0) ? count($products) : 0 ; ?></span> PRODUCTS FOUND</div>
                  <div class="shop_sorting">
                    <span>Sort by:</span>
                    <ul>
                      <li>
                        <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></i></span>
                        <ul>
                          <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
                          <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                          <li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="product_grid">
                  <div class="product_grid_border"></div>

                  <!-- Product Item -->
                  <?php if (isset($products) && count($products) > 0) { ?>
                    <?php foreach ($products as $p) { ?>
                      <div class="product_item is_new">
                        <div class="product_border"></div>
                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
                          <?php if (isset($p->image) && !empty($p->image) && file_exists('assets/uploads/product/'.$p->image)) { ?>
                            <img src="<?php echo base_url('assets/uploads/product/'.$p->image); ?>" alt="">
                          <?php } ?>
                        </div>
                        <div class="product_content">
                          <div class="product_price">₹ <?php echo $p->net_price; ?></div>
                          <div class="product_name"><div><a href="<?php echo base_url('product/'.$p->id); ?>" tabindex="0"><?php echo $p->name; ?></a></div></div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    <?php } ?>


                </div>

                <!-- Shop Page Navigation -->

                <div class="shop_page_nav d-flex flex-row">
                  <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
                  <ul class="page_nav d-flex flex-row">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">21</a></li>
                  </ul>
                  <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
                </div>

              <?php } else { ?>
                <div class="product_item">No Products found</div>
              <?php } ?>

              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Recently Viewed -->

      <div class="viewed">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="viewed_title_container">
                            <h3 class="viewed_title">Recently Viewed</h3>
                            <div class="viewed_nav_container">
                                <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </div>

                        <div class="viewed_slider_container">

                            <!-- Recently Viewed Slider -->

                            <div class="owl-carousel owl-theme viewed_slider">

                                <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="img/featured_8.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">₹  225<span>₹  300</span></div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="img/featured_9.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">₹  379</div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="img/featured_7.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">₹  225</div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="img/featured_6.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">₹  379</div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="img/featured_5.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">₹  225<span>₹  300</span></div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Recently Viewed Item -->
                                <div class="owl-item">
                                    <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image"><img src="img/featured_4.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">₹  375</div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php echo $footer; ?>
    </div>
    <?php echo $scripts ?>
  </body>
</html>
