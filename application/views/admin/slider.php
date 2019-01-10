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
                    Add Sliders
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Slider</a></li>
                    <li class="active">Add Slide</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="addSliderForm" name="addSliderForm" action="<?php if (isset($slider->id)) { echo base_url('slider/update'); } else { echo base_url('slider/insert'); } ?>" method="post" enctype="multipart/form-data">
                              <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Slider Heading <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter Slider Heading" value="<?php echo (isset($slider->heading)) ? $slider->heading : '' ; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Slider Content <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="content" id="content" placeholder="Enter Slider Content" value="<?php echo (isset($slider->content)) ? $slider->content : '' ; ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Slider Image <span class="text-danger">(Dimension must be 420 x 420) *</span></label>
                                          <input type="file" class="form-control" name="image" id="image">
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                    <?php if (!empty($slider->image) && file_exists('assets/uploads/slider/'.$slider->image)) { ?>
                                      <img src="<?php echo base_url('assets/uploads/slider/'.$slider->image); ?>" alt="" class="img-thumbnail" id="upload_preview">
                                    <?php } else { ?>
                                      <img src="#" alt="" class="img-thumbnail" id="upload_preview" style="display:none;">
                                    <?php } ?>
                                  </div>
                                  <?php if (isset($slider->id)) { ?>
                                    <input type="hidden" name="uploaded_image" value="<?php echo (isset($slider->image)) ? $slider->image : '' ; ?>">
                                    <input type="hidden" name="id" id="id" value="<?php echo $slider->id; ?>">
                                  <?php } ?>
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

    <script>
        $(document).ready(function() {
          $('#addSliderForm').bootstrapValidator({
            fields: {
              heading: {
                validators: {
                  notEmpty: {
                    message: 'Slider Heading is required'
                  },
                  remote: {
                    type: 'POST',
                    message: 'Slider Heading already exists',
                    url: '<?php echo base_url('slider/check_exists'); ?>',
                    data: function(validator, $field, value) {
                      return {
                        id: validator.getFieldElements('id').val()
                      };
                    }
                  }
                }
              },
              content: {
                validators: {
                  notEmpty: {
                    message: 'Slider Content is required'
                  }
                }
              },
              image: {
                  validators: {
                      <?php if(!isset($slider->id)){ ?>
                        notEmpty: {
                          message: 'Slider Image is required'
                        },
                      <?php } ?>
                      regexp: {
                          regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                          message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                      }
                  }
              }
            }
          });
        });
    </script>

</body>

</html>
