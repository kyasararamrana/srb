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
                    Add Size
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Size</a></li>
                    <li class="active">Add Size</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form method="post" id="sizeForm" action="<?php if (isset($size->id)) { echo base_url('size/update'); } else { echo base_url('size/insert'); } ?>"  enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Width <span class="text-danger">*</span></label>
                                            <input id="name" type="text" class="form-control" name="width" placeholder="Enter Width" value="<?php echo isset($size->width) ? $size->width : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Height <span class="text-danger">*</span></label>
                                            <input id="name" type="text" class="form-control" name="height" placeholder="Enter Height" value="<?php echo isset($size->height) ? $size->height : ''; ?>">
                                        </div>
                                    </div>
                                    <?php if (isset($size->id)) { ?>
                                      <input type="hidden" name="id" id="id" value="<?php echo $size->id; ?>">
                                    <?php } ?>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
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
        $('#sizeForm').bootstrapValidator({
          fields: {
            width: {
              validators: {
                notEmpty: {
                  message: 'Width is required'
                }
              }
            },
            height: {
              validators: {
                notEmpty: {
                  message: 'Height is required'
                }
              }
            }
          }
        });
      });
    </script>

</body>

</html>
