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
                    Add Role
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Roles</li>
                    <li class="active">Add Role</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="roleForm" name="roleForm" method="post" action="<?php if (isset($user->id)) { echo base_url('superadmin/update'); } else { echo base_url('superadmin/create'); } ?>" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo (isset($user->name)) ? $user->name : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" class="form-control" name="email" id="email" value="<?php echo (isset($user->email)) ? $user->email : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo (isset($user->phone)) ? $user->phone : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" id="address" value="<?php echo (isset($user->address)) ? $user->address : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" id="password" value="<?php echo (isset($user->password)) ? $user->org_password : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="confirmpassword" id="confirmpass" value="<?php echo (isset($user->org_password)) ? $user->org_password : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role">
                                              <option value="">Select Role</option>
                                              <option value="Sales" <?php echo (isset($user->role) && ($user->role == "Sales")) ? 'selected' : '' ; ?>>Sales</option>
                                              <option value="Order" <?php echo (isset($user->role) && ($user->role == "Order")) ? 'selected' : '' ; ?>>Order</option>
                                              <option value="Inventory" <?php echo (isset($user->role) && ($user->role == "Inventory")) ? 'selected' : '' ; ?>>Inventory</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Profile Pic <span class="text-danger">(Dimension must be 128 x 128)</span> </label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <?php if (isset($user->image) && file_exists('assets/uploads/admin/'.$user->image)) { ?>
                                        <img src="<?php echo base_url('assets/uploads/admin/'.$user->image); ?>" class="img-thumbnail" alt="">
                                      <?php } ?>
                                    </div>
                                    <?php if (isset($user->id)) { ?>
                                      <input type="hidden" name="id" id="id" value="<?php echo $user->id; ?>">
                                      <?php if (isset($user->image)) { ?>
                                        <input type="hidden" name="uploaded_image" value="<?php echo $user->image; ?>">
                                      <?php } ?>
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
      $('#roleForm').bootstrapValidator({
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
                remote: {
                  type: 'POST',
                  url: '<?php echo base_url('superadmin/check_exists'); ?>',
                  message: 'Email already exists',
                  data: function(validator, $field, value) {
                    return {
                      id: validator.getFieldElements('id').val()
                    };
                  }
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
            address: {
              validators: {
                notEmpty: {
                  message: 'Address is required'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'Password is required'
                }
              }
            },
            confirmpassword: {
              validators: {
                notEmpty: {
                  message: 'Confirm Password is required'
                },
                identical: {
                  field: 'password',
                  message: 'Password and Confirm Password do not match'
                }
              }
            },
            role: {
              validators: {
                notEmpty: {
                  message: 'Role is required'
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
