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
                    Add Stock
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Stocks</li>
                    <li class="active">Add Stock</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="" method="">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="" class="table table-list-3">
                                                <thead>
                                                    <tr>
                                                        <th>Stock Name</th>
                                                        <th>Type</th>
                                                        <th>Size</th>
                                                        <th>Color</th>
                                                        <th>GSM</th>
                                                        <th>Printing</th>
                                                        <th>Printing Color</th>
                                                        <th>Quantity</th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <select name="ssname" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="stype" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="ssize" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="scolor" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="sgsm" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="sprinting" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="sprintcolor" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="squantity" placeholder="Enter Quantity" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-md" id="addRow3">Add Row</button>
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

    <!-- Sidepatty Section -->
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow3").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="ssname' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="stype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="ssize' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="scolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="sgsm' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="sprinting' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="sprintcolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Quantity" name="squantity' + counter + '"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-3").append(newRow);
                counter++;
            });

            $("table.table-list-3").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>

</body>

</html>