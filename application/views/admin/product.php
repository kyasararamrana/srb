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
                                              <img src="<?php echo base_url('assets/uploads/product/'.$product->image); ?>" alt="" class="img-thumbnail" id="upload_preview">
                                            <?php } else { ?>
                                              <img src="" alt="" class="img-thumbnail" id="upload_preview" style="display:none;">
                                            <?php }?>
                                        </div>
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
                                                <label>Actual Price <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="actual_price" id="actual_price" value="<?php echo (isset($product->actual_price)) ? (int)$product->actual_price : '' ; ?>">
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
                                                <input type="text" class="form-control" name="net_price" id="net_price" value="<?php echo (isset($product->net_price)) ? (int)$product->net_price : '' ; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-md-2">&nbsp;</div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="featured" id="featured"> Featured
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="onsale" id="onsale"> On Sale
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="mostviewed" id="mostviewed"> Most Viewed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="dealsoftheweek" id="dealsoftheweek">
                                                        Deal of the week
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="clearfix">&nbsp;</div>
                                    <?php if (isset($product->id)): ?>
                                      <input type="hidden" name="id" id="id" value="<?php echo $product->id; ?>">
                                      <input type="hidden" name="uploaded_image" value="<?php echo (isset($product->image)) ? $product->image : '' ; ?>">
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
            actual_price:{
              validators: {
                notEmpty: {
                  message: 'Actual price is required'
                }
              }
            },
            net_price:{
              validators: {
                notEmpty: {
                  message: 'Net price is required'
                }
              }
            }
          }
        });
        //calculating Price
        $('#actual_price').keyup(function(){
            $('#net_price').val($('#actual_price').val());
        });
        $('#discount_percentage').keyup(function(){
          var discount = $(this).val();
          var price = $('#actual_price').val();
          var calcPrice  = (price - ( price * discount / 100 ));
          $('#net_price').val(calcPrice);
        });
      });
      //image preview
      function preview(input){
  			if(input.files && input.files[0]){
  				var reader = new FileReader();
  				reader.onload = function(e){
  					$("#upload_preview").attr('src',e.target.result);
  				}
  				reader.readAsDataURL(input.files[0]);
  			}
  		}
  		$("#image").on('change',function(){
  			preview(this);
  			$("#upload_preview").css('display','block');
  		});
    </script>

</body>

</html>
