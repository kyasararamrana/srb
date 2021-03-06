<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB | <?php echo $pageTitle; ?> </title>
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
                <h1> Wishlist </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Wishlist</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th style="width:5%;"><input type="checkbox" id="checkAll"/></th>
                                    <th>Bag Type</th>
                                    <th>Bag Size</th>
                                    <th>Handle Type</th>
                                    <th>Handle Size</th>
                                    <th>Sidepatty Type</th>
                                    <th>Sidepatty Size</th>
                                    <th>Zip Type</th>
                                    <th>Zip Size</th>
                                    <th>Stitching Type</th>
                                    <th>Quantity</th>
                                    <th>Total Cost</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php if (count($wishlists) > 0) { ?>
                                    <?php foreach ($wishlists as $wishlist) { ?>
                                      <tr>
                                        <td class="text-center"><input type="checkbox" class="checkbox" data-id="<?php echo $wishlist->id; ?>"></td>
                                        <td><?php echo $wishlist->bag_type; ?></td>
                                        <td><?php echo $wishlist->bag_size; ?></td>
                                        <td><?php echo $wishlist->handle_type; ?></td>
                                        <td><?php echo $wishlist->handle_size; ?></td>
                                        <td><?php echo $wishlist->sidepatty_type; ?></td>
                                        <td><?php echo $wishlist->sidepatty_size; ?></td>
                                        <td><?php echo $wishlist->zip_type; ?></td>
                                        <td><?php echo $wishlist->zip_size; ?></td>
                                        <td><?php echo $wishlist->stitching_type ; ?></td>
                                        <td><?php echo $wishlist->quantity ; ?></td>
                                        <td><?php echo $wishlist->total_price ; ?></td>
                                        <td class="valigntop">
                                          <div class="btn-group">
                                            <button class="btn btn-xs btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                              <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu" style="right:0;left:auto;">
                                              <li>
                                                <a href="<?php echo base_url('sales/wishlistItemView/'.$wishlist->id); ?>"><i class="fa fa-eye"></i>View</a>
                                              </li>
                                              <li>
                                                <a href="<?php echo base_url('salesmanagement/editWishlistItem'); ?>"><i class="fa fa-edit"></i>Edit</a>
                                              </li>
                                            </ul>
                                          </div>
                                        </td>
                                      </tr>
                                    <?php } ?>
                                  <?php } else { ?>
                                    <tr>
                                      <td colspan="13" class="text-center">No records found</td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                                <div class="clearfix"><br><br></div>
                                <div class="text-right">
                                  <a class="btn btn-danger btn-sm mr-10"  <?php echo (count($wishlists) <= 0) ? 'disabled' : 'id="multi_delete" href="#"' ; ?>><i class="fa fa-trash mr-5"></i>Delete</a>
                                  <a class="btn btn-success btn-sm" <?php echo (count($wishlists) <= 0) ? 'disabled' : 'id="multi_order" href="#"' ; ?>><i class="fa fa-shopping-cart mr-5"></i>Order Now</a>
                                </div>
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
    <!-- ./wrapper -->
    <?php echo $scripts; ?>
    <script type="text/javascript">
      //confirm message
      $(document).ready(function() {
        $('.confirmation').on('click', function() {
          return confirm('Are you sure of deleting category?');
        });
      });
      //datatables
      $(document).ready(function() {
        $('#example').DataTable();
        //Check all checkboxes
        $("#checkAll").click(function(){
          $('input:checkbox').not(this).prop('checked', this.checked);
        });
        //multiple delete records
        var id = [];
        $('#multi_delete').click(function(e) {
          e.preventDefault();
          $('.checkbox:checked').each(function() {
            id.push($(this).data('id'));
          });
          if (id.length <= 0) {
            alert('Please check atleast once checkbox');
          } else {
            id = id.join(',');
            $.ajax({
              url:'<?php echo base_url('sales/wishlist_delete'); ?>',
              type:'post',
              data:{'id':id},
              dataType:'JSON',
              success:function(data){
                if(data.success){
                  $('#message').html('<div class="alert_msg1 animated slideInUp bg-succ">'+data.success+' <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');
                } else if (data.error) {
                  $('#message').html('<div class="alert_msg1 animated slideInUp bg-warn">'+data.error+' <i class="fa fa-check text-warning ico_bac" aria-hidden="true"></i></div>');
                }
                setTimeout(function(){
                  window.location.reload();
                },2000);
              }
            });
          }
        });
        //multiple orders
        $('#multi_order').click(function(e) {
          e.preventDefault();
          $('.checkbox:checked').each(function() {
            id.push($(this).data('id'));
          });
          if (id.length <= 0) {
            $('#message').html('<div class="alert_msg1 animated slideInUp bg-warn">Please check atleast once checkbox  <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i></div>');
            return false;
          } else {
            var response = confirm('Are you sure of adding wishlist item(s) to order list?');
            if (response == true) {
              id = id.join(',');
              $.ajax({
                url:'<?php echo base_url('sales/wishlist_order'); ?>',
                type:'post',
                data:{'id':id},
                dataType:'JSON',
                success:function(data){
                  if(data.success){
                    $('#message').html('<div class="alert_msg1 animated slideInUp bg-succ">'+data.success+' <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');
                  } else if (data.error) {
                    $('#message').html('<div class="alert_msg1 animated slideInUp bg-warn">'+data.error+' <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i></div>');
                  }
                  setTimeout(function(){
                    window.location = '<?php echo base_url('sales'); ?>';
                  },2000);
                }
              });
            } else {
              return false;
            }
          }
        });
      });
    </script>
</body>
</html>
