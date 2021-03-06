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
                    Block Charges
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Block Charges</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="<?php echo base_url('block/addmim_qty_post'); ?>" method="post">
                                <div class="box-body">
                                    <div class="col-md-12">
									 <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Bag type</label>
                                                  <select name="b_type"  name="b_type" class="form-control" required>
                                                    <option value="">Select</option>
                                                    <?php if (count($bags_list) > 0) { ?>
                                                      <?php foreach ($bags_list as $list) { ?>
                                                        <option value="<?php echo $list['id']; ?>"><?php echo  $list['bag_type']; ?></option>
                                                      <?php } ?>
                                                    <?php } ?>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-list">
                                                <thead>
                                                    <tr>
                                                        <th>Same design/ different design</th>
                                                        <th>Color</th>
                                                        <th>Regular size</th>
                                                        <th>Irregular size</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-3">
                                                            <input type="text" name="design[]" placeholder="Same design/ different design" class="form-control" required>
                                                        </td>
														<td class="col-md-3">
                                                            <input type="text" name="color[]" placeholder="color" class="form-control" required>
                                                        </td>
														<td class="col-md-3">
                                                            <input type="text" name="r_size[]" placeholder="Regular size" class="form-control" required>
                                                        </td>
														<td class="col-md-3">
                                                            <input type="text" name="i_size[]" placeholder="Irregular size" class="form-control" required>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-md" id="addRow">Add Row</button>
                                        </div>
                                        <hr class="mb-10">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-md btn-success btn-flat">Submit</button>
                                        </div>
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
            var counter = 1;
            $("#addRow").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";
                cols += '<td><input type="text" name="design[]" placeholder="Same design/ different design" class="form-control" required></td>';
                cols += '<td><input type="text" name="color[]" placeholder="color" class="form-control" required></td>';
                cols += '<td><input type="text" name="r_size[]" placeholder="Regular size" class="form-control" required></td>';
                cols += '<td><input type="text" name="i_size[]" placeholder="Irregular size" class="form-control" required></td>';
                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list").append(newRow);
                counter++;
            });
            $("table.table-list").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>
</body>
</html>
