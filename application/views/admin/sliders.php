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
                    Sliders List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Slider</a></li>
                    <li class="active">Sliders List</li>
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
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($slider) > 0) { $count = 1; ?>
                                        <?php foreach ($slider as $s){ ?>
                                          <tr>
                                              <td><?php echo $count; ?></td>
                                              <td><?php echo $s->heading; ?></td>
                                              <td><?php echo $s->content; ?></td>
                                              <td><img src="<?php echo base_url('assets/uploads/slider/'.$s->image);  ?>" width="100px" height="auto"></td>
                                              <td>
                                                <?php if ($s->status &&  ($s->status == '1' && $s->status != '0')) { ?>
                                                  <a href="<?php echo base_url('slider/status/'.$s->status.'/'.$s->id); ?>">Active</a>
                                                <?php } else { ?>
                                                  <a href="<?php echo base_url('slider/status/'.$s->status.'/'.$s->id); ?>">Inactive</a>
                                                <?php } ?>
                                              </td>
                                              <td>
                                                  <!-- <a href="#" type="button" class="btn btn-info mr-10" data-toggle="tooltip" title="Active">
                                                      <i class="fa fa-edit"></i>
                                                  </a> -->
                                                  <a href="#" type="button" class="btn btn-danger mr-10" data-toggle="tooltip" title="Delete">
                                                      <i class="fa fa-trash-o"></i>
                                                  </a>
                                              </td>
                                          </tr>
                                        <?php $count++; } ?>
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



</body>

</html>
