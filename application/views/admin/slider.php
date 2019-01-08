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
                    Add Sliders
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Slider</a></li>
                    <li class="active">Add Slide</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="addBannerForm" name="addBannerForm" action="<?php echo base_url('slider/insert'); ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="col-md-12">

                                        <div class="table-responsive">
                                            <table id="myTable" class=" table order-list">
                                                <thead>
                                                    <tr>
                                                        <th>Heading</th>
                                                        <th>Content</th>
                                                        <th>Image</th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="heading[]" placeholder="Heaading Name" class="form-control" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name="content[]" placeholder="Content" class="form-control" />
                                                        </td>
                                                        <td>
                                                            <input type="file" name="image[]" placeholder="Image" class="form-control" />
                                                        </td>
                                                        <td>
                                                            <a class="deleteRow"></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-md" id="addrow">Add Row</button>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-md btn-primary">Add</button>
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

            $("#addrow").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" class="form-control" placeholder="Heading Name" name="heading[]"/></td>';
                cols += '<td><input type="text" class="form-control" placeholder="Content" name="content[]"/></td>';
                cols += '<td><input type="file" class="form-control" placeholder="Image" name="image[]"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                counter++;
            });

            $("table.order-list").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>

</body>

</html>
