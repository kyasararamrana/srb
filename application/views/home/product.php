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
                      <!-- <ul class="product_color">
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
                      </ul> -->
                      </br>
                      <span>Color: </span>
                      <select class="form-control" id="color">
                        <?php if (isset($product->color)) { ?>
                          <?php foreach (explode(',',$product->color) as $color) { ?>
                            <option value="<?php echo $color; ?>"><?php echo $color; ?></option>
                          <?php } ?>
                        <?php } ?>
                      </select>
                      <span>Size: </span>
                      <select class="form-control" id="size">
                        <?php if (isset($product->size)) { ?>
                          <?php foreach (explode(',',$product->size) as $size) { ?>
                            <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                          <?php } ?>
                        <?php } ?>
                      </select>
                      <span>GSM: </span>
                      <select class="form-control" id="gsm">
                        <?php if (isset($product->gsm)) { ?>
                          <?php foreach (explode(',',$product->gsm) as $gsm) { ?>
                            <option value="<?php echo $gsm; ?>"><?php echo $gsm; ?></option>
                          <?php } ?>
                        <?php } ?>
                      </select>
                      <span>quality: </span>
                      <select class="form-control" id="quality">
                        <?php if (isset($product->quality)) { ?>
                          <?php foreach (explode(',',$product->quality) as $quality) { ?>
                            <option value="<?php echo $quality; ?>"><?php echo $quality; ?></option>
                          <?php } ?>
                        <?php } ?>
                      </select>

                    </div>
                    <?php if (isset($product->net_price) && !empty($product->net_price)) { ?>
                      <div class="product_price">₹ <?php echo number_format($product->net_price,2, '.', ','); ?></div>
                    <?php } ?>
                    <div class="button_container">
                      <?php if ((isset($cart) && !empty($cart)) && in_array($product->id,$cart)) { ?>
                        <button type="button" class="button cart_button btn-warning" disabled id="addtocart">Added to Cart</button>
                      <?php } else { ?>
                        <button type="button" class="button cart_button" id="addtocart">Add to Cart</button>
                      <?php } ?>
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
          var obj = $(this);
          var user_id       = '<?php echo $this->session->userdata('id'); ?>';
          var product_id    = '<?php echo $product->id; ?>';
          var product_name  = '<?php echo $product->name; ?>';
          var product_image = '<?php echo $product->image; ?>';
          var actual_price  = '<?php echo $product->actual_price; ?>';
          var discount_percentage = '<?php echo $product->discount_percentage; ?>';
          var net_price = '<?php echo $product->net_price; ?>';
          var product_quantity = $("#quantity_input").val();
          var size = $("#size").val();
          var color = $("#color").val();
          var gsm = $("#gsm").val();
          var quality = $("#quality").val();
          <?php if($this->session->userdata('logged_in') != TRUE){ ?>
            <?php $this->session->set_userdata('previous_url', current_url()); ?>
            <?php echo 'window.location = "'.base_url('home/login').'";' ?>
          <?php } else { ?>
            $.ajax({
              url:'<?php echo base_url('cart/insert'); ?>',
              type:'post',
              data:{'user_id':user_id,'product_id':product_id,'product_name':product_name,'product_image':product_image,'actual_price':actual_price,'discount_percentage':discount_percentage,'net_price':net_price,'product_quantity':product_quantity,'product_size':size,'product_color':color,'product_gsm':gsm,'product_quality':quality},
              dataType:'JSON',
              success:function(data){
                if(data.success){
                  $('.cart_count').find('span').html(data.count);
                  $('.cart_price').html('₹ '+data.total);
                  obj.attr("disabled",true);
                  obj.addClass("btn-warning");
                  obj.html("Added to cart");
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
