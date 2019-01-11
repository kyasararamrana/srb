<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_icon"><img src="<?php echo base_url('assets/img/send.png'); ?>" alt=""></div>
                        <div class="newsletter_title">Sign up for Newsletter</div>
                        <div class="newsletter_text">
                            <p>...and receive 20% coupon for first shopping.</p>
                        </div>
                    </div>
                    <div class="newsletter_content clearfix">
                        <form action="#" class="newsletter_form">
                            <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                            <button class="newsletter_button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 footer_col">
                <div class="footer_column footer_contact">
                    <div class="logo_container">
                        <div style="background:#fff;padding:10px;">
                          <a href="<?php echo base_url(); ?>">
                            <?php if((isset($logo->logo) && !empty($logo->logo)) && file_exists('assets/uploads/logo/'.$logo->logo)){ ?>
                              <img style="width:100px;height:auto;" src="<?php echo base_url('assets/uploads/logo/'.$logo->logo); ?>" class="img-responsive">
                            <?php } else{ ?>
                              <img style="width:100px;height:auto;" src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-responsive">
                            <?php } ?>
                          </a>
                        </div>
                    </div>
                    <div class="footer_contact_text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 offset-lg-1 col-md-4">
                <div class="footer_column">
                    <div class="footer_title">Categories</div>
                    <?php if(count($categories) > 0){ ?>
                      <ul class="footer_list">
                        <?php foreach ($categories as $c) { ?>
                          <li><a href="<?php echo base_url('products/'.$c->id); ?>"><?php echo $c->name; ?></a></li>
                        <?php } ?>
                      </ul>
                    <?php } else { ?>
                      <ul class="footer_list">
                        <li class="text-white">No Categories found</li>
                      <ul class="footer_list">
                    <?php } ?>
                </div>
            </div>

            <!-- <div class="col-lg-2 col-md-4">
                <div class="footer_column">
                    <ul class="footer_list footer_list_2">
                        <li><a href="#">Model Number Sheets</a></li>
                        <li><a href="#">Missprint Bags</a></li>
                        <li><a href="#">Printed Rolls</a></li>
                        <li><a href="#">Printed Sheets</a></li>
                        <li><a href="#">Printed Bags</a></li>
                    </ul>
                </div>
            </div> -->

            <div class="col-lg-2 col-md-4 quick-links">
                <div class="footer_column">
                    <div class="footer_title">Quick Links</div>
                    <ul class="footer_list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="<?php echo base_url('products'); ?>">Products</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="copyright_container">
                    <div class="copyright_content">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Developed by <strong><a href="#" target="_blank"> http://prachatech.com</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
