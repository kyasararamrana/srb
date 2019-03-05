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
            Bag Type List
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Bag Type</a></li>
            <li class="active">Bag Type List</li>
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
                        <th>Bag type</th>
                        <th>Other charges</th>
                        <th>Printing charges</th>
                        <th>Block charges</th>
                        <th>Additional GSM</th>
                        <th>Percentage</th>
                        <th>Cost Per kg</th>
                        <!-- <th>Action</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (count($bagtypes) > 0) { ?>
                        <?php $sno = 1; ?>
                        <?php foreach($bagtypes as $bagtype) { ?>
                          <tr>
                            <td><?php echo $sno; ?></td>
                            <td><?php echo $bagtype->bag_type; ?></td>
                            <td><?php echo $bagtype->other_charges; ?></td>
                            <td><?php echo $bagtype->printing_cost; ?></td>
                            <td><?php echo $bagtype->block_charges; ?></td>
                            <td><?php echo $bagtype->additional_gsm; ?></td>
                            <td><?php echo $bagtype->percentage; ?></td>
                            <td><?php echo $bagtype->cost_per_kg; ?></td>
                            <!-- <td>
                            <a href="<?php echo base_url('superadmin/editrole/'.$bagtype->id); ?>" type="button" class="btn btn-info mr-10"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url('superadmin/delete/'.$bagtype->id); ?>" type="button" class="btn btn-danger mr-10 confirmation"><i class="fa fa-trash-o"></i></a>
                          </td> -->
                        </tr>
                        <?php $sno++; ?>
                      <?php } ?>
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
    //confirm message
    $(document).ready(function() {
      $('.confirmation').on('click', function() {
        return confirm('Are you sure of deleting role?');
      });
    });
    //datatables
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  </body>
</html>
