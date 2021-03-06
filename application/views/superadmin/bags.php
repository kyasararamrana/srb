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
        <h1>Bag List</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li><a href="#">Bags</a></li>
          <li class="active">Bag List</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Material Type</th>
                      <th>Quality</th>
                      <th>Bag Type</th>
                      <th>Layout</th>
                      <th>Bag Size</th>
                      <th>Bag Color</th>
                      <th>Bag GSM</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (count($bags) > 0) { ?>
                      <?php $sno = 1; ?>
                      <?php foreach($bags as $bag) { ?>
                        <tr>
                          <td><?php echo $sno; ?></td>
                          <td><?php echo $bag->material_type; ?></td>
                          <td><?php echo $bag->quality; ?></td>
                          <td><?php echo $bag->bag_type; ?></td>
                          <td><?php echo $bag->bag_layout; ?></td>
                          <td><?php echo $bag->bag_size; ?></td>
                          <td><?php echo $bag->bag_color; ?></td>
                          <td><?php echo $bag->bag_gsm; ?></td>
                          <td>
                            <a href="<?php echo base_url('edit/'.$bag->id); ?>" type="button" class="btn btn-primary mr-10"><i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('bag/edit/'.$bag->id); ?>" type="button" class="btn btn-info mr-10"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url('bag/delete/'.$bag->id); ?>" type="button" class="btn btn-danger mr-10 confirmation"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <?php $sno++; ?>
                      <?php } ?>
                    <?php } else { ?>
                      <tr>
                        <td colspan="9" class="text-center">No records found</td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
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
      //confirm message
      $('.confirmation').on('click', function() {
        return confirm('Are you sure of deleting bag?');
      });
      //datatables
      $('#example').DataTable();
    });
  </script>
</body>
</html>
