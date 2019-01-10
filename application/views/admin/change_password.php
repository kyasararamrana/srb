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
                    Change Password
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Profile</li>
                    <li class="active">Change Password</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="changePasswordForm" name="changePasswordForm" action="<?php echo base_url('admin/update_password'); ?>" method="post">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" name="oldpassword" id="oldpassword">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control" name="newpassword" id="newpassword">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="confirmnewpassword" id="confirmnewpassword">
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
        $('#changePasswordForm').bootstrapValidator({

            fields: {

                oldpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Password wont allow <> [] = % '
                        },
                        remote: {
                          type: 'POST',
                          message: 'Enter wrong old password',
                          url: '<?php echo base_url('admin/check_password'); ?>'
                        }
                    }
                },
                newpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Password wont allow <> [] = % '
                        }
                    }
                },
                confirmnewpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Confirm Password is required'
                        },
                        identical: {
                            field: 'newpassword',
                            message: 'Password and Confirm Password do not match'
                        }
                    }
                }
            }
        })
      });
    </script>

</body>

</html>
