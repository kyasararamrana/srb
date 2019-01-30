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
