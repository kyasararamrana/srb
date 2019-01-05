<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $links; ?>
  </head>
  <body>
    <div class="super_container">
      <?php echo $header; ?>
      <!-- Single Product -->

      <div class="single_product">
        <div class="container">
          <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
              <ul class="image_list">
                <li data-image="<?php echo base_url('assets/img/featured_2.jpg'); ?>"><img src="<?php echo base_url('assets/img/featured_2.jpg'); ?>" alt=""></li>
                <li data-image="<?php echo base_url('assets/img/featured_3.jpg'); ?>"><img src="<?php echo base_url('assets/img/featured_3.jpg'); ?>" alt=""></li>
                <li data-image="<?php echo base_url('assets/img/featured_4.jpg'); ?>"><img src="<?php echo base_url('assets/img/featured_4.jpg'); ?>" alt=""></li>
              </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
              <div class="image_selected"><img src="<?php echo base_url('assets/img/featured_2.jpg'); ?>" alt=""></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
              <div class="product_description">
                <div class="product_category">Bags</div>
                <div class="product_name">D-Cut, U-Cut Bags</div>
                <!-- <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
                <div class="product_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.</p></div>
                <div class="order_info d-flex flex-row">
                  <form action="#">
                    <div class="clearfix" style="z-index: 1000;">

                      <!-- Product Quantity -->
                      <div class="product_quantity clearfix">
                        <span>Quantity: </span>
                        <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                        <div class="quantity_buttons">
                          <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                          <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                        </div>
                      </div>

                      <!-- Product Color -->
                      <ul class="product_color">
                        <li>
                          <span>Color: </span>
                          <div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
                          <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                          <ul class="color_list">
                            <li><div class="color_mark" style="background: #999999;"></div></li>
                            <li><div class="color_mark" style="background: #b19c83;"></div></li>
                            <li><div class="color_mark" style="background: #000000;"></div></li>
                          </ul>
                        </li>
                      </ul>

                    </div>

                    <div class="product_price">₹ 2000.00</div>
                    <div class="button_container">
                      <button type="button" class="button cart_button">Add to Cart</button>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                    </div>

                  </form>
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
