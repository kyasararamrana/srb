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
                    Quality List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Quality</a></li>
                    <li class="active">Quality List</li>
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
                                    <th>Name</th>
                                    <!-- <th>Created On</th> -->
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php  if(count($qualities) > 0){ ?>
                                    <?php $count = 1; ?>
                                    <?php foreach($qualities as $q): ?>
                                      <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $q->name; ?></td>
                                        <!-- <td><?php echo date('d-m-Y H:i:s',strtotime($c->created_on)); ?></td> -->
                                        <td>
                                          <?php if ($q->status &&  ($q->status == '1' && $q->status != '0')) { ?>
                                            <a href="<?php echo base_url('quality/status/'.$q->status.'/'.$q->id); ?>">Active</a>
                                          <?php } else { ?>
                                            <a href="<?php echo base_url('quality/status/'.$q->status.'/'.$q->id); ?>">Inactive</a>
                                          <?php } ?>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url('quality/edit/'.$q->id); ?>" type="button" class="btn btn-info mr-10"><i class="fa fa-edit"></i></a>
                                          <a href="<?php echo base_url('quality/delete/'.$q->id); ?>" type="button" class="btn btn-danger mr-10 confirmation"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                      </tr>
                                      <?php $count++; ?>
                                    <?php endforeach; ?>
                                  <?php } else { ?>
                                    <tr>
                                      <td colspan="4" class="text-center">No records found</td>
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
      //confirm message
      $(document).ready(function(){
          $('.confirmation').on('click', function () {
              return confirm('Are you sure of deleting quality?');
          });
      });
      //datatables
      $(document).ready(function() {
          $('#example').DataTable();
      });
    </script>

</body>

</html>
