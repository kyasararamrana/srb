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
      <!-- Single Product -->

      <div class="single_product">
        <div class="container">
          <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
              <ul class="image_list">
                <?php if((isset($product->thumbnail1) && !empty($product->thumbnail1)) && file_exists('assets/uploads/product/'.$product->thumbnail1)){ ?>
                  <li data-image="<?php echo base_url('assets/uploads/product/'.$product->thumbnail1); ?>"><img src="<?php echo base_url('assets/uploads/product/'.$product->thumbnail1); ?>" alt=""></li>
                <?php } ?>
                <?php if((isset($product->thumbnail2) && !empty($product->thumbnail2)) && file_exists('assets/uploads/product/'.$product->thumbnail2)){ ?>
                  <li data-image="<?php echo base_url('assets/uploads/product/'.$product->thumbnail2); ?>"><img src="<?php echo base_url('assets/uploads/product/'.$product->thumbnail2); ?>" alt=""></li>
                <?php } ?>
                <?php if((isset($product->thumbnail3) && !empty($product->thumbnail3)) && file_exists('assets/uploads/product/'.$product->thumbnail3)){ ?>
                  <li data-image="<?php echo base_url('assets/uploads/product/'.$product->thumbnail3); ?>"><img src="<?php echo base_url('assets/uploads/product/'.$product->thumbnail3); ?>" alt=""></li>
                <?php } ?>
              </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">

              <div class="image_selected">
                <?php if ((isset($product->image) && !empty($product->image)) && file_exists('assets/uploads/product/'.$product->image)) { ?>
                  <img src="<?php echo base_url('assets/uploads/product/'.$product->image); ?>" alt="">
                <?php } ?>
              </div>

            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
              <div class="product_description">
                <div class="product_category"><?php if ((isset($product->category) && !empty($product->category))) { echo $product->category; } ?></div>
                <div class="product_name"><?php if ((isset($product->name) && !empty($product->name))) { echo $product->name; } ?></div>
                <?php if ((isset($product->description) && !empty($product->description))) { ?>
                <div class="product_text"><p> <?php echo $product->description; ?></p></div> <?php } ?>
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
                    <?php if (isset($product->net_price) && !empty($product->net_price)) { ?>
                      <div class="product_price">₹ <?php echo $product->net_price; ?></div>
                    <?php } ?>
                    <div class="button_container">
                      <button type="button" class="button cart_button" id="addtocart">Add to Cart</button>
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
    <script type="text/javascript">
      $(document).ready(function(){
        $('#addtocart').on('click',function(){
          <?php if($this->session->userdata('logged_in') != TRUE){ ?>
            <?php echo 'window.location = "'.base_url('home/login').'";' ?>
          <?php } else { ?>
            $.ajax({
              url:'<?php echo base_url('cart/insert'); ?>',
              type:'post',
              data:{
                'user_id':'<?php echo ($this->session->userdata('id')) ? $this->session->userdata('id') : ''; ?>',
                'product_id':'<?php echo (isset($product->id) && !empty($product->id)) ? $product->id : ''; ?>',
                'product_name':'<?php echo (isset($product->name) && !empty($product->name)) ? $product->name : ''; ?>',
                'product_image':'<?php echo (isset($product->image) && !empty($product->image)) ? $product->image : ''; ?>',
                'actual_price':'<?php echo (isset($product->actual_price) && !empty($product->actual_price)) ? $product->actual_price : ''; ?>',
                'discount_percentage':'<?php echo (isset($product->discount_percentage) && !empty($product->discount_percentage)) ? $product->discount_percentage : ''; ?>',
                'net_price':'<?php echo (isset($product->net_price) && !empty($product->net_price)) ? $product->net_price : ''; ?>'
              },
              dataType:'JSON',
              success:function(data){
                if(data.success){
                  $('#message').html('<div class="alert_msg1 animated slideInUp bg-succ">'+data.success+' <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');
                } else {
                  $('#message').html('<div class="alert_msg1 animated slideInUp bg-warn">'+data.error+' <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i></div>');
                }
              }
            });
          <?php } ?>
        });
      });
    </script>
  </body>
</html>
