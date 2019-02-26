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
                <h1> Handle List </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Handles</li>
                    <li class="active">Handle List</li>
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
                                    <th>Material</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>GSM</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php if (count($handles) > 0) { ?>
                                    <?php $sno =  1; ?>
                                    <?php foreach ($handles as $handle) { ?>
                                      <tr>
                                        <td><?php echo $sno; ?></td>
                                        <td><?php echo $handle->type; ?></td>
                                        <td><?php echo $handle->material; ?></td>
                                        <td><?php echo $handle->size; ?></td>
                                        <td><?php echo $handle->color; ?></td>
                                        <td><?php echo $handle->gsm; ?></td>
                                        <td><?php echo $handle->quantity; ?></td>
                                        <td>
                                          <a href="<?php echo base_url('handle/edit/'.$handle->id); ?>" type="button" class="btn btn-info mr-10"><i class="fa fa-edit"></i></a>
                                          <a href="<?php echo base_url('handle/delete/'.$handle->id); ?>" type="button" class="btn btn-danger mr-10 confirmation"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                      </tr>
                                      <?php $sno++; ?>
                                    <?php } ?>
                                  <?php } else { ?>
                                    <tr>
                                      <td>No record found</td>
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
    <script type="text/javascript">
        //confirm message
        $(document).ready(function() {
            $('.confirmation').on('click', function() {
                return confirm('Are you sure of deleting handle details?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
