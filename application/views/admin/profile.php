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
                    Profile
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <strong class="box-title">My Profile</strong>
                                <div class="pull-right">
                                    <a href="<?php echo base_url('admin/edit_profile'); ?>" class="btn btn-sm btn-info">
                                        <i class="fa fa-edit"></i> Edit Profile
                                    </a>
                                    <a href="<?php echo base_url('admin/change_password'); ?>" class="btn btn-sm btn-warning">
                                        <i class="fa fa-wrench"></i> Change Password
                                    </a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <?php if (isset($profile->image) && file_exists('assets/uploads/admin/'.$profile->image)) { ?>
                                          <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/uploads/admin/'.$profile->image); ?>" alt="User profile picture">
                                        <?php } else { ?>
                                          <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/admin/user1-128x128.jpg'); ?>" alt="User profile picture">
                                        <?php } ?>
                                        <h3 class="profile-username"><?php echo ($profile->name) ? $profile->name : ' - '; ?></h3>
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table table-bordered mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Email Id</td>
                                                    <td><?php echo ($profile->email) ? $profile->email : ' - '; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td><?php echo ($profile->phone) ? $profile->phone : ' - '; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo ($profile->address) ? $profile->address : ' - '; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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

</body>

</html>
