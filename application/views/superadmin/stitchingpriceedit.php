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
                <h1>Edit Stitching Price</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="<?php echo base_url('stitching/pricelist'); ?>">Stitching Price</a></li>
                    <li class="active">Edit Stitching Price</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="priceForm" name="priceForm" method="post" action="<?php if (isset($price->id)) { echo base_url('stitching/stitchingupdate'); } else { echo base_url('stitching/stitchinginsert'); } ?>">
                                <div class="box-body">
								
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
									<!--  sidepatty-->
									
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>Sidepatty GSM</label>
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
                                            <label>Stitching Type</label>
                                            <select class="form-control" name="stitching_type" id="stitching_type" data-layout="<?php echo (isset($price->stitching_type)) ? $price->stitching_type : '' ; ?>">
                                              <?php if (count($stitching_type_list) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($stitching_type_list as $list) { ?>
                                                  <option value="<?php echo $list['i_s_t_id']; ?>" <?php echo (isset($price->stitching_type) && $price->stitching_type == $list['i_s_t_id']) ? 'selected' : '' ; ?>><?php echo $list['stitching_type']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>Printing Style</label>
                                            <select class="form-control" name="printing_style" id="printing_style" data-layout="<?php echo (isset($price->printing_style)) ? $price->printing_style : '' ; ?>">
                                              <?php if (count($printing_list) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($printing_list as $list) { ?>
                                                  <option value="<?php echo $list['id']; ?>" <?php echo (isset($price->printing_style) && $price->printing_style == $list['id']) ? 'selected' : '' ; ?>><?php echo $list['printing_style']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-3">
                                        <div class="form-group">
                                            <label>Printing Color</label>
                                            <select class="form-control" name="printing_color_type" id="printing_color_type" data-layout="<?php echo (isset($price->printing_color_type)) ? $price->printing_color_type : '' ; ?>">
                                              <?php if (count($printingcolortype) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($printingcolortype as $list) { ?>
                                                  <option value="<?php echo $list['id']; ?>" <?php echo (isset($price->printing_color_type) && $price->printing_color_type == $list['id']) ? 'selected' : '' ; ?>><?php echo $list['printing_color_type']; ?></option>
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<!--  sidepxatty-->
                                  <div class="clearfix">&nbsp;</div>
									<div class="table-responsive">
                                            <table id="myTable" class="table table-list">
                                                <thead>
                                                    <tr>
                                                        <th>Bag Type</th>
                                                        <th>Bag Layout</th>
                                                        <th>Bag GSM</th>
                                                        <th>Sidepatty width</th>
                                                        <th>Finishing size</th>
														  <th>Price</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-2">
                                                              <select class="form-control" name="bag_type[]" id="bag_type" onchange ="get_bag_layout(this.value,'0');" data-layout="<?php echo (isset($price->bag_type)) ? $price->bag_type : '' ; ?>">
																  <?php if (count($bagtype) > 0) { ?>
																	<option value="">Select</option>
																	<?php foreach ($bagtype as $type) { ?>
																	  <option value="<?php echo $type->id; ?>" <?php echo (isset($price->bag_type) && $price->bag_type == $type->id) ? 'selected' : '' ; ?>><?php echo $type->bag_type; ?></option>
																	<?php } ?>
																  <?php } else { ?>
																	<option value="">No records found</option>
																  <?php } ?>
																</select>
                                                        </td>
														<td class="col-md-2">
                                                               <select class="form-control bag_layout" name="bag_layout[]" id="bag_layout0" onchange="get_bag_gsm(this.value,'0');" data-layout="<?php echo (isset($price->bag_layout)) ? $price->bag_layout : '' ; ?>">
																<option value="">Select</option>
															</select>
                                                        </td>
														  <td class="col-md-2">
                                                              <select class="form-control" name="bag_gsm[]" id="bag_gsm0" data-layout="<?php echo (isset($price->bag_gsm)) ? $price->bag_gsm : '' ; ?>" required>
																	<option value="">Select</option>
																</select>
                                                        </td>
														<td class="col-md-2">
                                                               <select class="form-control" name="s_size[]" id="s_size" onchange="get_fininshing_size(this.value,'0');" data-layout="<?php echo (isset($price->bag_size)) ? $price->bag_size : '' ; ?>">
															  <?php if (count($size_list) > 0) { ?>
																<option value="">Select</option>
																<?php foreach ($size_list as $list) { ?>
																  <option value="<?php echo $list['s_id']; ?>" <?php echo (isset($price->bag_size) && $price->bag_size == $list['s_id']) ? 'selected' : '' ; ?>><?php echo $list['s_size']; ?></option>
																<?php } ?>
															  <?php } else { ?>
																<option value="">No records found</option>
															  <?php } ?>
															</select>
                                                        </td>
														<td class="col-md-2">
                                                            <select class="form-control" name="fininshing_size[]" id="fininshing_size0" data-layout="<?php echo (isset($price->fininshing_size)) ? $price->fininshing_size : '' ; ?>">
																<option value="">Select</option>
															</select>
                                                        </td>
														  <td class="col-md-2">
                                                            <input type="text" name="price[]" placeholder="Enter Price" class="form-control" value="<?php echo isset($price->price)?$price->price:''; ?>" required>
                                                        </td>
														
														
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
									
									
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <?php if (isset($price->id)) { ?>
                                          <input type="hidden" name="id" value="<?php echo (isset($price->id)) ? $price->id: '' ; ?>">
                                        <?php } ?>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
      <script>
	   //ajax call for bag layout by bag type
			var layout = $('#bag_layout0').data('layout');
			$('#bag_layout0').html('<option value="">loading...</option>');
			  $.ajax({
				url:'<?php echo base_url('bag/get_baglayout_by_bagtype'); ?>',
				type:'post',
				data:{'bag_type':$('#bag_type').val(),'layout':layout},
				success:function(data){
				  $('#bag_layout0').html(data).trigger('change');
				}
			  });
			  var layout1 = $('#fininshing_size0').data('layout');
			  $('#fininshing_size0').html('<option value="">loading...</option>');
			 $.ajax({
			   url:'<?php echo base_url('bag/get_fininshing_size_by_sidepattywidth'); ?>',
			   type:'post',
			   data:{'sidepattywidth':$('#s_size').val(),'layout':layout1},
			   success:function(data){
				 $('#fininshing_size0').html(data).trigger('change');
			   }
			 });
		function get_bag_layout(val,id){
			  var layout = $(this).data('layout');
			  $('#bag_layout'+id).html('<option value="">loading...</option>');
			  $.ajax({
				url:'<?php echo base_url('bag/get_baglayout_by_bagtype'); ?>',
				type:'post',
				data:{'bag_type':val,'layout':layout},
				success:function(data){
				  $('#bag_layout'+id).html(data).trigger('change');
				}
			  });
		}
		function get_bag_gsm(val,id){
			 var layout = $('#bag_gsm0').data('layout');
			 $('#bag_gsm'+id).html('<option value="">loading...</option>');
			 $.ajax({
			   url:'<?php echo base_url('bag/get_baggsm_by_baglayout'); ?>',
			   type:'post',
			   data:{'bag_layout':val,'gsm':layout},
			   success:function(data){
				 $('#bag_gsm'+id).html(data).trigger('change');
			   }
			 });
		}
		function get_fininshing_size(val,id){
			 $('#fininshing_size'+id).html('<option value="">loading...</option>');
			 $.ajax({
			   url:'<?php echo base_url('bag/get_fininshing_size_by_sidepattywidth'); ?>',
			   type:'post',
			   data:{'sidepattywidth':val},
			   success:function(data){
				 $('#fininshing_size'+id).html(data).trigger('change');
			   }
			 });
		}
        
    </script>
</body>
</html>
