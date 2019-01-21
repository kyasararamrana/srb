<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SRB | <?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $links; ?>
  </head>
  <body>
    <div class="super_container">
      <?php echo $header; ?>
      <!-- My-Profile -->
      <div class="my-profile">
          <div class="container">

              <div class="row">
                  <div class="col-md-3">
                      <div class="col-md-12 profile-sidebar">
                          <div class="p-user-img">
                              <img src="img/user.jpg">
                          </div>
                          <div class="p-welcome-msg">
                              <small>Hello</small>
                              <h4>Rana Prathap</h4>
                          </div>
                      </div>

                      <div class="col-md-12 profile-sidebar-2">
                          <a href="my-orders.php">My Orders</a>
                          <a href="my-wishlist.php">My Wishlist</a>
                          <a href="edit-profile.php">Edit Profile</a>
                          <a href="change-password.php">Change Password</a>
                          <a href="login.php">Logout</a>
                      </div>
                  </div>
                  <div class="col-md-9">
                      <div class="col-md-12 profile-body">
                          <div class="cp-info">

                              <form id="changePasswordForm" method="post" action="<?php echo base_url('home/update_password'); ?>">
                                  <div class="billing-details">
                                      <div class="section-title mb-4">
                                          <h3 class="title">Change Password</h3>
                                      </div>
                                      <div class="form-group">
                                          <label>Old Password</label>
                                          <input class="input" type="password" name="oldpassword" placeholder="Enter Old Password">
                                      </div>
                                      <div class="form-group">
                                          <label>New Password</label>
                                          <input class="input" type="password" name="newpassword" placeholder="Enter New Password">
                                      </div>
                                      <div class="form-group">
                                          <label>Confirm Password</label>
                                          <input class="input" type="password" name="confirmnewpassword" placeholder="Confirm Password">
                                      </div>
                                  </div>
                                  <div class="">
                                      <button type="submit" class="primary-btn">Save Changes</button>
                                  </div>
                                  <div class="clearfix">&nbsp;</div>
                              </form>

                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
      <?php echo $footer; ?>
    </div>
    <?php echo $scripts ?>
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
                          url: '<?php echo base_url('home/check_password'); ?>'
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
