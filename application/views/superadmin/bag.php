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
                <h1>Add Bag</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Bags</a></li>
                    <li class="active">Add Bag</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form method="post" id="bagForm" action="<?php if (isset($bag->id)) { echo base_url('bag/update'); } else { echo base_url('bag/insert'); } ?>">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Bag Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Material Type</label>
                                                <input type="text" class="form-control" name="material_type" id="material_type" value="<?php echo (isset($bag->material_type)) ? $bag->material_type : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quality</label>
                                                <input type="text" class="form-control" name="quality" id="quality" value="<?php echo (isset($bag->quality)) ? $bag->quality : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Type</label>
                                                <!-- <input type="text" class="form-control" name="bag_type" id=""> -->
                                                <select class="form-control" name="bag_type" id="bag_type" data-layout="<?php echo (isset($bag->bag_layout)) ? $bag->bag_layout : '' ; ?>">
                                                  <?php if (count($bagtype) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($bagtype as $type) { ?>
                                                      <option value="<?php echo $type->id; ?>" <?php echo (isset($bag->bag_type) && $bag->bag_type == $type->id) ? 'selected' : '' ; ?>><?php echo $type->bag_type; ?></option>
                                                    <?php } ?>
                                                  <?php } else { ?>
                                                    <option value="">No options found</option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Layout</label>
                                                <!-- <input type="text" class="form-control" name="layout" id=""> -->
                                                <select class="form-control" name="bag_layout" id="bag_layout" data-size="<?php echo (isset($bag->bag_size)) ? $bag->bag_size : '' ; ?>">
                                                  <option value="">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Size</label>
                                                <!-- <input type="text" class="form-control" name="bsize" id=""> -->
                                                <select class="form-control" name="bag_size" id="bag_size">
                                                  <option value="">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Color</label>
                                                <input type="text" class="form-control" name="bag_color" id="bag_color" value="<?php echo (isset($bag->bag_color)) ? $bag->bag_color : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag GSM</label>
                                                <!-- <input type="text" class="form-control" name="bgsm" id=""> -->
                                                <select class="form-control" name="bag_gsm" id="bag_gsm">
                                                  <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Handle Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Type</label>
                                                <input type="text" class="form-control" name="handle_type" id="handle_type" <?php echo (isset($bag->handle_type)) ? $bag->handle_type : '' ; ?>>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Material Type</label>
                                                <input type="text" class="form-control" name="handle_material_type" id="handle_material_type" value="<?php echo (isset($bag->handle_material_type)) ? $bag->handle_material_type : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Size</label>
                                                <input type="text" class="form-control" name="handle_size" id="handle_size" value="<?php echo (isset($bag->handle_size)) ? $bag->handle_size : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Color</label>
                                                <input type="text" class="form-control" name="handle_color" id="handle_color" value="<?php echo (isset($bag->handle_color)) ? $bag->handle_color : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle GSM</label>
                                                <input type="text" class="form-control" name="handle_gsm" id="handle_gsm" value="<?php echo (isset($bag->handle_gsm)) ? $bag->handle_gsm : '' ; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Sidepatty Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Type</label>
                                                <input type="text" class="form-control" name="sidepatty_type" id="sidepatty_type" value="<?php echo (isset($bag->sidepatty_type)) ? $bag->sidepatty_type : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Size</label>
                                                <input type="text" class="form-control" name="sidepatty_size" id="sidepatty_size" value="<?php echo (isset($bag->sidepatty_size)) ? $bag->sidepatty_size : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Color</label>
                                                <input type="text" class="form-control" name="sidepatty_color" id="sidepatty_color" value="<?php echo (isset($bag->sidepatty_color)) ? $bag->sidepatty_color : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty GSM</label>
                                                <input type="text" class="form-control" name="sidepatty_gsm" id="sidepatty_gsm" value="<?php echo (isset($bag->sidepatty_gsm)) ? $bag->sidepatty_gsm : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing</label>
                                                <input type="text" class="form-control" name="sidepatty_print" id="sidepatty_print" value="<?php echo (isset($bag->sidepatty_print)) ? $bag->sidepatty_print : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing Color</label>
                                                <input type="text" class="form-control" name="sidepatty_print_color" id="sidepatty_print_color" value="<?php echo (isset($bag->sidepatty_print_color)) ? $bag->sidepatty_print_color : '' ; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Zip Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Type</label>
                                                <input type="text" class="form-control" name="zip_type" id="zip_type" value="<?php echo (isset($bag->zip_type)) ? $bag->zip_type : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Color</label>
                                                <input type="text" class="form-control" name="zip_color" id="zip_color" value="<?php echo (isset($bag->zip_color)) ? $bag->zip_color : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Size</label>
                                                <input type="text" class="form-control" name="zip_size" id="zip_size" value="<?php echo (isset($bag->zip_size)) ? $bag->zip_size : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Quality</label>
                                                <input type="text" class="form-control" name="zip_quality" id="zip_quality" value="<?php echo (isset($bag->zip_quality)) ? $bag->zip_quality : '' ; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Stitching Section</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Type</label>
                                                <input type="text" class="form-control" name="stitching_type" id="stitching_type" value="<?php echo (isset($bag->stitching_type)) ? $bag->stitching_type : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Thread Color</label>
                                                <input type="text" class="form-control" name="stitching_thread_color" id="stitching_thread_color" value="<?php echo (isset($bag->stitching_thread_color)) ? $bag->stitching_thread_color : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Design</label>
                                                <input type="text" class="form-control" name="stitching_design" id="stitching_design" value="<?php echo (isset($bag->stitching_design)) ? $bag->stitching_design : '' ; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Printing Section</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Method</label>
                                                <!-- <input type="text" class="form-control" name="printmethod" id=""> -->
                                                <select class="form-control" name="printing_method">
                                                  <?php if (count($printingmethod) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($printingmethod as $method) { ?>
                                                      <option value="<?php echo $method->id; ?>" <?php echo (isset($bag->printing_method) && $bag->printing_method == $method->id) ? 'selected' : '' ; ?>><?php echo $method->printing_method; ?></option>
                                                    <?php } ?>
                                                  <?php } else { ?>
                                                    <option value="">No option found</option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Color Type</label>
                                                <!-- <input type="text" class="form-control" name="printcolor" id=""> -->
                                                <select class="form-control" name="printing_color_type">
                                                  <?php if (count($printingcolortype) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($printingcolortype as $colortype) { ?>
                                                      <option value="<?php echo $colortype->id; ?>" <?php echo (isset($bag->printing_color_type) && $bag->printing_color_type == $colortype->id) ? 'selected' : '' ; ?>><?php echo $colortype->printing_color_type; ?></option>
                                                    <?php } ?>
                                                  <?php } else { ?>
                                                    <option value="">No options found</option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Style</label>
                                                <!-- <input type="text" class="form-control" name="printstyle" id=""> -->
                                                <select class="form-control" name="printing_style">
                                                  <?php if (count($printingstyle) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($printingstyle as $style) { ?>
                                                      <option value="<?php echo $style->id; ?>" <?php echo (isset($bag->printing_style) && $bag->printing_style == $style->id) ? 'selected' : '' ; ?>><?php echo $style->printing_style; ?></option>
                                                    <?php } ?>
                                                  <?php } else { ?>
                                                    <option value="">No options found</option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Suggested Printing color</label>
                                                <!-- <input type="text" class="form-control" name="sugprintcolor" id=""> -->
                                                <select class="form-control" name="suggested_printing_color">
                                                  <?php if (count($suggestedprintingcolor) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($suggestedprintingcolor as $suggested) { ?>
                                                      <option value="<?php echo $suggested->id; ?>" <?php echo (isset($bag->suggested_printing_color) && $bag->suggested_printing_color == $suggested->id) ? 'selected' : '' ; ?>><?php echo $suggested->suggested_printing_color; ?></option>
                                                    <?php } ?>
                                                  <?php } else { ?>
                                                    <option value="">No option found</option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Language</label>
                                                <!-- <input type="text" class="form-control" name="lang" id=""> -->
                                                <select class="form-control" name="printing_language">
                                                  <?php if (count($printinglanguage) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($printinglanguage as $language) { ?>
                                                      <option value="<?php echo $language->id; ?>" <?php echo (isset($bag->printing_language) && $bag->printing_language == $language->id) ? 'selected' : '' ; ?>><?php echo $language->printing_language; ?></option>
                                                    <?php } ?>
                                                  <?php } else { ?>
                                                    <option value="">No option found</option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Charges</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Other Charges</label>
                                                <input type="text" class="form-control" name="other_charge" id="other_charge" value="<?php echo (isset($bag->other_charge)) ? $bag->other_charge : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Cost</label>
                                                <input type="text" class="form-control" name="print_cost" id="print_cost" value="<?php echo (isset($bag->print_cost)) ? $bag->print_cost : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Block Charges</label>
                                                <input type="text" class="form-control" name="block_charge" id="block_charge" value="<?php echo (isset($bag->block_charge)) ? $bag->block_charge : '' ; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Cost Details</h4>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Cost per Kg</label>
                                                <input type="text" class="form-control" name="cost_per_kg" id="cost_per_kg" value="<?php echo (isset($bag->cost_per_kg)) ? $bag->cost_per_kg : '' ; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <?php if (isset($bag->id)) { ?>
                                      <input type="hidden" name="id" value="<?php echo (isset($bag->id)) ? $bag->id : '' ; ?>">
                                    <?php } ?>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
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
      $(document).ready(function() {
        $('#bagForm').bootstrapValidator({
          fields: {
            name: {
              validators: {
                notEmpty: {
                  message: 'Bag Name is required'
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
              $('#bag_layout').html(data);
            }
          });
        }).trigger('change');
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
             $('#bag_size').html(data);
           }
         });
        }).trigger('change');
        //ajax call for bag size by bag layout
        $('#bag_size').on('change',function(){
         var bag_size = $(this).val();
         $('#bag_gsm').html('<option value="">loading...</option>');
         $.ajax({
           url:'<?php echo base_url('bag/get_baggsm_by_bagsize'); ?>',
           type:'post',
           data:{'bag_size':bag_size},
           success:function(data){
             $('#bag_gsm').html(data);
           }
         });
        }).trigger('change');
      });
    </script>
</body>
</html>
