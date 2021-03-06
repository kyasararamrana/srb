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
      <?php if(isset($banner) && !empty($banner)){ ?>
      <div class="banner">
        <?php if ((isset($banner->image) && !empty($banner->image)) && file_exists('assets/uploads/banner/'.$banner->image)) { ?>
          <div class="banner_background" style="background-image:url(<?php echo base_url('assets/uploads/banner/'.$banner->image); ?>)"></div>
        <?php } else { ?>
          <div class="banner_background" style="background-image:url(<?php echo base_url('assets/img/banner12.jpg'); ?>)"></div>
        <?php  } ?>
          <div class="container fill_height">
              <div class="row fill_height">
                  <!--<div class="banner_product_image"><img src="img/banner_product.png" alt=""></div>-->
                  <div class="col-lg-5 offset-lg-4 fill_height">
                      <div class="banner_content">
                          <h1 class="banner_text"><?php echo (isset($banner->name) && !empty($banner->name)) ? $banner->name : '' ; ?></h1>
                          <div class="banner_price"><?php echo (isset($banner->tag_line) && !empty($banner->tag_line)) ? $banner->tag_line : '' ; ?></div>
                          <div class="banner_product_name">&nbsp;</div>
                          <div class="button banner_button"><a href="<?php echo base_url('products'); ?>">Shop Now</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <?php } ?>
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
                          <?php if(count($deals) > 0){ ?>
                          <div class="deals_slider_container">
                              <!-- Deals Slider -->
                              <div class="owl-carousel owl-theme deals_slider">
                                    <?php foreach($deals as $dls){ ?>
                                      <!-- Deals Item -->
                                      <div class="owl-item deals_item">
                                          <div class="deals_image">
                                            <?php if ((isset($dls->image) && !empty($dls->image)) && file_exists('assets/uploads/product/'.$dls->image)) { ?>
                                              <img src="<?php echo base_url('assets/uploads/product/'.$dls->image); ?>" alt="">
                                            <?php } ?>
                                          </div>
                                          <div class="deals_content">
                                              <div class="deals_info_line d-flex flex-row justify-content-start">
                                                  <div class="deals_item_name"><?php echo (isset($dls->name) && !empty($dls->name)) ? $dls->name : ''; ?></div>
                                                  <div class="deals_item_price ml-auto">₹ <?php echo (isset($dls->net_price) && !empty($dls->net_price)) ? number_format($dls->net_price,2, '.', ',') : ''; ?></div>
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
                                  <?php } ?>
                              </div>
                          </div>
                          <div class="deals_slider_nav_container">
                              <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                              <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                          </div>
                        <?php } else { ?>
                          <div>No deals on products</div>
                        <?php } ?>
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
                                <?php if (count($featured) > 0) { ?>
                                  <div class="featured_slider slider">
                                      <!-- Slider Item -->
                                      <?php foreach ($featured as $f) { ?>
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item <?php  if (isset($f->discount_percentage) && !empty($f->discount_percentage)) { echo 'discount'; } ?> d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                  <?php if ((isset($f->image) && !empty($f->image)) && file_exists('assets/uploads/product/'.$f->image)) { ?>
                                                    <img src="<?php echo base_url('assets/uploads/product/'.$f->image); ?>" alt="">
                                                  <?php } ?>
                                                </div>
                                                <div class="product_content">
                                                  <?php if (isset($f->discount_percentage) && !empty($f->discount_percentage)) { ?>
                                                    <div class="product_price discount">₹ <?php echo number_format($f->net_price,2, '.', ','); ?><span>₹ <?php echo number_format($f->actual_price,2, '.', ','); ?></span></div>
                                                  <?php } else { ?>
                                                    <div class="product_price">₹ <?php echo number_format($f->net_price,2, '.', ','); ?></div>
                                                  <?php } ?>
                                                    <div class="product_name">
                                                        <div>
                                                          <a href="<?php echo base_url('product/'.$f->id); ?>">
                                                            <?php if (isset($f->name) && !empty($f->name)) { echo $f->name; } ?>
                                                          </a>
                                                        </div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <a href="<?php echo base_url('product/'.$f->id); ?>" class="product_cart_button btn btn-primary">More info <i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <?php if ((isset($wishlist) && !empty($wishlist)) && in_array($f->id,$wishlist)) { ?>
                                                  <div class="product_fav wish active" data-product_id="<?php echo $f->id; ?>" data-product_name="<?php echo $f->name; ?>" data-product_image="<?php echo $f->image; ?>" data-actual_price="<?php echo $f->actual_price; ?>" data-net_price="<?php echo $f->net_price; ?>" data-discount_percentage="<?php echo $f->discount_percentage; ?>"><i class="fas fa-heart"></i></div>
                                                <?php } else { ?>
                                                  <div class="product_fav wish" data-product_id="<?php echo $f->id; ?>" data-product_name="<?php echo $f->name; ?>" data-product_image="<?php echo $f->image; ?>" data-actual_price="<?php echo $f->actual_price; ?>" data-net_price="<?php echo $f->net_price; ?>" data-discount_percentage="<?php echo $f->discount_percentage; ?>"><i class="fas fa-heart"></i></div>
                                                <?php } ?>
                                                <ul class="product_marks">
                                                  <?php if (isset($f->discount_percentage) && !empty($f->discount_percentage)) { ?>
                                                    <li class="product_mark product_discount"><?php echo '-'.$f->discount_percentage.' %'; ?></li>
                                                  <?php } ?>
                                                    <!-- <li class="product_mark product_new">new</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                      <?php } ?>
                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                  <?php } else { ?>
                                    <div class="mt-3 text-center">No featured products found</div>
                                  <?php } ?>
                              </div>
                              <!-- Product Panel -->
                              <div class="product_panel panel">
                                    <?php if(count($discount) > 0){ ?>
                                      <div class="featured_slider slider">
                                      <?php foreach($discount as $d){ ?>
                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                  <?php if((isset($d->image) && !empty($d->image)) && file_exists('assets/uploads/product/'.$d->image)){ ?>
                                                    <img src="<?php echo base_url('assets/uploads/product/'.$d->image) ?>" alt="">
                                                  <?php } ?>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_price discount">₹ <?php echo number_format($d->net_price,2, '.', ','); ?><span>₹ <?php echo number_format($d->actual_price,2, '.', ','); ?></span></div>
                                                    <div class="product_name">
                                                        <div><a href="<?php echo base_url('product/'.$d->id); ?>"><?php if(isset($d->name) && !empty($d->name)){ echo $d->name; } ?></a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <a href="<?php echo base_url('product/'.$f->id); ?>" class="product_cart_button btn btn-primary">More info <i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product_fav wish"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"> -<?php echo $d->discount_percentage; ?> % </li>
                                                    <!-- <li class="product_mark product_new">new</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                      <?php } ?>
                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                  <?php } else { ?>
                                    <div class="mt-3 text-center">No On Sale product found</div>
                                  <?php } ?>
                              </div>
                              <!-- Product Panel -->
                              <div class="product_panel panel">
                                <?php if(isset($products) && count($products) > 0){ ?>
                                  <div class="featured_slider slider">
                                      <!-- Slider Item -->
                                      <?php foreach ($products as $p) { ?>
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item <?php  if (isset($p->discount_percentage) && !empty($p->discount_percentage)) { echo 'discount'; } ?> d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                  <?php if ((isset($p->image) && !empty($p->image)) && file_exists('assets/uploads/product/'.$p->image)) { ?>
                                                    <img src="<?php echo base_url('assets/uploads/product/'.$p->image); ?>" alt="">
                                                  <?php } ?>
                                                </div>
                                                <div class="product_content">
                                                  <?php if (isset($p->discount_percentage) && !empty($p->discount_percentage)) { ?>
                                                    <div class="product_price discount">₹ <?php echo number_format($p->net_price,2, '.', ','); ?><span>₹ <?php echo number_format($p->actual_price,2, '.', ','); ?></span></div>
                                                  <?php } else { ?>
                                                    <div class="product_price">₹ <?php echo number_format($p->net_price,2, '.', ','); ?></div>
                                                  <?php } ?>
                                                    <div class="product_name">
                                                        <div><a href="<?php echo base_url('product/'.$p->id); ?>"><?php echo (isset($p->name) && !empty($p->name)) ? $p->name : '' ; ?></a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <a href="<?php echo base_url('product/'.$p->id); ?>" class="product_cart_button btn btn-primary">More info <i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"> -<?php echo $p->discount_percentage; ?> % </li>
                                                </ul>
                                            </div>
                                        </div>
                                      <?php } ?>
                                  </div>
                                  <div class="featured_slider_dots_cover"></div>
                                <?php } else { ?>
                                <?php } ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Banner -->
      <?php if (isset($slider) && !empty($slider)) { ?>
        <div class="banner_2">
            <div class="banner_2_background" style="background-image:url(img/banner_2_background.jpg)"></div>
            <div class="banner_2_container">
                <div class="banner_2_dots"></div>
                <!-- Banner 2 Slider -->
                <div class="owl-carousel owl-theme banner_2_slider">
                    <!-- Banner 2 Slider Item -->
                    <?php foreach ($slider as $s) { ?>
                      <div class="owl-item">
                          <div class="banner_2_item">
                              <div class="container fill_height">
                                  <div class="row fill_height">
                                      <div class="col-lg-4 col-md-6 fill_height">
                                          <div class="banner_2_content">
                                              <div class="banner_2_category">&nbsp;</div>
                                              <div class="banner_2_title"><?php echo $s->heading; ?></div>
                                              <div class="banner_2_text"><?php echo $s->content; ?></div>
                                              <div class="button banner_2_button"><a href="<?php echo base_url('products'); ?>">Explore</a></div>
                                          </div>
                                      </div>
                                      <div class="col-lg-8 col-md-6 fill_height">
                                          <div class="banner_2_image_container">
                                              <div class="banner_2_image"><img src="<?php echo base_url('assets/uploads/slider/'.$s->image); ?>" alt=""></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <?php } ?>
                </div>
            </div>
        </div>
      <?php } ?>
      <?php echo $footer; ?>
    </div>
    <?php echo $scripts ?>
  </body>
</html>
