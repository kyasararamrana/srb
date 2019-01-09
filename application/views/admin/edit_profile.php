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
                    Edit Profile
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Profile</li>
                    <li class="active">Edit Profile</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="editProfileForm" name="editProfileForm" action="<?php echo base_url('admin/update_profile'); ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo (isset($profile->name)) ? $profile->name : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" class="form-control" name="email" id="email" value="<?php echo (isset($profile->email)) ? $profile->email : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo (isset($profile->phone)) ? $profile->phone : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="form-control" name="location" id="location" value="<?php echo (isset($profile->location)) ? $profile->location : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Profile Pic <span class="text-danger">(Dimension must be 128 x 128)</span> </label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <?php if ((isset($profile->image) && !empty($profile->image)) && file_exists('assets/uploads/admin/'.$profile->image)) { ?>
                                        <img class="profile-user-img img-responsive img-circle" id="upload_preview"  src="<?php echo base_url('assets/uploads/admin/'.$profile->image); ?>" alt="User profile picture">
                                      <?php } else { ?>
                                        <img class="profile-user-img img-responsive img-circle" id="upload_preview"  src="<?php echo base_url('assets/img/admin/user1-128x128.jpg'); ?>" alt="User profile picture">
                                      <?php } ?>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo (isset($profile->id)) ? $profile->id : ''; ?>">
                                    <input type="hidden" name="uploaded_image" value="<?php echo (isset($profile->image)) ? $profile->image : ''; ?>">
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
        $('#editProfileForm').bootstrapValidator({

            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                            message: 'Please enter a valid email address. For example johndoe@domain.com.'
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Phone Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,10}$/,
                            message: 'Phone Number must be 10 digits'
                        }
                    }
                },
                location: {
                    validators: {
                        notEmpty: {
                            message: 'Location is required'
                        }
                    }
                },
                image: {
                    validators: {
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                            message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                        }
                    }
                }
            }
        })
      });
      //image preview
      function preview(input){
			if(input.files && input.files[0]){
				var reader = new FileReader();
				reader.onload = function(e){
					$("#upload_preview").attr('src',e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#image").on('change',function(){
			preview(this);
			$("#upload_preview").css('display','block');
		});
    </script>

</body>

</html>
