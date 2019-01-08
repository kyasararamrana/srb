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
                    Add Banner
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Banner</a></li>
                    <li class="active">Add Banner</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="bannerForm" name="bannerForm" action="<?php if (isset($banner->id)) { echo base_url('banner/update'); } else { echo base_url('banner/insert'); } ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Banner Name</label>
                                          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Banner Name" value="<?php echo (isset($banner->name)) ? $banner->name : '' ; ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Banner tag line</label>
                                          <input type="text" class="form-control" name="tag_line" id="tag_line" placeholder="Enter Banner Tag Line" value="<?php echo (isset($banner->tag_line)) ? $banner->tag_line : '' ; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload Banner Image <span class="text-danger">(Dimension must be 780 x 438)</span></label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <?php if (!empty($banner->image) && file_exists('assets/uploads/banner/'.$banner->image)) { ?>
                                        <img src="<?php echo base_url('assets/uploads/banner/'.$banner->image); ?>" alt="" class="img-thumbnail" id="upload_preview">
                                      <?php } else { ?>
                                        <img src="#" alt="" class="img-thumbnail" id="upload_preview" style="display:none;">
                                      <?php } ?>
                                    </div>
                                    <?php if (isset($banner->id)) { ?>
                                      <input type="hidden" name="id" id="id" value="<?php echo $banner->id; ?>">
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

    <script type="text/javascript">
      $(document).ready(function(){
        $('#bannerForm').bootstrapValidator({
          fields: {
            name: {
              validators: {
                notEmpty: {
                  message: 'Banner Name is required'
                },
                remote: {
                  type: 'POST',
                  message: 'Banner Name already exists',
                  url: '<?php echo base_url('banner/check_exists'); ?>',
                  data: function(validator, $field, value) {
                    return {
                      id: validator.getFieldElements('id').val()
                    };
                  }
                }
              }
            },
            image: {
                validators: {
                    <?php if(!isset($banner->id)){ ?>
                      notEmpty: {
                        message: 'Image is required'
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
