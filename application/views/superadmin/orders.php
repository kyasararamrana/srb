<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB | <?php echo $pageTitle; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php echo $links; ?>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <?php echo $header; ?>
        <?php echo $sidebar; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Orders List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Orders List</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Order ID</th>
                                            <th>Bag Type</th>
                                            <th>Bag Size</th>
                                            <th>Bag GSM</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Payment Status</th>
                                            <th>Ordered On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($orders) > 0) { ?>
                                        <?php $sno = 1; ?>
                                        <?php foreach ($orders as $order) { ?>
                                          <tr>
                                              <td><?php echo $sno; ?></td>
                                              <td>
                                                <?php
                                                  if (isset($order->id)) {
                                                    $str = date('Ymd').$order->id;
                                                    echo 'SRB'.str_pad($str,10,'0',STR_PAD_LEFT);
                                                  } else {
                                                    echo '';
                                                  }
                                                ?>
                                              </td>
                                              <td><?php echo $order->bag_type; ?></td>
                                              <td><?php echo $order->bag_size; ?></td>
                                              <td><?php echo $order->bag_gsm; ?></td>
                                              <td><?php echo $order->total_price; ?></td>
                                              <td>
                                                <?php if ($order->status == 1) { ?>
                                                  <p class="text-success">  Active </p>
                                                <?php } elseif ($order->status == 0) { ?>
                                                  <p class="text-warning"> Inactive </p>
                                                <?php } elseif ($order->status == 2) { ?>
                                                  <p class="text-aqua"> Accepted </p>
                                                <?php } elseif ($order->status == 3) { ?>
                                                  <p class="text-danger"> Rejected </p>
                                                <?php } ?>
                                              </td>
                                              <td><?php echo $order->payment_status; ?></td>
                                              <td><?php echo date('d-m-Y H:i:s',strtotime($order->created_on)); ?></td>
                                              <td>
                                                <a href="<?php echo base_url('superadmin/orderdetails/'.$order->id); ?>" type="button" class="btn btn-info btn-sm mr-5"><i class="fa fa-eye"></i></a>
                                                <a href="#" type="button" class="btn btn-danger btn-sm mr-5 confirmation"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" type="button" class="btn btn-warning btn-sm mr-5 payments" data-id="<?php echo $order->id; ?>" data-total_price="<?php echo $order->total_price; ?>"><i class="fa fa-money"></i></a>
                                            </td>
                                          </tr>
                                          <?php $sno++; ?>
                                        <?php } ?>
                                      <?php } else { ?>
                                        <tr>
                                          <td colspan="9" class="text-center">No records found</td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php echo $footer; ?>
    </div>
    <!-- The Modal -->
    <div class="modal" id="payments_model">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Payments</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <form class="" id="payments_form">
                <div class="col-md-6">
                  <label for="">Total Price</label>
                  <input type="text" name="total_price" id="total_price" class="form-control" value="" readonly>
                </div>
                <div class="col-md-6">
                  <label for="">Paid Amount</label>
                  <input type="text" name="paid_amount" class="form-control" value="" placeholder="Paid Amount">
                </div>
                <input type="hidden" name="order_id" id="order_id" value="">
                <div class="clearfix">
                  &nbsp;
                </div>
                <div class="mr-20 pull-right">
                  <button type="button" name="button" id="pay" class="btn btn-primary">Pay</button>
                </div>
              </form>
            </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div> -->
        </div>
      </div>
    </div>
    <!-- ./wrapper -->
    <?php echo $scripts; ?>

    <script type="text/javascript">
      //confirm message
      $(document).ready(function(){
          $('.confirmation').on('click', function () {
              return confirm('Are you sure of deleting category?');
          });
      });
      //datatables
      $(document).ready(function() {
          $('#example').DataTable();
          //payments model popup
          $('.payments').click(function(){
            $('#order_id').val($(this).data('id'));
            $('#total_price').val($(this).data('total_price'));
            $('#payments_model').modal('show');
          });
          //submitting payments ajax call
          $('#pay').click(function(){
              var formData = new FormData($('#payments_form')[0]);
              $.ajax({
                url:'<?php echo base_url('superadmin/payments'); ?>',
                type:'POST',
                data:formData,
                contentType:false,
                processData:false,
                cache:false,
                dataType:'JSON',
                success:function(data){
                  if(data.success){
                    $('#message').html('<div class="alert_msg1 animated slideInUp bg-succ">'+data.success+' <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');
                  } else if (data.error) {
                    $('#message').html('<div class="alert_msg1 animated slideInUp bg-warn">'+data.error+' <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i></div>');
                  }
                  $('#payments_model').modal('hide');
                  setTimeout(function(){
                    window.location = '<?php echo base_url('superadmin/orderslist'); ?>';
                  },2000);
                }
              });
          });
      });
    </script>

</body>

</html>
