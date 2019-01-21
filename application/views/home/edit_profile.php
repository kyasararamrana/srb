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
                              <img src="<?php echo base_url('assets/img/user.jpg'); ?>">
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
                          <div class="ep-info">
                              <form id="ProfileForm" action="<?php echo base_url('home/update_profile'); ?>" method="post">
                                  <div class="billing-details">
                                      <div class="section-title mb-4">
                                          <h3 class="title">Edit Profile</h3>
                                      </div>
                                      <div class="form-group">
                                          <input class="input" type="text" name="firstname" placeholder="First Name" value="<?php if (isset($profile->firstname)) { echo $profile->firstname; } ?>">
                                      </div>
                                      <div class="form-group">
                                          <input class="input" type="text" name="lastname" placeholder="Last Name" value="<?php if (isset($profile->lastname)) { echo $profile->lastname; } ?>">
                                      </div>
                                      <div class="form-group">
                                          <select class="form-control input" name="gender">
                                              <option value="">Select Gender</option>
                                              <option value="Male" <?php if (isset($profile->gender) && $profile->gender == 'Male') { echo 'selected'; } else { echo ''; } ?>>Male</option>
                                              <option value="Female" <?php if (isset($profile->gender) && $profile->gender == 'Female') { echo 'selected'; } else { echo ''; } ?>>Female</option>
                                              <option value="Others" <?php if (isset($profile->gender) && $profile->gender == 'Others') { echo 'selected'; } else { echo ''; } ?>>Others</option>
                                          </select>
                                          <div class="caret"></div>
                                      </div>
                                      <div class="form-group">
                                          <input class="input" type="email" name="email" placeholder="Email" value="<?php if (isset($profile->email)) { echo $profile->email; } ?>">
                                      </div>
                                      <div class="form-group">
                                          <input class="input" type="mobilenumber" name="mobile" placeholder="Mobile Number" value="<?php if (isset($profile->mobile)) { echo $profile->mobile; } ?>">
                                      </div>
                                  </div>
                                  <input type="hidden" name="id" value="<?php if (isset($profile->id)) { echo $profile->id; } ?>">
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
        $('#ProfileForm').bootstrapValidator({
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
              }
            }
          });
      });
    </script>
  </body>
</html>
