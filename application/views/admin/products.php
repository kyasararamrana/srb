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
                    Product List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Product</a></li>
                    <li class="active">Product List</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Category</th>
                                                <th>Product Name</th>
                                                <th>Actual Price</th>
                                                <th>Discount %</th>
                                                <th>Net Price</th>
                                                <th>Product Image</th>
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php if (count($products) > 0){ ?>
                                            <?php $count = 1; foreach ($products as $p){ ?>
                                              <tr>
                                                  <td><?php echo $count; ?></td>
                                                  <td><?php echo $p->category; ?></td>
                                                  <td><?php echo $p->name; ?></td>
                                                  <td><?php echo $p->actual_price; ?></td>
                                                  <td><?php echo $p->discount_percentage; ?></td>
                                                  <td><?php echo $p->net_price; ?></td>
                                                  <td>
                                                    <?php if ((isset($p->image) && !empty($p->image)) && file_exists('assets/uploads/product/'.$p->image)): ?>
                                                      <img src="<?php echo base_url('assets/uploads/product/'.$p->image); ?>" width="100px" height="auto">
                                                    <?php endif; ?>
                                                  </td>
                                                  <td>
                                                    <?php if ($p->status &&  ($p->status == '1' && $p->status != '0')) { ?>
                                                      <a href="<?php echo base_url('product/status/'.$p->status.'/'.$p->id); ?>">Active</a>
                                                    <?php } else { ?>
                                                      <a href="<?php echo base_url('product/status/'.$p->status.'/'.$p->id); ?>">Inactive</a>
                                                    <?php } ?>
                                                  </td>
                                                  <td>
                                                      <a href="<?php echo base_url('product/edit/'.$p->id); ?>" type="button" class="btn btn-info mr-10 mb-5">
                                                          <i class="fa fa-edit"></i>
                                                      </a>
                                                      <a href="<?php echo base_url('product/delete/'.$p->id); ?>" type="button" class="btn btn-danger mr-10 mb-5">
                                                          <i class="fa fa-trash-o"></i>
                                                      </a>
                                                  </td>
                                              </tr>
                                            <?php $count++; } ?>
                                          <?php } else { ?>
                                            <tr>
                                              <td colspan="9" class="text-center">No record found</td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
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
      $(document).ready(function(){
        $('#example1').DataTable();
      });
    </script>
</body>

</html>
