<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB |
        <?php echo $pageTitle; ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php echo $links; ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/buttons.dataTables.min.css'); ?>">
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
                    Prices List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Bags</a></li>
                    <li class="active">Prices List</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <br>
                            
                            <div class="box-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
											 <th>Material</th>
                                            <th>Quality</th>
                                            <th>Size</th>
                                            <th>GSM</th>
                                            <th>Handle Type</th>
                                            <th>Bag Type</th>
                                            <th>Bag Layout</th>
											
                                            <th>Bag Size</th>
                                            <th>Bag GSM</th>
                                            <th>Bags per KG</th>
                                            <th>Cost per Bag for Single Color</th>
                                            <th>Cost per kg</th>
                                           <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($price) > 0) { ?>
                                        <?php $sno = 1; ?>
                                        <?php foreach ($price as $p) { ?>
                                          <tr>
                                              <td><?php echo $sno; ?></td>
											  
                                              <td><?php echo $p->material; ?></td>
                                              <td><?php echo $p->qname; ?></td>
                                              <td><?php echo $p->s_size; ?></td>
                                              <td><?php echo $p->s_gsm; ?></td>
                                              <td><?php echo $p->handle_type; ?></td>
                                              <td><?php echo $p->bag_type; ?></td>
                                              <td><?php echo $p->bag_layout; ?></td>
                                              <td><?php echo $p->bag_size; ?></td>
                                              <td><?php echo $p->bag_gsm; ?></td>
                                              <td><?php echo $p->bags_per_kg; ?></td>
                                              <td><?php echo $p->cost_per_bag; ?></td>
                                              <td><?php echo $p->cost_per_kg; ?></td>
                                            <td>
                                                  <a href="#" type="button" class="btn btn-info mr-10">Order Now</a>
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
    <!-- ./wrapper -->
    <?php echo $scripts; ?>
    <script src="<?php echo base_url('assets/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/buttons.print.min.js'); ?>"></script>
    <script type="text/javascript">
        //confirm message
        $(document).ready(function() {
            $('.confirmation').on('click', function() {
                return confirm('Are you sure of deleting color?');
            });
        });
        //datatables
        $(document).ready(function() {
          $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: ['print']
          });
        });
    </script>

</body>

</html>
