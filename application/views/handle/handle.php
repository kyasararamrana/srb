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
                <h1> Add Handle </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Handles</li>
                    <li class="active">Add Handle</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="<?php if (isset($handle->id)) { echo base_url('handle/update'); } else {  echo base_url('handle/insert'); } ?>" method="post">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                          <table id="" class="table table-list-2">
                                            <thead>
                                              <tr>
                                                <th>Type</th>
                                                <th>Material</th>
                                                <th>Size</th>
                                                <th>Color</th>
                                                <th>GSM</th>
                                                <th>Quantity</th>
                                                <th>&nbsp;</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>
                                                  <input type="text" class="form-control" placeholder="Enter Type" name="type[0]" value="<?php echo (isset($handle->type)) ? $handle->type : '' ; ?>">
                                                </td>
                                                <td>
                                                  <input type="text" class="form-control" placeholder="Enter Material" name="material[0]" value="<?php echo (isset($handle->material)) ? $handle->material : '' ; ?>">
                                                </td>
                                                <td>
                                                  <input type="text" class="form-control" placeholder="Enter Size" name="size[0]" value="<?php echo (isset($handle->size)) ? $handle->size : '' ; ?>">
                                                </td>
                                                <td>
                                                  <input type="text" class="form-control" placeholder="Enter Color" name="color[0]" value="<?php echo (isset($handle->color)) ? $handle->color : '' ; ?>">
                                                </td>
                                                <td>
                                                  <input type="text" class="form-control" placeholder="Enter GSM" name="gsm[0]" value="<?php echo (isset($handle->gsm)) ? $handle->gsm : '' ; ?>">
                                                </td>
                                                <td>
                                                  <input type="text" name="quantity[0]" class="form-control" placeholder="Enter Quantity" value="<?php echo (isset($handle->quantity)) ? $handle->quantity : '' ;?>"/>
                                                </td>
                                                <td>&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                            <?php if (isset($handle->id)) { ?>
                                              <input type="hidden" name="id" value="<?php echo (isset($handle->id)) ? $handle->id : '' ; ?>">
                                            <?php } else { ?>
                                              <button type="button" class="btn btn-md" id="addRow2">Add Row</button>
                                            <?php } ?>
                                            <hr class="mb-10">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-md btn-success">Add</button>
                                            </div>
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
            $("#addRow2").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";
                cols += '<td><input type="text" class="form-control" placeholder="Enter Type" name="type['+ counter +']"/></td>';
                cols += '<td><input type="text" class="form-control" placeholder="Enter Material" name="material['+ counter +']"/></td>';
                cols += '<td><input type="text" class="form-control" placeholder="Enter Size" name="size['+ counter +']"/></td>';
                cols += '<td><input type="text" class="form-control" placeholder="Enter Color" name="color['+ counter +']"/></td>';
                cols += '<td><input type="text" class="form-control" placeholder="Enter GSM" name="gsm['+ counter +']"/></td>';
                cols += '<td><input type="text" class="form-control" placeholder="Enter Quantity" name="quantity['+ counter +']' + counter + '"/></td>';
                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-2").append(newRow);
                counter++;
            });

            $("table.table-list-2").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>

</body>

</html>
