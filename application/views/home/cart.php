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
    			<h1 class="home_title">Cart</h1>
    		</div>
    	</div>

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
                    <h3 class="title">Cart List</h3>
                  </div>
                  <div class="table-responsive p-1">
                    <table class="shopping-cart-table table" id="cart_table">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th></th>
                          <th class="text-center">Price</th>
                          <th class="text-center">Quantity</th>
                          <th class="text-center">Total</th>
                          <th class="text-right">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (count($cart) > 0) { ?>
                          <?php foreach($cart as $c) { ?>
                            <tr>
                              <td class="thumb">
                                <?php if((isset($c->product_image) && !empty($c->product_image)) && file_exists('assets/uploads/product/'.$c->product_image)){ ?>
                                  <img src="<?php echo base_url('assets/uploads/product/'.$c->product_image); ?>" alt="">
                                <?php } ?>
                              </td>
                              <td class="details">
                                <a href="<?php echo base_url('product/'.$c->product_id); ?>"><?php echo $c->product_name; ?></a>
                                <ul>
                                  <li><span>Size: <?php echo $c->product_size; ?></span></li>
                                  <li><span>Color: <?php echo $c->product_color; ?></span></li>
                                  <li><span>GSM: <?php echo $c->product_gsm; ?></span></li>
                                  <li><span>Quality: <?php echo $c->product_quality; ?></span></li>
                                </ul>
                              </td>
                              <?php if ($c->discount_percentage) { ?>
                                <td class="price text-center"><strong>₹ <?php echo number_format($c->net_price,2, '.', ','); ?></strong><br><del class="font-weak"><small>₹ <?php echo number_format($c->actual_price,2, '.', ','); ?></small></del></td>
                              <?php } else { ?>
                                <td class="price text-center"><strong>₹ <?php echo number_format($c->net_price,2, '.', ','); ?></strong></td>
                              <?php } ?>
                              <td class="qty text-center"><input class="input quantity" type="number" min="1" max="100" data-id= "<?php echo $c->id; ?> "value="<?php echo $c->product_quantity; ?>"></td>
                              <td class="total text-center"><strong class="primary-color">₹ <?php echo number_format(($c->net_price*$c->product_quantity),2, '.', ','); ?></strong></td>
                              <td class="text-right"><a href="<?php echo base_url('cart/delete/'.$c->id); ?>" class="main-btn icon-btn"><i class="fa fa-trash"></i></a></td>
                            </tr>
                          <?php } ?>
                        <?php  } else { ?>
                          <tr>
                            <td colspan="6" class="text-center">Your cart is empty. <a href="<?php echo base_url('products'); ?>">Browse products</a></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="float-right mb-5">
                    <a href="<?php echo base_url('checkout'); ?>" class="primary-btn">Buy Now</a>
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
      $(document).ready(function(){
        $('.quantity').on('keyup change',function(){
          var obj = $(this);
          var quantity = obj.val();
          if (quantity) {
            var id = obj.data('id');
            $.ajax({
              url:'<?php echo base_url('cart/update'); ?>',
              type:'post',
              data:{'product_quantity':quantity,'id':id},
              dataType:'JSON',
              success:function(data){
                if (data.success) {
                  $('#message').html('<div class="alert_msg1 animated slideInUp bg-succ">'+data.success+' <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');
                  window.location.reload();
                } else {
                  $('#message').html('<div class="alert_msg1 animated slideInUp bg-warn">'+data.error+' <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i></div>');
                }
              }
            });
          }
        });
      });
    </script>
  </body>
</html>
