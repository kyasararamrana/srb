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
                    Add GSM
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">GSM</a></li>
                    <li class="active">Add GSM</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form method="post" id="gsmForm" action="<?php if (isset($gsm->id)) { echo base_url('gsm/update'); } else { echo base_url('gsm/insert'); } ?>"  enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GSM Name <span class="text-danger">*</span></label>
                                            <input id="name" type="text" class="form-control" name="name" placeholder="Enter GSM Name" value="<?php echo isset($gsm->name) ? $gsm->name : ''; ?>">
                                        </div>
                                    </div>
                                    <?php if (isset($gsm->id)) { ?>
                                      <input type="hidden" name="id" id="id" value="<?php echo $gsm->id; ?>">
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
        $('#gsmForm').bootstrapValidator({
          fields: {
            name: {
              validators: {
                notEmpty: {
                  message: 'GSM Name is required'
                },
                remote: {
                  type : 'post',
                  message: 'GSM Name already exists',
                  url: '<?php echo base_url('gsm/check_exists'); ?>',
                  data: function(validator, $field, value) {
                    return {
                      id: validator.getFieldElements('id').val()
                    };
                  }
                }
              }
            }
          }
        });
      });
    </script>

</body>

</html>
