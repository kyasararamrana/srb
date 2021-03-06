<!DOCTYPE html>
<html lang="en">

<head>

    <title>SRB | <?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap4/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap4/bootstrapValidator.min.css');  ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login_register.css'); ?>" >

</head>
<body>
  <!--notification messages-->
  <?php if($this->session->flashdata('success')): ?>
    <div class="alert_msg1 animated slideInUp bg-succ">
      <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
    </div>
  <?php endif; ?>
  <?php if($this->session->flashdata('error')): ?>
    <div class="alert_msg1 animated slideInUp bg-warn">
      <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
    </div>
  <?php endif; ?>
  
	<div class="wrapper" style="background-image: url(<?php echo base_url('assets/img/banner07.jpg'); ?>);">
        <div class="inner">
            <div class="image-holder">
                <img src="<?php echo base_url('assets/img/rg-form-1.jpg'); ?>" alt="">
            </div>
            <form id="registerForm" name="reisterForm" action="<?php echo base_url('home/insert'); ?>" method="post">
                <h3>Registration Form</h3>
                <div class="form-group">
                    <input type="text" name="firstname" placeholder="First Name" class="form-control input" value="<?php echo set_value('firstname'); ?>">
                    <?php echo form_error('firstname'); ?>
                </div>
                <div class="form-group">
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control input" value="<?php echo set_value('lastname'); ?>">
                    <?php echo form_error('lastname'); ?>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" class="form-control input" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" placeholder="Mobile Number" class="form-control input" value="<?php echo set_value('mobile'); ?>">
                    <?php echo form_error('mobile'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control input" value="<?php echo set_value('forename'); ?>">
                    <?php echo form_error('password'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control input">
                    <?php echo form_error('confirmpassword'); ?>
                </div>
                <div class="text-center">
                    <button type="submit" class="primary-btn">Register<i class="fas fa-arrow-right"></i></button>
                </div>
                <hr>
                <div class="text-center">
                    <p>Already a member? <a href="<?php echo base_url('home/login'); ?>">Login Now</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrapValidator.min.js'); ?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#registerForm').bootstrapValidator({
            fields: {
                firstname: {
                    validators: {
                        notEmpty: {
                            message: 'First Name is required'
                        },
                        regexp: {
                        regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message:'Name wont allow <> [] = % '
                        }
                    }
                },
                lastname: {
                    validators: {
                        notEmpty: {
                            message: 'Last Name is required'
                        },
                        regexp: {
                        regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message:'Name wont allow <> [] = % '
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
                          url: '<?php echo base_url('home/check_exists'); ?>',
                          message: 'Email already exists',
                        },
                        regexp: {
                          regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                          message: 'Please enter a valid email address. For example johndoe@domain.com.'
                        }
                    }
                },
                mobile: {
                    validators: {
                        notEmpty: {
                            message: 'Mobile Number is required'
                        },
                        regexp: {
                        regexp:  /^[0-9]{10,14}$/,
                        message:'Mobile Number must be 10 to 14 digits'
                        }

                    }
                },
                password: {
                   validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        regexp: {
                        regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message:'Password wont allow <> [] = % '
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
                }
            }
        });
    });
    </script>
</body>

</html>
