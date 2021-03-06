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
                  </ul>
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
                    <label class="sidebar_subtitle">Size</label>
                    <select class="form-control" id="size">
                      <?php if (isset($sizes) && count($sizes) > 0) { ?>
                        <option value="">select</option>
                        <?php foreach ($sizes as $s) { ?>
                          <option value="<?php echo $s->id; ?>"><?php echo $s->name; ?></option>
                        <?php } ?>
                      <?php } else { ?>
                        <option value="">No size found</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Color</label>
                    <select class="form-control" id="color">
                      <?php if (isset($colors) && count($colors) > 0) { ?>
                        <option value="">select</option>
                        <?php foreach ($colors as $c) { ?>
                          <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
                        <?php } ?>
                      <?php } else { ?>
                        <option value="">No Color found</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">GSM</label>
                    <select class="form-control" id="gsm">
                      <?php if (isset($gsm) && count($gsm) > 0) { ?>
                        <option value="">select</option>
                        <?php foreach ($gsm as $g) { ?>
                          <option value="<?php echo $g->id; ?>"><?php echo $g->name; ?></option>
                        <?php } ?>
                      <?php } else { ?>
                        <option value="">No GSM found</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="sidebar_section">
                  <div class="form-group">
                    <label class="sidebar_subtitle">Quality</label>
                    <select class="form-control" id="quality">
                      <?php if (isset($quality) && count($quality) > 0) { ?>
                        <option value="">select</option>
                        <?php foreach ($quality as $q) { ?>
                          <option value="<?php echo $q->id; ?>"><?php echo $q->name; ?></option>
                        <?php } ?>
                      <?php } else { ?>
                        <option value="">No Quality found</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 product_template">
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
                      <div class="product_item <?php if ((isset($p->discount_percentage) && !empty($p->discount_percentage))) { echo 'discount'; } ?>">
                        <div class="product_border"></div>
                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
                          <?php if (isset($p->image) && !empty($p->image) && file_exists('assets/uploads/product/'.$p->image)) { ?>
                            <img src="<?php echo base_url('assets/uploads/product/'.$p->image); ?>" alt="">
                          <?php } ?>
                        </div>
                        <div class="product_content">
                          <?php if ((isset($p->discount_percentage) && !empty($p->discount_percentage))) { ?>
                            <div class="product_price">₹ <?php echo number_format($p->net_price,2, '.', ','); ?><span>₹ <?php echo number_format($p->actual_price,2, '.', ','); ?></span></div>
                          <?php  } else { ?>
                            <div class="product_price">₹ <?php echo number_format($p->net_price,2, '.', ','); ?></div>
                          <?php } ?>
                          <div class="product_name"><div><a href="<?php echo base_url('product/'.$p->id); ?>" tabindex="0"><?php echo $p->name; ?></a></div></div>
                        </div>
                        <?php if ((isset($wishlist) && !empty($wishlist)) && in_array($p->id,$wishlist)) { ?>
                          <div class="product_fav wish active" data-product_id="<?php echo $p->id; ?>" data-product_name="<?php echo $p->name; ?>" data-product_image="<?php echo $p->image; ?>" data-actual_price="<?php echo $p->actual_price; ?>" data-net_price="<?php echo $p->net_price; ?>" data-discount_percentage="<?php echo $p->discount_percentage; ?>"><i class="fas fa-heart"></i></div>
                        <?php } else { ?>
                          <div class="product_fav wish" data-product_id="<?php echo $p->id; ?>" data-product_name="<?php echo $p->name; ?>" data-product_image="<?php echo $p->image; ?>" data-actual_price="<?php echo $p->actual_price; ?>" data-net_price="<?php echo $p->net_price; ?>" data-discount_percentage="<?php echo $p->discount_percentage; ?>"><i class="fas fa-heart"></i></div>
                        <?php } ?>
                        <ul class="product_marks">
                          <?php if ((isset($p->discount_percentage) && !empty($p->discount_percentage))) { ?>
                            <li class="product_mark product_discount"><?php echo '-'.$p->discount_percentage.'%'; ?></li>
                          <?php } ?>
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
                                <?php if (isset($products) && count($products) > 0 ) { ?>
                                  <?php foreach($products as $p) { ?>
                                    <div class="owl-item">
                                        <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="viewed_image">
                                              <?php if((isset($p->image) && !empty($p->image)) && file_exists('assets/uploads/product/'.$p->image)){ ?>
                                                <img src="<?php echo base_url('assets/uploads/product/'.$p->image); ?>" alt="">
                                              <?php } ?>
                                            </div>
                                            <div class="viewed_content text-center">
                                              <?php if ((isset($p->discount_percentage) && !empty($p->discount_percentage))) { ?>
                                                <div class="viewed_price">₹ <?php echo number_format($p->net_price,2, '.', ','); ?><span>₹ <?php echo number_format($p->actual_price,2, '.', ','); ?></span></div>
                                              <?php  } else { ?>
                                                <div class="viewed_price">₹ <?php echo number_format($p->net_price,2, '.', ','); ?></div>
                                              <?php } ?>
                                                <div class="viewed_name"><a href="<?php echo base_url('product/'.$p->id); ?>"><?php echo (isset($p->name) && !empty($p->name)) ? $p->name : ''; ?></a></div>
                                            </div>
                                            <ul class="item_marks">
                                                <?php if ((isset($p->discount_percentage) && !empty($p->discount_percentage))) { ?>
                                                  <li class="item_mark item_discount"><?php echo '-'.$p->discount_percentage.'%'; ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                  <?php } ?>
                                <?php } else { ?>
                                  <div class="viewed_slider_container">
                                    No Products found
                                  </div>
                                <?php } ?>
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
        //search filter
        $('#size,#color,#gsm,#quality').on('change',function(){
          var size = $('#size').val();
          var color = $('#color').val();
          var gsm = $('#gsm').val();
          var quality = $('#quality').val();
          $.ajax({
            url:'<?php echo base_url('product/search'); ?>',
            type:'post',
            data:{'size':size,'color':color,'gsm':gsm,'quality':quality},
            success:function(data){
              $('.product_template').html(data);
            }
          })
        });
      });
    </script>
  </body>
</html>
