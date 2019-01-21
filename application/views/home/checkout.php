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
          <h1 class="home_title">Checkout</h1>
        </div>
      </div>
      <!-- Cart section -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <form  action="<?php echo base_url('checkout/insert') ?>" method="post" id="billingForm">
                <div class="row mt-5">
                  <div class="col-md-6">
                    <div class="billing-details">
                      <div class="section-title">
                        <h3 class="title">Billing Details</h3>
                      </div>
                        <div class="form-group">
                          <input class="input" type="text" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                          <input class="input" type="text" name="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                          <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <input class="input" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                          <select class="form-control input" name="city">
                            <option value="">Select City</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Vijayawada">Vijayawada</option>
                            <option value="Vishakapatnam">Vishakapatnam</option>
                          </select>
                          <div class="caret"></div>
                        </div>
                        <div class="form-group">
                          <select class="form-control input" name="state">
                            <option value="">Select State</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                          </select>
                          <div class="caret"></div>
                        </div>
                        <div class="form-group">
                          <input class="input" type="text" name="zip_code" placeholder="ZIP Code">
                        </div>
                        <div class="form-group">
                          <input class="input" type="text" name="mobile_number" placeholder="Mobile Number">
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id'); ?>">
                    </div>
                </div>
                </div>
                  <div class="col-md-6">
                  </div>
                  <div class="order-summary mt-5 mb-4">
                    <div class="section-title mb-4">
                      <h3 class="title">Order Review</h3>
                    </div>
                    <div class="table-responsive p-1">
                      <table class="shopping-cart-table table">
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
                          <?php if(count($cart) > 0){ ?>
                            <?php foreach ($cart as $c) { ?>
                              <tr>
                                <?php if ((isset($c->product_image) && !empty($c->product_image)) && file_exists('assets/uploads/product/'.$c->product_image)) { ?>
                                  <td class="thumb"><img src="<?php echo base_url('assets/uploads/product/'.$c->product_image); ?>" alt=""></td>
                                <?php } ?>
                                <td class="details">
                                  <a href="#"><?php echo $c->product_name; ?></a>
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
                                <td class="qty text-center">
                                  <span><?php echo $c->product_quantity; ?></span>
                                </td>
                                <td class="total text-center"><strong class="primary-color">₹ <?php echo number_format($c->product_quantity*$c->net_price,2, '.', ','); ?></strong></td>
                                <td class="text-right"><a href="<?php echo base_url('checkout/delete/'.$c->id); ?>" class="main-btn icon-btn"><i class="fa fa-trash"></i></a></td>
                              </tr>
                            <?php  } ?>
                          <?php } else { ?>
                            <tr>
                              <td colspan="6" class="text-center">Your cart is empty. <a href="<?php echo base_url('products'); ?>">Browse products</a></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th class="empty" colspan="3"></th>
                            <th>SUBTOTAL</th>
                            <th colspan="2" class="sub-total">₹ <?php echo number_format($total->total_cart,2, '.', ','); ?></th>
                          </tr>
                          <tr>
                            <th class="empty" colspan="3"></th>
                            <th>SHIPPING</th>
                            <td colspan="2">Free Shipping</td>
                          </tr>
                          <tr>
                            <th class="empty" colspan="3"></th>
                            <th>TOTAL</th>
                            <th colspan="2" class="total">₹ <?php echo number_format($total->total_cart,2, '.', ','); ?></th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="float-right mb-5">
                      <button type="submit" class="primary-btn">Place Order</button>
                    </div>
                  </div>

              </form>
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
        $("#billingForm").bootstrapValidator({
              fields: {
                  first_name: {
                      validators: {
                          notEmpty: {
                              message: 'First Name is required'
                          },
                          regexp: {
                          regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                          message:'Name wont allow <> [] = % '
                          }
                      }
                  },
                  last_name: {
                      validators: {
                          notEmpty: {
                              message: 'Last Name is required'
                          },
                          regexp: {
                          regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                          message:'Name wont allow <> [] = % '
                          }
                      }
                  },
                  email: {
                     validators: {
                          notEmpty: {
                              message: 'Email is required'
                          },
                          regexp: {
                            regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                            message: 'Please enter a valid email address. For example johndoe@domain.com.'
                          }
                      }
                  },
                  mobile_number: {
                      validators: {
                          notEmpty: {
                              message: 'Mobile Number is required'
                          },
                          regexp: {
                          regexp:  /^[0-9]{10,12}$/,
                          message:'Mobile Number must be 10 to 12 digits'
                          }

                      }
                  },
                  address: {
                      validators: {
                          notEmpty: {
                              message: 'Address is required'
                          }
                      }
                  },
                  city: {
                      validators: {
                          notEmpty: {
                              message: 'City is required'
                          }
                      }
                  },
                  state: {
                      validators: {
                          notEmpty: {
                              message: 'State is required'
                          }
                      }
                  },
                  zip_code: {
                      validators: {
                          notEmpty: {
                              message: 'Zip code is required'
                          },
                          regexp: {
                          regexp:  /^[0-9]{1,6}$/,
                          message:'Zip code must be 1 to 6 digits'
                          }

                      }
                  },

              }
          });
      });
    </script>
  </body>
</html>
