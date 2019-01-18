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
              <!-- <form id="checkout-form"> -->
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
                              <?php if ((isset($c->product_image) && !empty($c->product_image)) && file_exists()) { ?>

                              <?php } else { ?>
                              <?php } ?>
                              <td class="thumb"><img src="<?php echo base_url('assets/img/featured_1.jpg'); ?>" alt=""></td>
                              <td class="details">
                                <a href="#">Product Name Goes Here</a>
                                <ul>
                                  <li><span>Size: XL</span></li>
                                  <li><span>Color: Camelot</span></li>
                                </ul>
                              </td>
                              <td class="price text-center"><strong>₹ 32.50</strong><br><del class="font-weak"><small>₹ 40.00</small></del></td>
                              <td class="qty text-center">
                                <span>1</span>
                              </td>
                              <td class="total text-center"><strong class="primary-color">₹ 32.50</strong></td>
                              <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-trash"></i></button></td>
                            </tr>
                          <?php  } ?>
                        <?php } else { ?>
                          <tr>
                            <td></td>
                          </tr>
                        <?php } ?>

                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="empty" colspan="3"></th>
                          <th>SUBTOTAL</th>
                          <th colspan="2" class="sub-total">₹ 97.50</th>
                        </tr>
                        <tr>
                          <th class="empty" colspan="3"></th>
                          <th>SHIPPING</th>
                          <td colspan="2">Free Shipping</td>
                        </tr>
                        <tr>
                          <th class="empty" colspan="3"></th>
                          <th>TOTAL</th>
                          <th colspan="2" class="total">₹ 97.50</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="float-right mb-5">
                    <a href="checkout.php" class="primary-btn">Place Order</a>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-6">
                    <div class="billing-details">
                      <div class="section-title">
                        <h3 class="title">Billing Details</h3>
                      </div>
                      <div class="form-group">
                        <input class="input" type="text" name="first-name" placeholder="First Name">
                      </div>
                      <div class="form-group">
                        <input class="input" type="text" name="last-name" placeholder="Last Name">
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
                          <option value="">Option</option>
                          <option value="">Option</option>
                          <option value="">Option</option>
                        </select>
                        <div class="caret"></div>
                      </div>
                      <div class="form-group">
                        <select class="form-control input" name="state">
                          <option value="">Select State</option>
                          <option value="">Option</option>
                          <option value="">Option</option>
                          <option value="">Option</option>
                        </select>
                        <div class="caret"></div>
                      </div>
                      <div class="form-group">
                        <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                      </div>
                      <div class="form-group">
                        <input class="input" type="mobilenumber" name="mobilenumber" placeholder="Mobile Number">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                  </div>
                </div>
              <!-- </form> -->
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <?php echo $footer; ?>
    </div>
    <?php echo $scripts ?>
  </body>
</html>
