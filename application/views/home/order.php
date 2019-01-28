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
    			<h1 class="home_title">My Orders</h1>
    		</div>
    	</div>
        <!-- Orders List -->
        <div class="orders-list">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="section-title mb-5">
                            <h3 class="title">Orders List</h3>
                        </div>
                        <table id="dtBasicExample" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">Order ID</th>
                                    <th class="th-sm"></th>
                                    <th class="th-sm">Product Name</th>
                                    <th class="th-sm">Price</th>
                                    <th class="th-sm">Ordered Date</th>
                                    <th class="th-sm">Status</th>
                                    <th class="th-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php if (count($orders) > 0) {?>
                                <?php foreach ($orders as $o) { ?>
                                  <tr>
                                      <td><?php echo $o->order_number; ?></td>
                                      <?php if ((isset($o->product_image) && !empty($o->product_image)) && file_exists('assets/uploads/product/'.$o->product_image)) { ?>
                                        <td class="thumb"><img src="<?php echo base_url('assets/uploads/product/'.$o->product_image); ?>" alt=""></td>
                                      <?php } ?>
                                      <td><a href="<?php echo base_url('product/'.$o->product_id); ?>"><?php echo (isset($o->product_name) && !empty($o->product_name)) ? $o->product_name : ''; ?></td>
                                      <td>₹ <?php echo number_format($o->net_price,2, '.', ','); ?></td>
                                      <td><?php echo date('d-m-Y H:i:s',strtotime($o->created_on)); ?></td>
                                      <td><span class="text-success"><?php echo $o->status; ?></span></td>
                                      <td><a href="" class="btn btn-danger btn-sm">Cancel</a></td>
                                  </tr>
                              <?php } ?>
                            <?php } else { ?>
                                <tr>
                                  <td colspan='7' class="text-center">There are no orders in your list. <a href="<?php echo base_url('products'); ?>">Browse Products</a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      <?php echo $footer; ?>
    </div>
    <?php echo $scripts ?>
    <script type="text/javascript">
    </script>
  </body>
</html>
