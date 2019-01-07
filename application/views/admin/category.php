<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sri Raja Bags</title>
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
                    Add Category
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Category</a></li>
                    <li class="active">Add Category</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form method="post" id="categoryForm" action="<?php if (isset($category->id)) { echo base_url('category/update'); } else { echo base_url('category/insert'); } ?>"  enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input id="name" type="text" class="form-control" name="name" placeholder="Enter Category Name" value="<?php echo isset($category->name) ? $category->name : ''; ?>">
                                        </div>
                                    </div>
                                    <?php if (isset($category->id)) { ?>
                                      <input type="hidden" name="id" value="<?php echo $category->id; ?>">
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
