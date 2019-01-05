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
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Categories List</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="table table-striped">
                          <thead>
                            <tr>
                              <th>S.No</th>
                              <th>Name</th>
                              <th>Created On</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php  if(count($categories) > 0){ ?>
                              <?php $count = 1; ?>
                              <?php foreach($categories as $c): ?>
                              <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $c->name; ?></td>
                                <td><?php echo date('d-m-Y H:i:s',strtotime($c->created_on)); ?></td>
                                <td>
                                  <?php if ($c->status &&  ($c->status == '1' && $c->status != '0')) { ?>
                                    <a href="<?php echo base_url('category/status/'.$c->status.'/'.$c->id); ?>">Active</a>
                                  <?php } else { ?>
                                    <a href="<?php echo base_url('category/status/'.$c->status.'/'.$c->id); ?>">Inactive</a>
                                    <?php } ?>
                                </td>
                                <td>
                                  <a href="<?php echo base_url('category/edit/'.$c->id); ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" data-original-title="Edit"><i class="ion ion-edit"></i></a>
                                  <a href="<?php echo base_url('category/delete/'.$c->id); ?>" class="btn btn-danger btn-action confirmation" data-toggle="tooltip" data-original-title="Delete"><i class="ion ion-trash-b "></i></a>
                                </td>
                              </tr>
                              <?php $count++; ?>
                            <?php endforeach;} ?>
                          </tbody>
                        </table>
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
    //confirm message
    $(document).ready(function(){
        $('.confirmation').on('click', function () {
            return confirm('Are you sure of deleting category?');
        });
    });
    //datatables
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
  </body>
</html>
