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
                    Add Damage Stock
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Stocks</li>
                    <li class="active">Add Damage Stock</li>
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
                                            <table id="myTable" class="table table-list">
                                                <thead>
                                                    <tr>
                                                        <th>Select Vendor</th>
                                                        <th>Order Id</th>
                                                        <th>Stock Name</th>
                                                        <th>Size</th>
                                                        <th>Thickness</th>
                                                        <th>Color</th>
                                                        <th>Damaged No.of Pieces</th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <select name="vendor" class="form-control">
                                                                <option value="0" selected disabled>Select</option>
                                                                <option value="1">Option name</option>
                                                                <option value="2">Option name</option>
                                                                <option value="3">Option name</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="orderid" placeholder="Order Id" class="form-control"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="sname" placeholder="Name" class="form-control"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="size" placeholder="Enter Size" class="form-control"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="thickness" placeholder="Enter Thickness" class="form-control" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name="color" placeholder="Enter Color" class="form-control" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pieces" placeholder="Enter Pieces" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-md" id="addRow">Add Row</button>
                                        </div>
                                        <hr class="mb-10">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-md btn-success">Add</button>
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
            var counter = 0;

            $("#addRow").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="vendor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Name" name="sname' + counter + '"/></td>';
                
                cols += '<td><input type="text" class="form-control" placeholder="Order Id" name="orderid' + counter + '"/></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Size" name="size' + counter + '"/></td>';

                cols += '<td><input type="email" class="form-control" placeholder="Enter Thickness" name="thickness' + counter + '"/></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Color" name="color' + counter + '"/></td>';
                
                cols += '<td><input type="text" class="form-control" placeholder="Enter Pieces" name="pieces' + counter + '"/></td>';

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