<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TweenMax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TimelineMax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/scrollmagic/ScrollMagic.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/animation.gsap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/ScrollToPlugin.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/slick-1.8.0/slick.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/Isotope/isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/parallax-js-master/parallax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/product_custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/shop_custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrapValidator.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //wishlist
    $('.wish').click(function(){
      var obj = $(this);
      <?php if($this->session->userdata('logged_in') != TRUE){ ?>
        <?php $this->session->set_userdata('previous_url', current_url()); ?>
        <?php echo 'window.location = "'.base_url('home/login').'";' ?>
      <?php } else { ?>
        var product_id = obj.data('product_id');
        var product_name = obj.data('product_name');
        var product_image = obj.data('product_image');
        var actual_price = obj.data('actual_price');
        var net_price = obj.data('net_price');
        var discount_percentage = obj.data('discount_percentage');
        var user_id = "<?php echo $this->session->userdata('id'); ?>";
        $.ajax({
          url:'<?php echo base_url('wishlist/insert'); ?>',
          type:'post',
          data:{'user_id':user_id, 'product_id':product_id, 'product_name':product_name, 'product_image':product_image, 'actual_price':actual_price, 'net_price':net_price, 'discount_percentage':discount_percentage},
          dataType:'json',
          success:function(data){
            if (data.success) {
              $('.wishlist_count').html(data.count);
              $('#message').html('<div class="alert_msg1 animated slideInUp bg-succ">'+data.success+' <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');
              obj.addClass('active');
            } else {
              $('#message').html('<div class="alert_msg1 animated slideInUp bg-warn">'+data.error+' <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i></div>');
            }
          }
        });
      <?php } ?>
    });

    //search filters
    <?php if(isset($product) && count($product) > 0){ ?>
      <?php foreach ($product as $p) { ?>
        <?php $suggestions[] = array('key'=>$p->id,'value'=>$p->name); ?>
      <?php } ?>
    <?php } ?>
    var availableTags = [
	    <?php foreach($suggestions as $su){ ?>
		    {key: "<?php echo $su['key']; ?>",value: "<?php echo $su['value']; ?>"},
	    <?php } ?>
    ];
    $("#search_value").autocomplete({
      minLength: 0,
      source: availableTags,
      focus: function( event, ui ) {
        $("#search_value").val( ui.item.value );
        return false;
      },
      select: function( event, ui ) {
        $("#search_value").val( ui.item.value );
        $("#search_key").val( ui.item.key );
        return false;
      }
	  });
  });
</script>
