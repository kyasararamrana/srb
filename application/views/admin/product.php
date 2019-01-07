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
                            <form id="addProductForm" name="addProductForm" action="" method="">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value=""><?php echo (count($categories) > 0) ? 'Select' : 'No categories found' ;  ?></option>
                                                    <?php if (count($categories) > 0) { ?>
                                                      <?php foreach ($categories as $c) { ?>
                                                        <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
                                                      <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" class="form-control" name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Upload Product Images</label>
                                                <input type="file" class="form-control" name="images" id="images" multiple>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Actual Price</label>
                                                <input type="text" class="form-control" name="aprice" id="aprice">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Discount Price</label>
                                                <input type="text" class="form-control" name="dprice" id="dprice">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Net Price</label>
                                                <input type="text" class="form-control" name="nprice" id="nprice">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Material Type</label>
                                                <select class="form-control" name="mtype" id="mtype">
                                                    <option value="0">Select</option>
                                                    <option value="1">Nonwoven</option>
                                                    <option value="2">Plastic</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Quality</label>
                                                <select class="form-control" name="quality" id="quality">
                                                    <option value="0">Select</option>
                                                    <option value="1">Dotted</option>
                                                    <option value="2">Small dots</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Layout</label>
                                                <select class="form-control" name="layout" id="layout">
                                                    <option value="0">Select</option>
                                                    <option value="1">Horizontal</option>
                                                    <option value="2">Vertical</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Stitching Type</label>
                                                <select class="form-control" name="stitchtype" id="stitchtype">
                                                    <option value="0">Select</option>
                                                    <option value="1">Single Side</option>
                                                    <option value="2">Double Side</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Stitching Thread Color</label>
                                                <select class="form-control" name="stitchcolor" id="stitchcolor">
                                                    <option value="0">Select</option>
                                                    <option value="1">White</option>
                                                    <option value="2">Red</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Suggested Printing color</label>
                                                <select class="form-control" name="sugprintcolor" id="sugprintcolor">
                                                    <option value="0">Select</option>
                                                    <option value="1">Red</option>
                                                    <option value="2">Green</option>
                                                    <option value="3">Black Blue</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Model Numbers</label>
                                                <select class="form-control" name="modelnumbers" id="modelnumbers">
                                                    <option value="0">Select</option>
                                                    <option value="1">D11</option>
                                                    <option value="2">B12</option>
                                                    <option value="3">C18</option>
                                                    <option value="3">110</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Others</label>
                                                <select class="form-control" name="others" id="others">
                                                    <option value="0">Select</option>
                                                    <option value="1">Lays</option>
                                                    <option value="2">Bits</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Priority</label>
                                                <input type="text" class="form-control" name="priority" id="priority">
                                            </div>
                                        </div>

                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Size</label>
                                                <select class="form-control" name="bsize" id="bsize">
                                                    <option value="0">Select</option>
                                                    <option value="1">9x11</option>
                                                    <option value="2">10x14</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bag Color</label>
                                                <select class="form-control" name="bcolor" id="bcolor">
                                                    <option value="0">Select</option>
                                                    <option value="1">Ivory</option>
                                                    <option value="2">White</option>
                                                    <option value="3">R.Green</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bag GSM</label>
                                                <select class="form-control" name="bgsm" id="bgsm">
                                                    <option value="0">Select</option>
                                                    <option value="1">70</option>
                                                    <option value="2">90</option>
                                                    <option value="3">110</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Zip Color</label>
                                                <select class="form-control" name="zipcolor" id="zipcolor">
                                                    <option value="0">Select</option>
                                                    <option value="1">Red</option>
                                                    <option value="2">Green</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Zip Size</label>
                                                <select class="form-control" name="zipsize" id="zipsize">
                                                    <option value="0">Select</option>
                                                    <option value="1">50</option>
                                                    <option value="2">60</option>
                                                    <option value="3">70</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Zip Quality</label>
                                                <select class="form-control" name="zipquality" id="zipquality">
                                                    <option value="0">Select</option>
                                                    <option value="1">First</option>
                                                    <option value="2">Second</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Printing Method</label>
                                                <select class="form-control" name="printmethod" id="printmethod">
                                                    <option value="0">Select</option>
                                                    <option value="1">Offset</option>
                                                    <option value="2">Screen</option>
                                                    <option value="3">Roll</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Printing Color Type</label>
                                                <select class="form-control" name="printcolor" id="printcolor">
                                                    <option value="0">Select</option>
                                                    <option value="1">Single</option>
                                                    <option value="2">Double</option>
                                                    <option value="3">Four</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Printing Style</label>
                                                <select class="form-control" name="printstyle" id="printstyle">
                                                    <option value="0">Select</option>
                                                    <option value="1">Half and Half</option>
                                                    <option value="2">Same Image & Different Printing</option>
                                                    <option value="3">One Side Printing</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Type</label>
                                                <select class="form-control" name="handletype" id="handletype">
                                                    <option value="0">Select</option>
                                                    <option value="1">Cloth</option>
                                                    <option value="2">Plastic</option>
                                                    <option value="3">Woolen</option>
                                                    <option value="4">Stick</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Handle Size</label>
                                                <select class="form-control" name="handlesize" id="handlesize">
                                                    <option value="0">Select</option>
                                                    <option value="1">10x30</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Handle Color</label>
                                                <select class="form-control" name="handlecolor" id="handlecolor">
                                                    <option value="0">Select</option>
                                                    <option value="1">Ivory</option>
                                                    <option value="2">White</option>
                                                    <option value="3">R.Green</option>
                                                    <option value="4">Printed Red</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Handle GSM</label>
                                                <select class="form-control" name="handlegsm" id="handlegsm">
                                                    <option value="0">Select</option>
                                                    <option value="1">70</option>
                                                    <option value="2">90</option>
                                                    <option value="3">110</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Sidepatty Type</label>
                                                <select class="form-control" name="sidepattytype" id="sidepattytype">
                                                    <option value="0">Select</option>
                                                    <option value="1">Piping</option>
                                                    <option value="2">Common</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Sidepatty Size</label>
                                                <select class="form-control" name="sidepattysize" id="sidepattysize">
                                                    <option value="0">Select</option>
                                                    <option value="1">4</option>
                                                    <option value="2">6</option>
                                                    <option value="3">8</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Sidepatty Color</label>
                                                <select class="form-control" name="sidepattycolor" id="sidepattycolor">
                                                    <option value="0">Select</option>
                                                    <option value="1">Ivory</option>
                                                    <option value="2">White</option>
                                                    <option value="3">R.Green</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Sidepatty GSM</label>
                                                <select class="form-control" name="sidepattygsm" id="sidepattygsm">
                                                    <option value="0">Select</option>
                                                    <option value="1">70</option>
                                                    <option value="2">90</option>
                                                    <option value="3">110</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                    </div>
                                    <div class="clearfix">&nbsp;</div>

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
        $('#categoryForm').bootstrapValidator({
          fields: {
            name: {
              validators: {
                notEmpty: {
                  message: 'Category Name is required'
                },
                remote: {
                  message: 'Category Name already exists',
                  url: '<?php echo base_url('category/check_exists'); ?>',
                  data: {
                    type: 'name'
                  }
                }
              }
            }
          }
        });
      });
    </script>

</body>

</html>
