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
                    Edit Vendor Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Vendors</li>
                    <li><a href="<?php echo base_url('vendor/lists'); ?>">Vendors List</a></li>
                    <li class="active">Edit Vendor Details</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="addVendorForm" name="addVendorForm" action="<?php echo base_url('vendor/addpost'); ?>" method="POST">
                                <input type="hidden"  name="v_id" id="v_id" value="<?php echo isset($v_details['v_id'])?$v_details['v_id']:''; ?>">
								<div class="box-body">
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vendor Name</label>
                                            <input type="text" class="form-control" name="v_name" id="v_name" value="<?php echo isset($v_details['v_name'])?$v_details['v_name']:''; ?>" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Primary Mobile Number</label>
                                            <input type="text" class="form-control" name="v_p_mobile" id="v_p_mobile" value="<?php echo isset($v_details['v_p_mobile'])?$v_details['v_p_mobile']:''; ?>" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
								</div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Secondary Mobile Number</label>
                                            <input type="text" class="form-control" name="v_s_mobile" id="v_s_mobile" value="<?php echo isset($v_details['v_s_mobile'])?$v_details['v_s_mobile']:''; ?>" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Landline Number</label>
                                            <input type="text" class="form-control" name="v_landline_no" id="v_landline_no" value="<?php echo isset($v_details['v_landline_no'])?$v_details['v_landline_no']:''; ?>" placeholder="Enter Landline Number">
                                        </div>
                                    </div>
                                  </div>
								  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fax No</label>
                                            <input type="text" class="form-control" name="v_fax_no" id="v_fax_no" value="<?php echo isset($v_details['v_fax_no'])?$v_details['v_fax_no']:''; ?>" placeholder="Enter Fax Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Primary Email Id</label>
                                            <input type="text" class="form-control" name="v_p_email" id="v_p_email" value="<?php echo isset($v_details['v_p_email'])?$v_details['v_p_email']:''; ?>" placeholder="Enter Mail Id">
                                        </div>
                                    </div>
                                  </div>
								  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Secondary Email Id</label>
                                            <input type="text" class="form-control" name="v_s_email" id="v_s_email" value="<?php echo isset($v_details['v_s_email'])?$v_details['v_s_email']:''; ?>" placeholder="Enter Enter Mail Id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="v_address" id="v_address" value="<?php echo isset($v_details['v_address'])?$v_details['v_address']:''; ?>" placeholder="Enter Address">
                                        </div>
                                    </div>
								 </div>
								 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="v_city" id="v_city" value="<?php echo isset($v_details['v_city'])?$v_details['v_city']:''; ?>" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>District</label>
                                            <input type="text" class="form-control" name="v_district" id="v_district" value="<?php echo isset($v_details['v_district'])?$v_details['v_district']:''; ?>" placeholder="Enter District">
                                        </div>
                                    </div>
								</div>
									<?php $states = array ('Andhra Pradesh' => 'Andhra Pradesh', 'Arunachal Pradesh' => 'Arunachal Pradesh', 'Assam' => 'Assam', 'Bihar' => 'Bihar', 'Chhattisgarh' => 'Chhattisgarh', 'Goa' => 'Goa', 'Gujarat' => 'Gujarat', 'Haryana' => 'Haryana', 'Himachal Pradesh' => 'Himachal Pradesh', 'Jammu & Kashmir' => 'Jammu & Kashmir', 'Jharkhand' => 'Jharkhand', 'Karnataka' => 'Karnataka', 'Kerala' => 'Kerala', 'Madhya Pradesh' => 'Madhya Pradesh', 'Maharashtra' => 'Maharashtra', 'Manipur' => 'Manipur', 'Meghalaya' => 'Meghalaya', 'Mizoram' => 'Mizoram', 'Nagaland' => 'Nagaland', 'Odisha' => 'Odisha', 'Punjab' => 'Punjab', 'Rajasthan' => 'Rajasthan', 'Sikkim' => 'Sikkim', 'Tamil Nadu' => 'Tamil Nadu', 'Telangana' => 'Telangana', 'Tripura' => 'Tripura', 'Uttarakhand' => 'Uttarakhand','Uttar Pradesh' => 'Uttar Pradesh', 'West Bengal' => 'West Bengal', 'Andaman & Nicobar' => 'Andaman & Nicobar', 'Chandigarh' => 'Chandigarh', 'Dadra and Nagar Haveli' => 'Dadra and Nagar Haveli', 'Daman & Diu' => 'Daman & Diu', 'Delhi' => 'Delhi', 'Lakshadweep' => 'Lakshadweep', 'Puducherry' => 'Puducherry'); ?>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" name="v_state" id="v_state">
                                                 <option value = "">Select State</option>
												<?php foreach($states as $key=>$state):
														if(isset($v_details['v_state']) && $v_details['v_state'] == $state):
														$selected ='selected=selected';
														else : 
														$selected = '';
														endif;
													 ?>
													<option value = "<?php echo $state?>" <?php echo $selected;?> ><?php echo $state?></option>
												<?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Zipcode</label>
                                            <input type="text" class="form-control" name="v_zipcode" id="v_zipcode" value="<?php echo isset($v_details['v_zipcode'])?$v_details['v_zipcode']:''; ?>" placeholder="Enter Zip Code">
                                        </div>
                                    </div>
                                  </div>
								  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bank Account Number</label>
                                            <input type="text" class="form-control" name="v_bank_acc_no" id="v_bank_acc_no" value="<?php echo isset($v_details['v_bank_acc_no'])?$v_details['v_bank_acc_no']:''; ?>" placeholder="Enter Bank Account Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bank Account Holder Name</label>
                                            <input type="text" class="form-control" name="v_bank_hold_name" id="v_bank_hold_name" value="<?php echo isset($v_details['v_bank_hold_name'])?$v_details['v_bank_hold_name']:''; ?>" placeholder="Enter Bank Account Holder Name">
                                        </div>
                                    </div>
                                  </div>
								  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>IFSC Code</label>
                                            <input type="text" class="form-control" name="v_ifsc_code" id="v_ifsc_code" value="<?php echo isset($v_details['v_ifsc_code'])?$v_details['v_ifsc_code']:''; ?>" placeholder="Enter IFSC Code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Aadhar Number</label>
                                            <input type="text" class="form-control" name="v_aadhar_no" id="v_aadhar_no" value="<?php echo isset($v_details['v_aadhar_no'])?$v_details['v_aadhar_no']:''; ?>" placeholder="Enter Aadhar Number">
                                        </div>
                                    </div>
                                  </div>
								  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GST Number</label>
                                            <input type="text" class="form-control" name="v_gst_no" id="v_gst_no" value="<?php echo isset($v_details['v_gst_no'])?$v_details['v_gst_no']:''; ?>" placeholder="Enter GST Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Others</label>
                                            <input type="text" class="form-control" name="v_others" id="v_others" value="<?php echo isset($v_details['v_others'])?$v_details['v_others']:''; ?>" placeholder="Enter here..">
                                        </div>
                                    </div>
                                   </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
        //Date picker
        $(function () {
            $('#datepicker').datepicker({
              autoclose: true
            });
            $('#datepicker1').datepicker({
              autoclose: true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#addVendorForm').bootstrapValidator({
                fields: {
                    v_name: {
                        validators: {
							notEmpty: {
								message: 'Name is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9. ]+$/,
							message: 'Name can only consist of alphanumeric, space and dot'
							}
						}
                    },
                    v_p_mobile: {
                         validators: {
								notEmpty: {
									message: 'Primary Mobile Number is required'
								},
								regexp: {
								regexp:  /^[0-9]{10}$/,
								message:'Primary Mobile Number must be 0 to 10 digits'
								}
							
							}
                    }, v_s_mobile: {
                         validators: {
								notEmpty: {
									message: 'Secondary Mobile Number is required'
								},
								regexp: {
								regexp:  /^[0-9]{10}$/,
								message:'Secondary Mobile Number must be 0 to 10 digits'
								}
							
							}
                    },v_landline_no: {
                         validators: {
								notEmpty: {
									message: 'Landline Number is required'
								},
								regexp: {
								regexp:  /^[0-9]{10}$/,
								message:'Landline Number must be 8 to 14 digits'
								}
							
							}
                    },v_fax_no: {
                         validators: {
								notEmpty: {
									message: 'Fax No is required'
								}
							
							}
                    },v_p_email: {
                         validators: {
							notEmpty: {
								message: 'Primary Email Id is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
							message: 'Please enter a valid email address. For example johndoe@domain.com.'
							}
						}
                    },v_s_email: {
                         validators: {
							notEmpty: {
								message: 'Secondary Email Id is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
							message: 'Please enter a valid email address. For example johndoe@domain.com.'
							}
						}
                    },v_address: {
                         validators: {
							notEmpty: {
								message: 'Address is required'
							},
							regexp: {
							regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
							message:'Address wont allow <> [] = % '
							}
						}
                    },v_city: {
                         validators: {
							notEmpty: {
								message: 'City is required'
							},
							regexp: {
								regexp: /^[a-zA-Z ]+$/,
								message: 'City can only consist of alphabets and Space'
							}
						}
                    },v_district: {
                         validators: {
							notEmpty: {
								message: 'District is required'
							},
							regexp: {
								regexp: /^[a-zA-Z ]+$/,
								message: 'District can only consist of alphabets and Space'
							}
						}
                    },v_state: {
                         validators: {
							notEmpty: {
								message: 'State is required'
							}
						}
                    },v_zipcode: {
                         validators: {
							notEmpty: {
								message: 'Zipcode is required'
							},
							regexp: {
							regexp: /^[0-9]{5,7}$/,
							message: 'Pin code  must be  5 to 7 characters'
							}
						}
                    },v_bank_acc_no: {
						validators: 
								{
								notEmpty: {
									message: 'Bank Acc No is required'
								},regexp:{
								 regexp:  /^[0-9]{9,16}$/,
								 message:'Bank Acc No  must be 9 to 16 digits'
								}
						  }
                    },v_bank_hold_name: {
						validators: {
								notEmpty: {
									message: 'Bank Name is required'
								},
								regexp: {
								regexp: /^[a-zA-Z ]+$/,
								message: 'Bank Name can only consist  of alphabets and Space'
								}
							}
                    },v_ifsc_code: {
						validators: {
							notEmpty: {
								message: 'IFSC Code is required'
							},
							regexp: {
							 regexp: /^[A-Za-z0-9]{4}\d{7}$/,
							message: 'IFSC Code must be alphanumeric'
							}
						}
                    },v_aadhar_no: {
						validators: {
							notEmpty: {
								message: 'Aadhar Number is required'
							},
							regexp: {
							 regexp: /^[0-9]{12,16}$/,
							message: 'Aadhar Number  must be  12 to 16 characters'
							}
						}
                    },v_gst_no: {
						validators: {
							notEmpty: {
								message: 'GST Number is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9. ]+$/,
							message: 'GST Number can only consist of alphanumeric, space and dot'
							}
						}
                    },v_others: {
						validators: {
							notEmpty: {
								message: 'Others is required'
							},regexp: {
							regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
							message:'Others wont allow <> [] = % '
							}
						}
                    }
                }
            })
        });
    </script>

</body>

</html>