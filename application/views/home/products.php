<!DOCTYPE html>
<html lang="en">
  <head>
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
                  <div class="shop_product_count"><span>186</span> products found</div>
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
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_1.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 1</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item discount">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_10.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225<span>₹ 300</span></div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 10</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_11.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 11</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_12.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 12</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('assets/img/featured_13.jpg'); ?>" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="<?php echo base_url('product'); ?>" tabindex="0">Product 13</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_14.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 14</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_2.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379<span>₹ 300</span></div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 2</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_3.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225<span>₹ 300</span></div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 3</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_4.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 4</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_5.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 5</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_6.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 6</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_4.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 6</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_7.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 7</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_8.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 8</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item discount">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_9.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225<span>₹ 300</span></div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 9</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_1.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 1</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_10.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 10</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_13.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 13</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_14.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 225</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 14</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

                  <!-- Product Item -->
                  <div class="product_item is_new">
                    <div class="product_border"></div>
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_2.jpg" alt=""></div>
                    <div class="product_content">
                      <div class="product_price">₹ 379</div>
                      <div class="product_name"><div><a href="product.html" tabindex="0">Product 2</a></div></div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                      <li class="product_mark product_discount">-25%</li>
                      <li class="product_mark product_new">new</li>
                    </ul>
                  </div>

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
