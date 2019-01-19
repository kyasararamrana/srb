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
                <h1>
                    Add Product
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Product</a></li>
                    <li class="active">Add Product</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="addProductForm" name="addProductForm" action="<?php if (isset($product->id)) { echo base_url('product/update'); } else { echo base_url('product/insert'); } ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Category <span class="text-danger">*</span></label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value=""><?php echo (count($categories) > 0) ? 'Select' : 'No categories found' ;  ?></option>
                                                    <?php if (count($categories) > 0) { ?>
                                                      <?php foreach ($categories as $c) { ?>
                                                        <option value="<?php echo $c->id; ?>" <?php echo (isset($product->category) && ($product->category == $c->id) ) ? 'selected' : '' ; ?>><?php echo $c->name; ?></option>
                                                      <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Product Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="name" id="name" value="<?php echo (isset($product->name)) ? $product->name : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product Image <span class="text-danger">*</span></label>
                                                <input type="file" class="form-control" name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <?php if((isset($product->image) && !empty($product->image)) && file_exists('assets/uploads/product/'.$product->image)){ ?>
                                              <img src="<?php echo base_url('assets/uploads/product/'.$product->image); ?>" alt="" class="img-thumbnail">
                                            <?php } else { ?>
                                              <img src="" alt="" class="img-thumbnail" style="display:none;">
                                            <?php }?>
                                        </div>
                                        <!--Thumbnail-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product Thumbnail</label>
                                                <input type="file" class="form-control" name="thumbnail1" id="thumbnail1">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <?php if((isset($product->thumbnail1) && !empty($product->thumbnail1)) && file_exists('assets/uploads/product/'.$product->thumbnail1)){ ?>
                                              <img src="<?php echo base_url('assets/uploads/product/'.$product->thumbnail1); ?>" alt="" class="img-thumbnail">
                                            <?php } else { ?>
                                              <img src="" alt="" class="img-thumbnail" style="display:none;">
                                            <?php }?>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product Thumbnail</label>
                                                <input type="file" class="form-control" name="thumbnail2" id="thumbnail2">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <?php if((isset($product->thumbnail2) && !empty($product->thumbnail2)) && file_exists('assets/uploads/product/'.$product->thumbnail2)){ ?>
                                              <img src="<?php echo base_url('assets/uploads/product/'.$product->thumbnail2); ?>" alt="" class="img-thumbnail">
                                            <?php } else { ?>
                                              <img src="" alt="" class="img-thumbnail" style="display:none;">
                                            <?php }?>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product Thumbnail</label>
                                                <input type="file" class="form-control" name="thumbnail3" id="thumbnail3">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <?php if((isset($product->thumbnail3) && !empty($product->thumbnail3)) && file_exists('assets/uploads/product/'.$product->thumbnail3)){ ?>
                                              <img src="<?php echo base_url('assets/uploads/product/'.$product->thumbnail3); ?>" alt="" class="img-thumbnail" >
                                            <?php } else { ?>
                                              <img src="" alt="" class="img-thumbnail" style="display:none;">
                                            <?php }?>
                                        </div>
                                        <!--Thumbnail ends-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" id="description" rows="4"><?php echo (isset($product->description)) ? $product->description : '' ; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Size <span class="text-danger">*</span></label>
                                                <select class="form-control" name="size">
                                                  <option value=""><?php echo (isset($sizes) && count($sizes) > 0) ? 'Select' : 'No sizes found'; ?></option>
                                                  <?php if (count($sizes) > 0) { ?>
                                                    <?php foreach($sizes as $s){ ?>
                                                      <option value="<?php echo $s->id; ?>" <?php echo (isset($product->size) && $product->size == $s->id) ? 'selected' : ''; ?>><?php echo $s->name; ?></option>
                                                    <?php } ?>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Color <span class="text-danger">*</span></label>
                                                <select class="form-control" name="color">
                                                  <option value=""><?php echo (isset($colors) && count($colors) > 0) ? 'Select' : 'No colors found'; ?></option>
                                                  <?php if (count($colors) > 0) { ?>
                                                    <?php foreach($colors as $cs){ ?>
                                                      <option value="<?php echo $cs->id; ?>" <?php echo (isset($product->color) && $product->color == $cs->id) ? 'selected' : ''; ?>><?php echo $cs->name; ?></option>
                                                    <?php } ?>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>GSM <span class="text-danger">*</span></label>
                                                <select class="form-control" name="gsm">
                                                  <option value=""><?php echo (isset($gsm) && count($gsm) > 0) ? 'Select' : 'No GSM found'; ?></option>
                                                  <?php if (count($gsm) > 0) { ?>
                                                    <?php foreach($gsm as $g){ ?>
                                                      <option value="<?php echo $g->id; ?>" <?php echo (isset($product->gsm) && $product->gsm == $g->id) ? 'selected' : ''; ?>><?php echo $g->name; ?></option>
                                                    <?php } ?>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quality <span class="text-danger">*</span></label>
                                                <select class="form-control" name="quality">
                                                  <option value=""><?php echo (isset($quality) && count($quality) > 0) ? 'Select' : 'No Quality found'; ?></option>
                                                  <?php if (count($quality) > 0) { ?>
                                                    <?php foreach($quality as $q){ ?>
                                                      <option value="<?php echo $q->id; ?>" <?php echo (isset($product->quality) && $product->quality == $q->id) ? 'selected' : ''; ?>><?php echo $q->name; ?></option>
                                                    <?php } ?>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Actual Price <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="actual_price" id="actual_price" value="<?php echo (isset($product->actual_price)) ? $product->actual_price : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Discount Percentage</label>
                                                <input type="text" class="form-control" name="discount_percentage" id="discount_percentage" value="<?php echo (isset($product->discount_percentage)) ? $product->discount_percentage : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Net Price <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="net_price" id="net_price" readonly value="<?php echo (isset($product->net_price)) ? $product->net_price : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="featured" id="featured" value="1" <?php echo (isset($product->featured) && ($product->featured == '1')) ? 'checked' : '' ; ?>> Featured
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <?php if (isset($product->id)): ?>
                                      <input type="hidden" name="id" id="id" value="<?php echo $product->id; ?>">
                                      <input type="hidden" name="uploaded_image" value="<?php echo (isset($product->image)) ? $product->image : '' ; ?>">
                                      <input type="hidden" name="uploaded_thumbnail1" value="<?php echo (isset($product->thumbnail1)) ? $product->thumbnail1 : '' ; ?>">
                                      <input type="hidden" name="uploaded_thumbnail2" value="<?php echo (isset($product->thumbnail2)) ? $product->thumbnail2 : '' ; ?>">
                                      <input type="hidden" name="uploaded_thumbnail3" value="<?php echo (isset($product->thumbnail3)) ? $product->thumbnail3 : '' ; ?>">
                                    <?php endif; ?>
                                    <div class="col-md-12 text-center">
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
      $(document).ready(function(){
        //validations
        $('#addProductForm').bootstrapValidator({
          fields: {
            name: {
              validators: {
                notEmpty: {
                  message: 'Product Name is required'
                },
                remote: {
                  type:'POST',
                  message: 'Product Name already exists',
                  url: '<?php echo base_url('product/check_exists'); ?>',
                  data: function(validator, $field, value) {
                    return {
                      id: validator.getFieldElements('id').val()
                    };
                  }
                }
              }
            },
            category: {
              validators: {
                notEmpty: {
                  message: 'Category is required'
                }
              }
            },
            image: {
              validators: {
                <?php if (!isset($product->id)){ ?>
                notEmpty: {
                  message: 'Product image is required'
                },
                <?php } ?>
                regexp: {
                    regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                    message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                }
              }
            },
            size:{
              validators: {
                notEmpty: {
                  message: 'Size is required'
                }
              }
            },
            color:{
              validators: {
                notEmpty: {
                  message: 'Color is required'
                }
              }
            },
            gsm:{
              validators: {
                notEmpty: {
                  message: 'GSM is required'
                }
              }
            },
            quality:{
              validators: {
                notEmpty: {
                  message: 'Quality is required'
                }
              }
            },
            actual_price:{
              validators: {
                notEmpty: {
                  message: 'Actual price is required'
                }
                // integer: {
                //     message: 'The value is not an number',
                //     thousandsSeparator: '',
                //     decimalSeparator: '.'
                // }
              }
            },
            discount_percentage:{
              validators: {
                integer: {
                  message: 'The value is not a number'
                }
              }
            }
          }
        });
        //calculating Price
        $('#discount_percentage,#actual_price').keyup(function(){
          var discount = $('#discount_percentage').val();
          if (discount) {
            var calcPrice = calculate_price();
            $('#net_price').val(calcPrice);
          } else {
            $('#net_price').val($('#actual_price').val());
          }
        });

      });
      //calculating discount from acutal price
      function calculate_price(){
        var discount = $('#discount_percentage').val();
        var price = $('#actual_price').val();
        var calcPrice  = (price - ( price * discount / 100 ));
        return calcPrice;
      }
      //image preview
      function preview(input){
  			if(input.files && input.files[0]){
  				var reader = new FileReader();
  				reader.onload = function(e){
  					$(input).parent().parent().next('div').find('img').attr('src',e.target.result);
  				}
  				reader.readAsDataURL(input.files[0]);
  			}
  		}
  		$("input:file").on('change',function(){
  			preview(this);
  			$(this).parent().parent().next('div').find('img').css('display','block');
  		});
    </script>

</body>

</html>
