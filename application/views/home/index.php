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
      <!-- Banner -->

      <div class="banner">
          <div class="banner_background" style="background-image:url(<?php echo base_url('assets/img/banner12.jpg'); ?>)"></div>
          <div class="container fill_height">
              <div class="row fill_height">
                  <!--<div class="banner_product_image"><img src="img/banner_product.png" alt=""></div>-->
                  <div class="col-lg-5 offset-lg-4 fill_height">
                      <div class="banner_content">
                          <h1 class="banner_text">new product collections</h1>
                          <div class="banner_price">Upto <span>50%</span> Discount</div>
                          <div class="banner_product_name">&nbsp;</div>
                          <div class="button banner_button"><a href="#">Shop Now</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Characteristics -->

      <div class="characteristics">
          <div class="container">
              <div class="row">

                  <!-- Char. Item -->
                  <div class="col-lg-3 col-md-6 char_col">

                      <div class="char_item d-flex flex-row align-items-center justify-content-start">
                          <div class="char_icon"><img src="<?php echo base_url('assets/img/char_1.png'); ?>" alt=""></div>
                          <div class="char_content">
                              <div class="char_title">Step-1</div>
                              <div class="char_subtitle">from ₹ 500.00</div>
                          </div>
                      </div>
                  </div>

                  <!-- Char. Item -->
                  <div class="col-lg-3 col-md-6 char_col">

                      <div class="char_item d-flex flex-row align-items-center justify-content-start">
                          <div class="char_icon"><img src="<?php echo base_url('assets/img/char_2.png') ?>" alt=""></div>
                          <div class="char_content">
                              <div class="char_title">Step-2</div>
                              <div class="char_subtitle">from ₹ 500.00</div>
                          </div>
                      </div>
                  </div>

                  <!-- Char. Item -->
                  <div class="col-lg-3 col-md-6 char_col">

                      <div class="char_item d-flex flex-row align-items-center justify-content-start">
                          <div class="char_icon"><img src="<?php echo base_url('assets/img/char_3.png') ?>" alt=""></div>
                          <div class="char_content">
                              <div class="char_title">Step-3</div>
                              <div class="char_subtitle">from ₹ 500.00</div>
                          </div>
                      </div>
                  </div>

                  <!-- Char. Item -->
                  <div class="col-lg-3 col-md-6 char_col">

                      <div class="char_item d-flex flex-row align-items-center justify-content-start">
                          <div class="char_icon"><img src="<?php echo base_url('assets/img/char_4.png') ?>" alt=""></div>
                          <div class="char_content">
                              <div class="char_title">Step-4</div>
                              <div class="char_subtitle">from ₹ 500.00</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Deals of the week -->

      <div class="deals_featured">
          <div class="container">
              <div class="row">
                  <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                      <!-- Deals -->

                      <div class="deals">
                          <div class="deals_title">Deals of the Week</div>
                          <div class="deals_slider_container">

                              <!-- Deals Slider -->
                              <div class="owl-carousel owl-theme deals_slider">

                                  <!-- Deals Item -->
                                  <div class="owl-item deals_item">
                                      <div class="deals_image"><img src="img/deals_1.jpg" alt=""></div>
                                      <div class="deals_content">
                                          <!--<div class="deals_info_line d-flex flex-row justify-content-start">
                                              <div class="deals_item_category"><a href="#">Headphones</a></div>
                                              <div class="deals_item_price_a ml-auto">₹ 3000.00</div>
                                          </div>-->
                                          <div class="deals_info_line d-flex flex-row justify-content-start">
                                              <div class="deals_item_name">Product Name</div>
                                              <div class="deals_item_price ml-auto">₹ 2250.00</div>
                                          </div>
                                          <div class="available">
                                              <div class="available_line d-flex flex-row justify-content-start">
                                                  <div class="available_title">Available: <span>6</span></div>
                                                  <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                              </div>
                                              <div class="available_bar"><span style="width:17%"></span></div>
                                          </div>
                                          <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                              <div class="deals_timer_title_container">
                                                  <div class="deals_timer_title">Hurry Up</div>
                                                  <div class="deals_timer_subtitle">Offer ends in:</div>
                                              </div>
                                              <div class="deals_timer_content ml-auto">
                                                  <div class="deals_timer_box clearfix" data-target-time="">
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                          <span>hours</span>
                                                      </div>
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                          <span>mins</span>
                                                      </div>
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                          <span>secs</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <!-- Deals Item -->
                                  <div class="owl-item deals_item">
                                      <div class="deals_image"><img src="img/deals_2.jpg" alt=""></div>
                                      <div class="deals_content">
                                          <!--<div class="deals_info_line d-flex flex-row justify-content-start">
                                              <div class="deals_item_category"><a href="#">Headphones</a></div>
                                              <div class="deals_item_price_a ml-auto">₹ 300</div>
                                          </div>-->
                                          <div class="deals_info_line d-flex flex-row justify-content-start">
                                              <div class="deals_item_name">Product Name</div>
                                              <div class="deals_item_price ml-auto">₹ 225</div>
                                          </div>
                                          <div class="available">
                                              <div class="available_line d-flex flex-row justify-content-start">
                                                  <div class="available_title">Available: <span>6</span></div>
                                                  <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                              </div>
                                              <div class="available_bar"><span style="width:17%"></span></div>
                                          </div>
                                          <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                              <div class="deals_timer_title_container">
                                                  <div class="deals_timer_title">Hurry Up</div>
                                                  <div class="deals_timer_subtitle">Offer ends in:</div>
                                              </div>
                                              <div class="deals_timer_content ml-auto">
                                                  <div class="deals_timer_box clearfix" data-target-time="">
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                          <span>hours</span>
                                                      </div>
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                          <span>mins</span>
                                                      </div>
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                          <span>secs</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <!-- Deals Item -->
                                  <div class="owl-item deals_item">
                                      <div class="deals_image"><img src="img/deals_3.jpg" alt=""></div>
                                      <div class="deals_content">
                                          <!--<div class="deals_info_line d-flex flex-row justify-content-start">
                                              <div class="deals_item_category"><a href="#">Headphones</a></div>
                                              <div class="deals_item_price_a ml-auto">₹ 300</div>
                                          </div>-->
                                          <div class="deals_info_line d-flex flex-row justify-content-start">
                                              <div class="deals_item_name">Product Name</div>
                                              <div class="deals_item_price ml-auto">₹ 225</div>
                                          </div>
                                          <div class="available">
                                              <div class="available_line d-flex flex-row justify-content-start">
                                                  <div class="available_title">Available: <span>6</span></div>
                                                  <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                              </div>
                                              <div class="available_bar"><span style="width:17%"></span></div>
                                          </div>
                                          <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                              <div class="deals_timer_title_container">
                                                  <div class="deals_timer_title">Hurry Up</div>
                                                  <div class="deals_timer_subtitle">Offer ends in:</div>
                                              </div>
                                              <div class="deals_timer_content ml-auto">
                                                  <div class="deals_timer_box clearfix" data-target-time="">
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                                                          <span>hours</span>
                                                      </div>
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer3_min" class="deals_timer_min"></div>
                                                          <span>mins</span>
                                                      </div>
                                                      <div class="deals_timer_unit">
                                                          <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                                                          <span>secs</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>

                          </div>

                          <div class="deals_slider_nav_container">
                              <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                              <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                          </div>
                      </div>

                      <!-- Featured -->
                      <div class="featured">
                          <div class="tabbed_container">
                              <div class="tabs">
                                  <ul class="clearfix">
                                      <li class="active">Featured</li>
                                      <li>On Sale</li>
                                      <li>Most Viewed</li>
                                  </ul>
                                  <div class="tabs_line"><span></span></div>
                              </div>

                              <!-- Product Panel -->
                              <div class="product_panel panel active">
                                  <div class="featured_slider slider">

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_1.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">D-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_3.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Handle Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button active">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_5.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">U-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('assets/img/featured_7.jpg'); ?>" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Missprint Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_9.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 225</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Rolls</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_12.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Bags</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_13.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Sheets</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_2.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">D-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_4.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Handle Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button active">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_6.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">U-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_8.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Missprint Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_10.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 225</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Rolls</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_11.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Bags</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_14.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Sheets</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="featured_slider_dots_cover"></div>
                              </div>

                              <!-- Product Panel -->
                              <div class="product_panel panel">
                                  <div class="featured_slider slider">

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_1.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">D-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_3.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Handle Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button active">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_5.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">U-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_7.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Missprint Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_9.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 225</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Rolls</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_12.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Bags</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_13.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Sheets</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_2.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">D-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_4.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Handle Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button active">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_6.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">U-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_8.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Missprint Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_10.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 225</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Rolls</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_11.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Bags</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_14.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Sheets</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="featured_slider_dots_cover"></div>
                              </div>

                              <!-- Product Panel -->
                              <div class="product_panel panel">
                                  <div class="featured_slider slider">

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_1.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">D-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_3.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Handle Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button active">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_5.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">U-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_7.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Missprint Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_9.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 225</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Rolls</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_12.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Bags</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_13.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Sheets</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_2.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">D-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_4.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Handle Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button active">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_6.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">U-Cut Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_8.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price discount">₹ 225<span>₹ 300</span></div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Missprint Bag</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_10.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 225</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Rolls</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_11.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Bags</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount"></li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                      <!-- Slider Item -->
                                      <div class="featured_slider_item">
                                          <div class="border_active"></div>
                                          <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="img/featured_14.jpg" alt=""></div>
                                              <div class="product_content">
                                                  <div class="product_price">₹ 379</div>
                                                  <div class="product_name">
                                                      <div><a href="product.php">Printed Sheets</a></div>
                                                  </div>
                                                  <div class="product_extras">
                                                      <div class="product_color">
                                                          <input type="radio" checked name="product_color" style="background:#b19c83">
                                                          <input type="radio" name="product_color" style="background:#000000">
                                                          <input type="radio" name="product_color" style="background:#999999">
                                                      </div>
                                                      <button class="product_cart_button">Add to Cart</button>
                                                  </div>
                                              </div>
                                              <div class="product_fav"><i class="fas fa-heart"></i></div>
                                              <ul class="product_marks">
                                                  <li class="product_mark product_discount">-25%</li>
                                                  <li class="product_mark product_new">new</li>
                                              </ul>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="featured_slider_dots_cover"></div>
                              </div>

                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>

      <!-- Banner -->

      <div class="banner_2">
          <div class="banner_2_background" style="background-image:url(img/banner_2_background.jpg)"></div>
          <div class="banner_2_container">
              <div class="banner_2_dots"></div>
              <!-- Banner 2 Slider -->

              <div class="owl-carousel owl-theme banner_2_slider">

                  <!-- Banner 2 Slider Item -->
                  <div class="owl-item">
                      <div class="banner_2_item">
                          <div class="container fill_height">
                              <div class="row fill_height">
                                  <div class="col-lg-4 col-md-6 fill_height">
                                      <div class="banner_2_content">
                                          <div class="banner_2_category">&nbsp;</div>
                                          <div class="banner_2_title">MissPrint Bags</div>
                                          <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                          <!-- <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
                                          <div class="button banner_2_button"><a href="#">Explore</a></div>
                                      </div>

                                  </div>
                                  <div class="col-lg-8 col-md-6 fill_height">
                                      <div class="banner_2_image_container">
                                          <div class="banner_2_image"><img src="<?php echo base_url('assets/img/banner_2_1.png'); ?>" alt=""></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Banner 2 Slider Item -->
                  <div class="owl-item">
                      <div class="banner_2_item">
                          <div class="container fill_height">
                              <div class="row fill_height">
                                  <div class="col-lg-4 col-md-6 fill_height">
                                      <div class="banner_2_content">
                                          <div class="banner_2_category">&nbsp;</div>
                                          <div class="banner_2_title">Handle Bags</div>
                                          <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                          <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                          <div class="button banner_2_button"><a href="#">Explore</a></div>
                                      </div>

                                  </div>
                                  <div class="col-lg-8 col-md-6 fill_height">
                                      <div class="banner_2_image_container">
                                          <div class="banner_2_image"><img src="<?php echo base_url('assets/img/banner_2_2.png'); ?>" alt=""></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Banner 2 Slider Item -->
                  <div class="owl-item">
                      <div class="banner_2_item">
                          <div class="container fill_height">
                              <div class="row fill_height">
                                  <div class="col-lg-4 col-md-6 fill_height">
                                      <div class="banner_2_content">
                                          <div class="banner_2_category">&nbsp;</div>
                                          <div class="banner_2_title">Missprint bags</div>
                                          <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                          <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                          <div class="button banner_2_button"><a href="#">Explore</a></div>
                                      </div>

                                  </div>
                                  <div class="col-lg-8 col-md-6 fill_height">
                                      <div class="banner_2_image_container">
                                          <div class="banner_2_image"><img src="<?php echo base_url('assets/img/banner_2_3.png'); ?>" alt=""></div>
                                      </div>
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
