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
                    Logo
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Logo</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="logoForm" name="logoForm" action="<?php echo base_url('logo/insert'); ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload Logo <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="logo" id="logo">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <?php if ((isset($logo->favicon) && !empty($logo->favicon)) && file_exists('assets/uploads/logo/'.$logo->favicon)) { ?>
                                        <img src="<?php echo base_url('assets/uploads/logo/'.$logo->logo); ?>" alt="" class="img-thumbnail">
                                      <?php } else { ?>
                                        <img src="" alt="" class="img-thumbnail">
                                      <?php } ?>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload Favicon <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="favicon" id="favicon">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <?php if ((isset($logo->favicon) && !empty($logo->favicon)) && file_exists('assets/uploads/logo/'.$logo->favicon)) { ?>
                                          <img src="<?php echo base_url('assets/uploads/logo/'.$logo->favicon); ?>" alt="" class="img-thumbnail">
                                        <?php } else { ?>
                                          <img src="" alt="" class="img-thumbnail">
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="title" id="title" value="<?php echo (isset($logo->title)) ? $logo->title : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keywords <span class="text-danger">*</span></label>
                                            <input type="text" name="keywords" id="keywords" class="form-control" value="<?php echo (isset($logo->keywords)) ? $logo->keywords : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description <span class="text-danger">*</span></label>
                                            <input type="text" name="description" id="description" class="form-control" value="<?php echo (isset($logo->description)) ? $logo->description : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <?php if (isset($logo->id)) { ?>
                                          <input type="hidden" name="uploaded_logo" value="<?php echo (isset($logo->logo)) ? $logo->logo : ''; ?>">
                                          <input type="hidden" name="uploaded_favicon" value="<?php echo (isset($logo->favicon)) ? $logo->favicon : ''; ?>">
                                          <input type="hidden" name="id" value="<?php echo $logo->id; ?>">
                                        <?php } ?>
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
        $(document).ready(function() {
            $('#logoForm').bootstrapValidator({

                fields: {

                    logo: {
                        validators: {
                          <?php if(!isset($logo->id)){ ?>
                            notEmpty: {
                                message: 'Logo is required'
                            },
                          <?php } ?>
                            regexp: {
                                regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                                message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                            }
                        }
                    },
                    favicon: {
                        validators: {
                          <?php if(!isset($logo->id)){ ?>
                            notEmpty: {
                                message: 'Favicon is required'
                            },
                          <?php } ?>
                            regexp: {
                                regexp: "(.*?)\.(png|jpeg|jpg|gif|ico)$",
                                message: 'Uploaded file is not a valid. Only png,jpg,jpeg,ico,gif files are allowed'
                            }
                        }
                    },
                    title: {
                        validators: {
                            notEmpty: {
                                message: 'Title is required'
                            }
                        }
                    },
                    keywords: {
                        validators: {
                            notEmpty: {
                                message: 'Keywords is required'
                            }
                        }
                    },
                    description: {
                        validators: {
                            notEmpty: {
                                message: 'Description is required'
                            }
                        }
                    }
                }
            })

        });
    </script>

</body>

</html>
