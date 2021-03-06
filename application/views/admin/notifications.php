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
                    Profile
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <strong class="box-title">Notifications</strong>
                             
                            </div>
                            <div class="box-body">
                                <div class="row">
                                <div class="col-md-12">
								<?php if(isset($notification) && count($notification)>0){ ?>
								<?php foreach($notification as $lis){ ?>
									<div class="alert  alert-dismissible" style="background-color:#ddd;">
										   <div >
												<h4 class="pull-left"><i class="icon fa fa-info"></i> Alert!</h4>
												<span class="pull-right">Date :<?php echo isset($lis['created_at'])?$lis['created_at']:''; ?></span>
											</div>
											<div class="clearfix" style="border-bottom:1px solid #fff;">&nbsp;</div>
										   <p style="margin-top:8px;"> <?php echo isset($lis['text'])?$lis['text']:''; ?></p>
									</div>
								<?php } ?>
								<?php }else{ ?>
								<div>NO data</div>
								<?php } ?>
									
                                </div>
								
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

</body>

	<script>
	$('#unread_cnt').empty();
	$('#unread_cnt').append('<?php echo isset($read_cnt['cnt'])?$read_cnt['cnt']:''; ?>');
	</script>
</html>
