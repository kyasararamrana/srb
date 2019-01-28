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
                              <td class="text-right">
                                <a href="#" class="main-btn icon-btn addtocart_wishlist"
                                data-id="<?php echo $w->id; ?>"
                                data-product_id="<?php echo $w->product_id; ?>"
                                data-product_name="<?php echo $w->product_name; ?>"
                                data-product_image="<?php echo $w->product_image; ?>"
                                data-actual_price="<?php echo $w->actual_price; ?>"
                                data-discount_percentage="<?php echo $w->discount_percentage; ?>"
                                data-net_price="<?php echo $w->net_price; ?>">
                                <i class="fa fa-cart-plus"></i></a> <a href="<?php echo base_url('wishlist/delete/'.$w->id); ?>" class="main-btn icon-btn"><i class="fa fa-trash"></i></a></td>
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
      $(document).ready(function(){
        //add to Cart
        $('.addtocart_wishlist').click(function(e){
          e.preventDefault();
          <?php if ($this->session->userdata('logged_in') != TRUE) { ?>
            <?php $this->session->set_userdata('previous_url', current_url()); ?>
            <?php echo 'window.location = "'.base_url('home/login').'";' ?>
          <?php } else { ?>
            var obj = $(this);
            var id = obj.data('id');
            var product_id = obj.data('product_id');
            var product_name = obj.data('product_name');
            var product_image = obj.data('product_image');
            var actual_price = obj.data('actual_price');
            var discount_percentage = obj.data('discount_percentage');
            var net_price = obj.data('net_price');
            var user_id = '<?php echo $this->session->userdata('id'); ?>';
            var product_quantity = 1;
            $.ajax({
              url:'<?php echo base_url('wishlist/addtocart'); ?>',
              type:'post',
              data:{'id':id,'user_id':user_id,'product_id':product_id,'product_name':product_name,'product_image':product_image,'actual_price':actual_price,'discount_percentage':discount_percentage,'net_price':net_price,'product_quantity':product_quantity},
              dataType:'json',
              success:function(data){
                if(data.success){
                  $('.cart_count').find('span').html(data.count);
                  $('.cart_price').html('₹ '+data.total);
                  obj.parent().parent().remove();
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
