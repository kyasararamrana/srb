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
      <!-- Cart section -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row  mt-5 mb-4">
            <div class="col-md-12">
              <form id="checkout-form">
                <div class="order-summary">
                  <div class="section-title mb-5">
                    <h3 class="title">Wishlist</h3>
                  </div>
                  <div class="table-responsive p-1">
                    <table class="shopping-cart-table table">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th></th>
                          <!-- <th>Category</th> -->
                          <th class="text-center">Price</th>
                          <th class="text-right">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($wishlist) > 0){ ?>
                          <?php foreach($wishlist as $w){ ?>
                            <tr>
                              <td class="thumb">
                                <?php if((isset($w->product_image) && !empty($w->product_image)) && file_exists('assets/uploads/product/'.$w->product_image)){ ?>
                                  <img src="<?php echo base_url('assets/uploads/product/'.$w->product_image); ?>" alt="">
                                <?php } ?>
                              </td>
                              <td class="details">
                                <a href="<?php echo base_url('product/'.$w->product_id); ?>"><?php echo $w->product_name; ?></a>
                                <ul>
                                  <li><span>Size: XL</span></li>
                                  <li><span>Color: Camelot</span></li>
                                </ul>
                              </td>
                              <!-- <td class="category"><span>D-cut Bags</span></td> -->
                              <?php if (isset($w->discount_percentage) && !empty($w->discount_percentage)) { ?>
                                <td class="price text-center"><strong>₹ <?php echo number_format($w->net_price,2,'.',','); ?></strong><br><del class="font-weak"><small>₹ <?php echo number_format($w->actual_price,2,'.',','); ?></small></del></td>
                              <?php } else { ?>
                                <td class="price text-center"><strong>₹ <?php echo number_format($w->net_price,2,'.',','); ?></strong></td>
                              <?php } ?>
                              <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-cart-plus"></i></button> <a href="<?php echo base_url('wishlist/delete/'.$w->id); ?>" class="main-btn icon-btn"><i class="fa fa-trash"></i></a></td>
                            </tr>
                          <?php } ?>
                        <?php } else { ?>
                          <tr>
                            <td colspan='5' class="text-center">Your's Wishlist is empty. <a href="<?php echo base_url('/products'); ?>">Browse Products</a></td>
                          </tr>
                        <?php } ?>

                      </table>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /row -->
          </div>
          <!-- /container -->
        </div>
      <?php echo $footer; ?>
    </div>
    <?php echo $scripts ?>
    <script type="text/javascript">
    </script>
  </body>
</html>
