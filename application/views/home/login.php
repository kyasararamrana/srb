<!DOCTYPE html>
<html lang="en">

<head>

    <title>SRB | <?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap4/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap4/bootstrapValidator.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login_register.css'); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>" >

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

	<div class="wrapper" style="background-image: url('<?php echo base_url('assets/img/banner02.jpg'); ?>');">
        <div class="inner">
            <div class="image-holder">
                <img src="<?php echo base_url('assets/img/deals_1.jpg'); ?>" alt="">
            </div>
            <form id="loginForm" name="loginForm" action="<?php echo base_url('home/get_access'); ?>" method="post">
                <h3>Login Form</h3>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" class="form-control input" <?php echo set_value('email'); ?>>
                    <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control input" <?php echo set_value('password'); ?>>
                    <?php echo form_error('password'); ?>
                </div>
                <div class="form-group">
                    <label class="float-left"><input type="checkbox"> Remember Password</label>
                    <span class="float-right">
                        <a href="forgotpassword.php" class="">Forgot Password?</a>
                    </span>
                </div>
                <div class="clearfix mb-2">&nbsp;</div>
                <div class="text-center">
                    <button type="submit" class="primary-btn">Login<i class="fas fa-arrow-right"></i></button>
                </div>
                <hr>
                <div class="text-center">
                    <p>Don't have an Account? <a href="<?php echo base_url('home/register'); ?>">Register Now</a></p>
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

          $('#loginForm').bootstrapValidator({
              fields: {
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
                  }
              }
          });
      });
    </script>
</body>

</html>
