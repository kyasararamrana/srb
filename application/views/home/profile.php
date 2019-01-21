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
                              <h4><?php if(isset($profile->firstname) && isset($profile->lastname)){ echo $profile->firstname.' '.$profile->lastname; } ?></h4>
                          </div>
                      </div>
                      <div class="col-md-12 profile-sidebar-2">
                          <a href="edit-profile.php">Edit Profile</a>
                          <a href="my-orders.php">My Orders</a>
                          <a href="my-wishlist.php">My Wishlist</a>
                          <a href="change-password.php">Change Password</a>
                          <a href="login.php">Logout</a>
                      </div>
                  </div>
                  <div class="col-md-9">
                      <div class="col-md-12 profile-body">
                          <div class="p-info">
                              <div class="section-title mb-4">
                                  <h3 class="title">Personal Information</h3>
                              </div>
                              <h4>Name</h4>
                              <div class="p-name">
                                  <?php if(isset($profile->firstname) && isset($profile->lastname)){ echo $profile->firstname.' '.$profile->lastname; } else { echo '-'; } ?>
                              </div>
                              <h4>Gender</h4>
                              <div class="p-gender">
                                  <?php if(isset($profile->gender)){ echo $profile->gender; } else { echo '-'; } ?>
                              </div>
                              <h4>Email Address</h4>
                              <div class="p-email">
                                  <?php if (isset($profile->email)) { echo $profile->email; } else { echo '-'; } ?>
                              </div>
                              <h4>Mobile Number</h4>
                              <div class="p-number">
                                  <?php if (isset($profile->mobile)) { echo $profile->mobile; } else { echo '-'; } ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <?php echo $footer; ?>
    </div>
    <?php echo $scripts ?>
  </body>
</html>
