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
                            <div class="box-heading">
                                <div class="col-md-3"></div>
                                <form class="" action="<?php echo base_url('price'); ?>" method="post">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control" name="bag_type">
                                                <option value="">Select</option>
                                                <?php if (count($bagtype) > 0) { ?>
                                                  <?php foreach ($bagtype as $b) { ?>
                                                    <option value="<?php echo $b->id; ?>" <?php echo (isset($filter) && ($filter == $b->id)) ? 'selected' : '' ; ?>><?php echo $b->bag_type; ?></option>
                                                  <?php } ?>
                                                <?php } else { ?>
                                                  <option value="">No options found</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                      <?php if (isset($filter) && !empty($filter)) { ?>
                                        <a href="<?php echo base_url('price'); ?>" class="btn btn-warning" name="button">Clear</a>
                                      <?php } ?>
                                    </div>
                                </form>
                                <div class="clearfix">&nbsp;</div>
                            </div>
                            <div class="box-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
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
                                              <td><?php echo $p->bag_type; ?></td>
                                              <td><?php echo $p->bag_layout; ?></td>
                                              <td><?php echo $p->bag_size; ?></td>
                                              <td><?php echo $p->bag_gsm; ?></td>
                                              <td><?php echo $p->bags_per_kg; ?></td>
                                              <td><?php echo $p->cost_per_bag; ?></td>
                                              <td><?php echo $p->cost_per_kg; ?></td>
                                              <td>
                                                  <a href="<?php echo base_url('price/edit/'.$p->id); ?>" type="button" class="btn btn-info mr-10"><i class="fa fa-edit"></i></a>
                                                  <a href="<?php echo base_url('price/delete/'.$p->id); ?>" type="button" class="btn btn-danger mr-10 confirmation"><i class="fa fa-trash-o"></i></a>
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
