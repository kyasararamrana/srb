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
        <h1>Stitching List</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li><a href="#">Stitching</a></li>
          <li class="active">Stitching List</li>
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
                      <th>Stitching Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (isset($stitching_list) && count($stitching_list)>0) { ?>
                      <?php $sno = 1; ?>
                      <?php foreach($stitching_list as $list) { ?>
                        <tr>
                          <td><?php echo $sno; ?></td>
                          <td><?php echo $list['stitching_type']; ?></td>
                          <td>
                            <a href="<?php echo base_url('stitching/edit/'.base64_encode($list['i_s_t_id'])); ?>" type="button" class="btn btn-info mr-10"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url('stitching/delete/'.base64_encode($list['i_s_t_id'])); ?>" type="button" class="btn btn-danger mr-10 confirmation"><i class="fa fa-trash-o"></i></a>
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
