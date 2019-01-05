<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SRB | <?php echo $pageTitle; ?></title>
    <?php echo $links; ?>
  </head>
  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <?php echo $header; ?>
        <?php echo $sidebar; ?>
        <div class="main-content">
          <section class="section">
            <h1 class="section-header">
              <div>Category</div>
            </h1>
            <div class="section-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                      <div class="row mx-auto">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                          <form method="post" id="categoryForm" action="<?php if (isset($category->id)) { echo base_url('category/update'); } else { echo base_url('category/insert'); } ?>"  enctype="multipart/form-data">
                            <div class="form-group">
                              <label>Category Name</label>
                              <input id="name" type="text" class="form-control" name="name" placeholder="Enter Category Name" value="<?php echo isset($category->name) ? $category->name : ''; ?>">
                            </div>
                            <?php if (isset($category->id)) { ?>
                              <input type="hidden" name="id" value="<?php echo $category->id; ?>">
                            <?php } ?>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
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
