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
                    Bag Type
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Bag Type</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="<?php echo base_url('bagtype/insert'); ?>" method="post">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-list">
                                                <thead>
                                                    <tr>
                                                        <th>Bag Type</th>
                                                        <th>&nbsp;</th>
                                                        <th>Other Charges</th>
                                                        <th>&nbsp;</th>
                                                        <th>Printing Charges</th>
                                                        <th>&nbsp;</th>
                                                        <th>Block Charges</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-3">
                                                            <input type="text" name="bagtype[0]" placeholder="Bag Type" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td class="col-md-3">
                                                            <input type="text" name="othercharges[0]" placeholder="Other changes" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td class="col-md-3">
                                                            <input type="text" name="printingcost[0]" placeholder="Printing Charges" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td class="col-md-3">
                                                            <input type="text" name="blockcharges[0]" placeholder="Block Charges" class="form-control" />
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
                cols += '<td><input type="text" class="form-control" placeholder="Bag Type" name="bagtype[' + counter + ']"/></td>';
                cols += '<td>&nbsp;</td>';
                cols += '<td><input type="text" class="form-control" placeholder="Other Charges" name="othercharges[' + counter + ']"/></td>';
                cols += '<td>&nbsp;</td>';
                cols += '<td><input type="text" class="form-control" placeholder="Printing Charges" name="printingcost[' + counter + ']"/></td>';
                cols += '<td>&nbsp;</td>';
                cols += '<td><input type="text" class="form-control" placeholder="Block Charges" name="blockcharges[' + counter + ']"/></td>';
                cols += '<td>&nbsp;</td>';
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
