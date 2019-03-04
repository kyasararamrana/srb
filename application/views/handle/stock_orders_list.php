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
                    Orders List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Orders List</li>
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
                                            <th>Stock Name</th>
                                            <th>Material Type</th>
                                            <th> Type</th>
                                            <th> Size</th>
                                            <th> Color</th>
                                            <th> GSM</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(isset($hanlde_list) && count($hanlde_list)>0){ ?>
									<?php $cnt=1;foreach($hanlde_list as $lis){ ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo isset($lis['stock_name'])?$lis['stock_name']:''; ?></td>
                                            <td><?php echo isset($lis['mtype'])?$lis['mtype']:''; ?></td>
                                            <td><?php echo isset($lis['type'])?$lis['type']:''; ?></td>
                                            <td><?php echo isset($lis['size'])?$lis['size']:''; ?></td>
                                            <td><?php echo isset($lis['color'])?$lis['color']:''; ?></td>
                                            <td><?php echo isset($lis['gsm'])?$lis['gsm']:''; ?></td>
                                            <td><input type="text" onkeyup="update_stock_qty(this.value,'<?php echo $lis['h_s_id']; ?>');" value="<?php echo isset($lis['quantity'])?$lis['quantity']:''; ?>"></td>
                                            <td class="valigntop">
                                                 <a href="<?php echo base_url('handle/deleteorderstock/'.base64_encode($lis['h_s_id'])); ?>" type="button" class="btn btn-danger mr-10 mb-5 confirmation"><i class="fa fa-trash-o"></i></a>
											</td>
                                        </tr>
									<?php $cnt++;} ?>
									<?php }else{ ?>
									<div>NO data</div>
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
	<div id="sucessmsg" style=""></div>
    <!-- ./wrapper -->
    <?php echo $scripts; ?>

    <script type="text/javascript">
	function update_stock_qty(val,id){
			if(val!='' && id!=''){
				jQuery.ajax({
   				url: "<?php echo base_url('handle/update_h_s_o_qty');?>",
   					data: {u_qty:val,h_id: id,},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						if(data.msg==1){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-succ"> Quantity successfully updated<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}else{
							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Technical problem will occurred . Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}
					}
   				});
			}else{
				alert('error will occured');
			}
		}
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