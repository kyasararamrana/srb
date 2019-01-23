<div class="col-md-3">
    <div class="col-md-12 profile-sidebar">
        <div class="p-user-img">
            <img src="<?php echo base_url('assets/img/user.jpg'); ?>">
        </div>
        <div class="p-welcome-msg">
            <small>Hello</small>
            <h4><?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname'); ?></h4>
        </div>
    </div>
    <div class="col-md-12 profile-sidebar-2">
        <a href="my-orders.php">My Orders</a>
        <a href="<?php echo base_url('wishlist'); ?>">My Wishlist</a>
        <a href="<?php echo base_url('home/edit_profile'); ?>">Edit Profile</a>
        <a href="<?php echo base_url('home/change_password'); ?>">Change Password</a>
        <a href="<?php echo base_url('home/login'); ?>">Logout</a>
    </div>
</div>
