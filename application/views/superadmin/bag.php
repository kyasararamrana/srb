<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB |
        <?php echo $pageTitle; ?>
    </title>
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
                <h1>
                    Add Bag
                </h1>
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
                            <form method="post" id="bagForm" action="<?php echo base_url('bag/insert'); ?>">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Bag Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Material Type</label>
                                                <input type="text" class="form-control" name="mtype" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quality</label>
                                                <input type="text" class="form-control" name="quality" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Type</label>
                                                <!-- <input type="text" class="form-control" name="bag_type" id=""> -->
                                                <select class="form-control" name="bag_type" id="bag_type">
                                                  <?php if (count($bagtype) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($bagtype as $type) { ?>
                                                      <option value="<?php echo $type->id; ?>"><?php echo $type->bag_type; ?></option>
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
                                                <select class="form-control" name="bag_layout" id="bag_layout">
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
                                                <input type="text" class="form-control" name="bcolor" id="">
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
                                                <input type="text" class="form-control" name="handletype" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Material Type</label>
                                                <input type="text" class="form-control" name="handlematerialtype" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Size</label>
                                                <input type="text" class="form-control" name="handlesize" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Color</label>
                                                <input type="text" class="form-control" name="handlecolor" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle GSM</label>
                                                <input type="text" class="form-control" name="handlegsm" id="">
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
                                                <input type="text" class="form-control" name="sidepattytype" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Size</label>
                                                <input type="text" class="form-control" name="sidepattysize" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Color</label>
                                                <input type="text" class="form-control" name="sidepattycolor" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty GSM</label>
                                                <input type="text" class="form-control" name="sidepattygsm" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing</label>
                                                <input type="text" class="form-control" name="sidepattyprint" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing Color</label>
                                                <input type="text" class="form-control" name="sidepattyprintcolor" id="">
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
                                                <input type="text" class="form-control" name="ziptype" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Color</label>
                                                <input type="text" class="form-control" name="zipcolor" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Size</label>
                                                <input type="text" class="form-control" name="zipsize" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Quality</label>
                                                <input type="text" class="form-control" name="zipquality" id="">
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
                                                <input type="text" class="form-control" name="stitchtype" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Thread Color</label>
                                                <input type="text" class="form-control" name="stitchcolor" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Design</label>
                                                <input type="text" class="form-control" name="stitchdesign" id="">
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
                                                      <option value="<?php echo $method->id; ?>"><?php echo $method->printing_method; ?></option>
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
                                                      <option value="<?php echo $colortype->id; ?>"><?php echo $colortype->printing_color_type; ?></option>
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
                                                      <option value="<?php echo $style->id; ?>"><?php echo $style->printing_style; ?></option>
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
                                                <select class="form-control" name="Suggested_printing_color">
                                                  <?php if (count($suggestedprintingcolor) > 0) { ?>
                                                    <option value="">Select</option>
                                                    <?php foreach ($suggestedprintingcolor as $suggested) { ?>
                                                      <option value="<?php $suggested->id; ?>"><?php echo $suggested->suggested_printing_color; ?></option>
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
                                                      <option value="<?php echo $language->id; ?>"><?php echo $language->printing_language; ?></option>
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
                                                <input type="text" class="form-control" name="othercharge" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Cost</label>
                                                <input type="text" class="form-control" name="printcost" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Block Charges</label>
                                                <input type="text" class="form-control" name="blockcharge" id="">
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
                                                <input type="text" class="form-control" name="bagcost" id="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix">&nbsp;</div>
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
          $('#bag_layout').html('<option value="">loading...</option>');
          $.ajax({
            url:'<?php echo base_url('bag/get_baglayout_by_bagtype'); ?>',
            type:'post',
            data:{'bag_type':bag_type},
            success:function(data){
              $('#bag_layout').html(data);
            }
          });
        });
        //ajax call for bag size by bag layout
        $('#bag_layout').on('change',function(){
         var bag_layout = $(this).val();
         $('#bag_size').html('<option value="">loading...</option>');
         $.ajax({
           url:'<?php echo base_url('bag/get_bagsize_by_baglayout'); ?>',
           type:'post',
           data:{'bag_layout':bag_layout},
           success:function(data){
             $('#bag_size').html(data);
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
             $('#bag_gsm').html(data);
           }
         });
        });
      });
    </script>

</body>

</html>
