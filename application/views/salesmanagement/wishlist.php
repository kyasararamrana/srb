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
                    Wishlist
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Wishlist</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-body">
                                <table id="" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">Select</th>
                                            <th>Bag Type</th>
                                            <th>Bag Size</th>
                                            <th>Handle Type</th>
                                            <th>Handle Size</th>
                                            <th>Sidepatty Type</th>
                                            <th>Sidepatty Size</th>
                                            <th>Zip Type</th>
                                            <th>Zip Size</th>
                                            <th>Stitching Type</th>
                                            <th>Quantity</th>
                                            <th>Total Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><input type="checkbox"></td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" style="right:0;left:auto;">
                                                        <li>
                                                            <a href="<?php echo base_url('salesmanagement/wishlistItemView'); ?>"><i class="fa fa-eye"></i>View</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url('salesmanagement/editWishlistItem'); ?>"><i class="fa fa-edit"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><input type="checkbox"></td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td>xxxxxx</td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" style="right:0;left:auto;">
                                                        <li>
                                                            <a href="<?php echo base_url('salesmanagement/wishlistItemView'); ?>"><i class="fa fa-eye"></i>View</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url('salesmanagement/editWishlistItem'); ?>"><i class="fa fa-edit"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="clearfix"><br><br></div>
                                <div class="text-right">
                                    <a href="" class="btn btn-danger btn-sm mr-10"><i class="fa fa-trash mr-5"></i>Delete</a>
                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart mr-5"></i>Buy Now</a>
                                </div>
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
                return confirm('Are you sure of deleting category?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>