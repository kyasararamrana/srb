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
                                            <table id="" class="table table-list-4">
                                                <thead>
                                                    <tr>
                                                        <th>Stock Name</th>
                                                        <th>Material Type</th>
                                                        <th>Quality</th>
                                                        <th>Type</th>
                                                        <th>Layout</th>
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
                                                            <select name="bsname" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="bmtype" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="bquality" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="btype" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="blayout" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="bsize" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="bcolor" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="bgsm" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="bquantity" placeholder="Enter Quantity" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-md" id="addRow4">Add Row</button>
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

    <!-- Bag Section -->
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow4").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="bsname' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="bmtype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="bquality' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="btype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="blayout' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="bsize' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="bcolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><select class="form-control" name="bgsm' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Quantity" name="bquantity' + counter + '"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-4").append(newRow);
                counter++;
            });

            $("table.table-list-4").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>

</body>

</html>