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
                                            <th>Vendor Name</th>
                                            <th>Material Type</th>
                                            <th> Size</th>
                                            <th> Thickness</th>
                                            <th> Color</th>
                                            <th> Pieces</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(isset($material_order_list) && count($material_order_list)>0){ ?>
									<?php $cnt=1;foreach($material_order_list as $lis){ ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo isset($lis['m_v_id'])?$lis['m_v_id']:''; ?></td>
                                            <td><?php echo isset($lis['m_stcock_name'])?$lis['m_stcock_name']:''; ?></td>
                                            <td><?php echo isset($lis['m_size'])?$lis['m_size']:''; ?></td>
                                            <td><?php echo isset($lis['m_thinkness'])?$lis['m_thinkness']:''; ?></td>
                                            <td><?php echo isset($lis['m_color'])?$lis['m_color']:''; ?></td>
                                            <td><?php echo isset($lis['m_quantity'])?$lis['m_quantity']:''; ?></td>
                                             <td><?php if($lis['m_status']==0){ echo "Pending";}else if($lis['m_status']==1){ echo "Accept";}else if($lis['m_status']==2){ echo "reject"; } ?></td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" style="right:0;left:auto;">
                                                        <li>
                                                            <a href="<?php echo base_url('inventory/orderconfirmation/'.base64_encode($lis['i_or_id']).'/'.base64_encode(1));?>"><i class="fa fa-check-circle confirmation"></i>Accept Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url('inventory/orderconfirmation/'.base64_encode($lis['i_or_id']).'/'.base64_encode(2));?>"><i class="fa fa-close confirmation"></i>Reject Order</a>
                                                        </li>
                                                    </ul>
                                                </div>
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