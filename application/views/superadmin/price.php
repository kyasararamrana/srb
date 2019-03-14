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
                <h1>Add Price</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Bags</li>
                    <li class="active">Add Price</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="priceForm" name="priceForm" method="post" action="<?php if (isset($price->id)) { echo base_url('price/update'); } else { echo base_url('price/insert'); } ?>">
                                <div class="box-body">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bag Type</label>
                                            <select class="form-control" name="bag_type" id="bag_type" data-layout="<?php echo (isset($price->bag_layout)) ? $price->bag_layout : '' ; ?>">
                                              <?php if (count($bagtype) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($bagtype as $type) { ?>
                                                  <option value="<?php echo $type->id; ?>" <?php echo (isset($price->bag_type) && $price->bag_type == $type->id) ? 'selected' : '' ; ?>><?php echo $type->bag_type; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bag Layout</label>
                                            <select class="form-control" name="bag_layout" id="bag_layout" data-size="<?php echo (isset($price->bag_size)) ? $price->bag_size : '' ; ?>">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bag Size</label>
                                            <select class="form-control" name="bag_size" id="bag_size" data-gsm="<?php echo (isset($price->bag_gsm)) ? $price->bag_gsm : '' ; ?>">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>GSM</label>
                                            <select class="form-control" name="bag_gsm" id="bag_gsm">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label>Printing cost</label>
                                        <input type="text" class="form-control" name="printing_cost" id="printing_cost" value="<?php echo (isset($price->printing_cost)) ? $price->printing_cost : '' ; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bags per KG</label>
                                            <input type="text" class="form-control" name="bags_per_kg" id="bags_per_kg" value="<?php echo (isset($price->bags_per_kg)) ? $price->bags_per_kg : 0 ; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Cost per Bag for Single Color</label>
                                            <input type="text" class="form-control" name="cost_per_bag" id="cost_per_bag" value="<?php echo (isset($price->cost_per_bag)) ? $price->cost_per_bag : 0 ; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Cost per kg</label>
                                            <input type="text" class="form-control" name="cost_per_kg" id="cost_per_kg" value="<?php echo (isset($price->cost_per_kg)) ? $price->cost_per_kg : 0 ; ?>" readonly>
                                        </div>
                                    </div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>Quality Type</label>
                                            <select class="form-control" name="quality_type" id="quality_type" data-layout="<?php echo (isset($price->quality_type)) ? $price->quality_type : '' ; ?>">
                                              <?php if (count($quality_type) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($quality_type as $list) { ?>
                                                  <option value="<?php echo $list['id']; ?>" <?php echo (isset($price->quality_type) && $price->quality_type == $list['id']) ? 'selected' : '' ; ?>><?php echo $list['name']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>Material Type</label>
                                            <select class="form-control" name="material_type" id="material_type" data-layout="<?php echo (isset($price->material_type)) ? $price->material_type : '' ; ?>">
                                              <?php if (count($material_type) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($material_type as $list) { ?>
                                                  <option value="<?php echo $list['i_m_id']; ?>" <?php echo (isset($price->material_type) && $price->material_type == $list['i_m_id']) ? 'selected' : '' ; ?>><?php echo $list['material']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<!--  sidepatty-->
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <select class="form-control" name="s_size" id="s_size" data-layout="<?php echo (isset($price->s_size)) ? $price->s_size : '' ; ?>">
                                              <?php if (count($size_list) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($size_list as $list) { ?>
                                                  <option value="<?php echo $list['s_id']; ?>" <?php echo (isset($price->s_size) && $price->s_size == $list['s_id']) ? 'selected' : '' ; ?>><?php echo $list['s_size']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>GSM</label>
                                            <select class="form-control" name="s_gsm" id="s_gsm" data-layout="<?php echo (isset($price->s_gsm)) ? $price->s_gsm : '' ; ?>">
                                              <?php if (count($gsm_list) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($gsm_list as $list) { ?>
                                                  <option value="<?php echo $list['s_id']; ?>" <?php echo (isset($price->s_gsm) && $price->s_gsm == $list['s_id']) ? 'selected' : '' ; ?>><?php echo $list['s_gsm']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>Handle Type</label>
                                            <select class="form-control" name="handle_type" id="handle_type" data-layout="<?php echo (isset($price->handle_type)) ? $price->handle_type : '' ; ?>">
                                              <?php if (count($handle_rate_cost) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($handle_rate_cost as $list) { ?>
                                                  <option value="<?php echo $list['id']; ?>" <?php echo (isset($price->handle_type) && $price->handle_type == $list['id']) ? 'selected' : '' ; ?>><?php echo $list['type']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<!--  sidepatty-->
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <?php if (isset($price->id)) { ?>
                                          <input type="hidden" name="id" value="<?php echo (isset($price->id)) ? $price->id: '' ; ?>">
                                        <?php } ?>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
							<input type="hidden" name="percentage" id="percentage" value=""> 
							<input type="hidden" name="additional_gsm" id="additional_gsm" value=""> 
							<input type="hidden" name="handle_rate_cost" id="handle_rate_cost" value=""> 
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
        $('#priceForm').bootstrapValidator({
            fields: {
                btype: {
                    validators: {
                        notEmpty: {
                            message: 'Bag Type is required'
                        }
                    }
                },
                bsize: {
                    validators: {
                        notEmpty: {
                            message: 'Bag Size is required'
                        }
                    }
                },
                bgsm: {
                    validators: {
                        notEmpty: {
                            message: 'GSM is required'
                        }
                    }
                }
            }
        });
        //ajax call for bag layout by bag type
        $('#bag_type').on('change',function(){
          var bag_type = $(this).val();
          var layout = $(this).data('layout');
          $('#bag_layout').html('<option value="">loading...</option>');
          $.ajax({
            url:'<?php echo base_url('bag/get_baglayout_by_bagtype'); ?>',
            type:'post',
            data:{'bag_type':bag_type,'layout':layout},
            success:function(data){
              $('#bag_layout').html(data).trigger('change');;
            }
          });
        });
		
		$('#bag_type').on('change',function(){
          var bag_type = $(this).val();
          jQuery.ajax({
   					url: "<?php echo base_url('bag/get_bag_per_kg_amount');?>",
   					data: {
   						bag_type: bag_type,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						$('#cost_per_kg').empty();
   						$('#additional_gsm').empty();
   						$('#percentage').empty();
   						$('#cost_per_kg').val(data.amt);
   						$('#additional_gsm').val(data.gsm);
   						$('#percentage').val(data.percent);
   					}
   				});
        });
		//handle cost purpose
		$('#handle_type').on('change',function(){
          var handle_type = $(this).val();
          jQuery.ajax({
   					url: "<?php echo base_url('bag/get_handle_cost');?>",
   					data: {
   						handle_type: handle_type,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						$('#handle_rate_cost').empty();
   						$('#handle_rate_cost').val(data.amt);
   					}
   				});
        });
		
        //ajax call for bag size by bag layout
        $('#bag_layout').on('change',function(){
          var bag_layout = $(this).val();
          var size = $(this).data('size');
          $('#bag_size').html('<option value="">loading...</option>');
          $.ajax({
            url:'<?php echo base_url('bag/get_bagsize_by_baglayout'); ?>',
            type:'post',
            data:{'bag_layout':bag_layout,'size':size},
            success:function(data){
              $('#bag_size').html(data).trigger('change');;
            }
          });
        });
        //ajax call for bag size by bag layout
        $('#bag_size').on('change',function(){
         var bag_size = $(this).val();
         $('#bag_gsm').html('<option value="">loading...</option>');
         $.ajax({
           url:'<?php echo base_url('bag/get_baggsm_by_bagsize'); ?>',
           type:'post',
           data:{'bag_size':bag_size},
           success:function(data){
             $('#bag_gsm').html(data).trigger('change');;
           }
         });
       });
        //price calculation
        $('#printing_cost').on('keyup',function(){
          if ($('#bag_type').find('option:selected').text() == 'Dcut') {
            var bag_size = $('#bag_size').find('option:selected').text().split('*');
            var bag_gsm = $('#bag_gsm').find('option:selected').text();
            var printing_cost = $('#printing_cost').val();
            var handle_rate = $('#handle_rate').val();
            var zip_rate = $('#zip_rate').val();
            var other_charges = $('#other_charges').val();
            var minimum_quantity = $('#minimum_quantity').val();
            var additional_gsm = $('#additional_gsm').val();
            var percentage = $('#percentage').val();
            var cost_per_kg = $('#cost_per_kg').val();
            var width = bag_size[0];
            var length = bag_size[1];
            var weight_of_bag_formula = (width * ((length * 2) + 5) * (parseInt(bag_gsm) + parseInt(additional_gsm))) / 1550;
            var weight_of_bag = weight_of_bag_formula;
            //no of bags per kg
            var no_of_bags_per_kg_formula = 1000/weight_of_bag;
            var no_of_bags_per_kg = no_of_bags_per_kg_formula;
            $('#bags_per_kg').val(no_of_bags_per_kg.toFixed(2));
            //cost of the bag
            var cost_per_bag_formula = ((weight_of_bag / 1000) * cost_per_kg);
            var cost_per_bag_value = cost_per_bag_formula;
            var final_cost_per_bag = cost_per_bag_value + (cost_per_bag_value * percentage) + (parseInt(printing_cost));
            $('#cost_per_bag').val(final_cost_per_bag.toFixed(2));
            //cost per kg
            cost_per_kg = cost_per_kg + (no_of_bags_per_kg * (parseInt(handle_rate) + parseInt(zip_rate) + parseInt(other_charges) + parseInt(minimum_quantity)));
            $('#cost_per_kg').val(cost_per_kg.toFixed(2));
          }else if($('#bag_type').find('option:selected').text() == 'Handle') {
				var bag_size = $('#bag_size').find('option:selected').text().split('*');
				var width = bag_size[0];
				var length = bag_size[1];
				var bag_gsm = $('#bag_gsm').find('option:selected').text();
				var additional_gsm = $('#additional_gsm').val();
				var weight_of_bag_formula = (width * ((length * 2) + 3) * (parseInt(bag_gsm) + parseInt(additional_gsm))) / 1550;
				var additon_handle_weight= 3.5+((2*(13*2*105))/1550);
				var weight_of_bag=(weight_of_bag_formula+additon_handle_weight)
				var no_of_bags_per_kg_formula = 1000/weight_of_bag;
				
				//cost of the bag
				var cost_per_kg = $('#cost_per_kg').val();
				var percentage = $('#percentage').val();
				var printing_cost = $('#printing_cost').val();
				var cost_per_bag_formula = ((weight_of_bag / 1000) * cost_per_kg);
				var cost_per_bag_value = cost_per_bag_formula;
				var handle_rate=$('#handle_rate_cost').val();
				 var no_of_bags_per_kg = no_of_bags_per_kg_formula;
				var final_cost_per_bag = cost_per_bag_value + (cost_per_bag_value * percentage) + (parseInt(printing_cost)) + (parseInt(handle_rate));
				$('#bags_per_kg').val(no_of_bags_per_kg.toFixed(2));
				$('#cost_per_bag').val(final_cost_per_bag.toFixed(2));
			}else if($('#bag_type').find('option:selected').text() == 'Stitching bag') {
				var bag_size = $('#bag_size').find('option:selected').text().split('*');
				var width = bag_size[0];
				var length = bag_size[1];
				var sidepatty_bag_size = $('#s_size').val();		
				var bag_gsm = $('#bag_gsm').find('option:selected').text();
				var additional_gsm = $('#additional_gsm').val();
				var sidepatty_gsm = $('#s_gsm').val();
				var weight_of_bag_formula = (((length+1)*width)*2*(bag_gsm+additional_gsm))/1550;
				var weight_of_sidepatty=((width +((length+1) * 2)) * (sidepatty_bag_size) * (sidepatty_gsm + additional_gsm))/1550;
				var additon_handle_weight= 3.5+((2*(13*2*105))/1550);
				var no_of_bags_per_kg_formula = (1000/(weight_of_bag_formula +weight_of_sidepatty + additon_handle_weight));
				//console.log(weight_of_bag_formula);
				//console.log(weight_of_sidepatty);
				//console.log(additon_handle_weight);
					//cost of the bag
				var cost_per_kg = $('#cost_per_kg').val();
				var percentage = $('#percentage').val();
				var printing_cost = $('#printing_cost').val();
				var cost_per_bag_formula = ((weight_of_bag_formula / 1000) * cost_per_kg);
				var cost_per_bag_value = cost_per_bag_formula+((weight_of_sidepatty/1000)*cost_per_kg);
				var handle_rate=$('#handle_rate_cost').val();
				var final_cost_per_bag = cost_per_bag_value + (cost_per_bag_value * percentage) + (parseInt(printing_cost)) + (parseInt(handle_rate));
				$('#bags_per_kg').val(no_of_bags_per_kg_formula.toFixed(2));
				$('#cost_per_bag').val(final_cost_per_bag.toFixed(2));
				
				
			}
        });
      });
    </script>
</body>
</html>
