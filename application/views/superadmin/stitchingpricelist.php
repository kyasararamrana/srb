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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/buttons.dataTables.min.css'); ?>">
	<style>
tfoot {
     display: table-header-group;
}
</style>
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
                    Prices List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Bags</a></li>
                    <li class="active">Prices List</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <br>
                            <div class="box-body table table-responsive">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
											 <th class="select-filter">Material</th>
											 <th class="select-filter">Quality</th>
											<th class="select-filter">Sidepatty GSM</th>
											<th class="select-filter">Stitching Type</th>
											<th class="select-filter">Printing Style</th>
											<th class="select-filter">Printing Color</th>
											<th>Bag Type</th>
											<th>Bag Layout</th>
											<th class="select-filter">Bag GSM</th>
											<th>Sidepatty width</th>
											<th>Finishing size</th>
											<th>Price</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
									<tfoot>
                                        <tr>
                                            <th>&nbsp;</th>
											<th>Material</th>
											<th>Quality</th>
											<th>Sidepatty GSM</th>
											<th>Stitching Type</th>
											<th>Printing Style</th>
											<th>Printing Color</th>
											 <th>&nbsp;</th>
											 <th>&nbsp;</th>
											<th>Bag GSM</th>
											 <th>&nbsp;</th>
											 <th>&nbsp;</th>
											 <th>&nbsp;</th>
											 <th>&nbsp;</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php if(isset($price) && count($price)>0){ ?>
                                        <?php $sno = 1; ?>
                                        <?php foreach ($price as $p) { ?>
                                          <tr>
                                              <td><?php echo $sno; ?></td>
											  
                                              <td><?php echo $p->material; ?></td>
                                              <td><?php echo $p->qname; ?></td>
                                              <td><?php echo $p->sidepatty_gsm; ?></td>
                                              <td><?php echo $p->stitching_type; ?></td>
                                              <td><?php echo $p->printing_style; ?></td>
                                              <td><?php echo $p->printing_color_type; ?></td>
                                              <td><?php echo $p->bag_type; ?></td>
                                              <td><?php echo $p->bag_layout; ?></td>
                                              <td><?php echo $p->bag_gsm; ?></td>
                                              <td><?php echo $p->sidesize; ?></td>
                                              <td><?php echo $p->finishing_size; ?></td>
                                              <td><?php echo $p->price; ?></td>
                                              <td>
                                                  <a href="<?php echo base_url('stitching/editprice/'.$p->id); ?>" type="button" class="btn btn-info mr-10"><i class="fa fa-edit"></i></a>
                                                  <a href="<?php echo base_url('stitching/deleteprice/'.$p->id); ?>" type="button" class="btn btn-danger mr-10 confirmation"><i class="fa fa-trash-o"></i></a>
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
    <script src="<?php echo base_url('assets/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/buttons.print.min.js'); ?>"></script>
    <script type="text/javascript">
        //confirm message
        $(document).ready(function() {
            $('.confirmation').on('click', function() {
                return confirm('Are you sure of deleting color?');
            });
        });
        
		$(document).ready(function() {
    $('#example').DataTable( {
		dom: 'Bfrtip',
           buttons: ['print'],
        initComplete: function () {
            this.api().columns('.select-filter').every( function () {
                var column = this;
                var select = $('<select><option value="">Select</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
    </script>

</body>

</html>
