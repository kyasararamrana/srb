<td>
                                        <select name="h_stock_name[]" id="h_stock_name" onchange="get_h_list(this.value,'0');" class="form-control">
                                            <option value="" >Select</option>
											<?php if(isset($handle_list) && count($handle_list)>0){ ?>
												<?php foreach($handle_list as $lis){ ?>
													 <?php if($handle_id==$lis['h_s_id']){ ?>
													  <option selected value="<?php echo $lis['h_s_id']; ?>" ><?php echo $lis['stock_name']; ?></option>
													  <?php }else{ ?>
															<option value="<?php echo $lis['h_s_id']; ?>" ><?php echo $lis['stock_name']; ?></option>
													<?php } ?>
												<?php } ?>
											<?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="h_s_type[]" id="h_s_type" class="form-control">
                                              <option value="" >Select</option>
											  <?php if(isset($type_list) && count($type_list)>0){ ?>
											  <?php foreach($type_list as $lis){ ?>
											  <option value="<?php echo $lis['type']; ?>" ><?php echo $lis['type']; ?></option>
											  <?php } ?>
											  <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                         <select name="h_m_type[]" id="h_m_type" class="form-control">
                                              <option value="" >Select</option>
											  <?php if(isset($mtype_name) && count($mtype_name)>0){ ?>
											  <?php foreach($mtype_name as $lis){ ?>
											  <option value="<?php echo $lis['mtype']; ?>" ><?php echo $lis['mtype']; ?></option>
											  <?php } ?>
											  <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                         <select name="h_size[]" id="h_size" class="form-control">
                                            <option value="" >Select</option>
											  <?php if(isset($size_list) && count($size_list)>0){ ?>
											  <?php foreach($size_list as $lis){ ?>
											  <option value="<?php echo $lis['size']; ?>" ><?php echo $lis['size']; ?></option>
											  <?php } ?>
											  <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="h_color[]" id="h_color" class="form-control">
										<option value="" >Select</option>
                                             <?php if(isset($color_list) && count($color_list)>0){ ?>
											  <?php foreach($color_list as $lis){ ?>
											  <option value="<?php echo $lis['color']; ?>" ><?php echo $lis['color']; ?></option>
											  <?php } ?>
											  <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                         <select name="h_gsm[]" id="h_gsm" class="form-control">
										 <option value="" >Select</option>
                                             <?php if(isset($gsm_list) && count($gsm_list)>0){ ?>
											  <?php foreach($gsm_list as $lis){ ?>
											  <option value="<?php echo $lis['gsm']; ?>" ><?php echo $lis['gsm']; ?></option>
											  <?php } ?>
											  <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="h_qty[]" id="h_qty" placeholder="Enter Quantity" class="form-control" />
                                    </td>
<script type="text/javascript">
   function get_h_list(id,tab){
			$.ajax({
            url:'<?php echo base_url('inventory/get_handle_data'); ?>',
            type:'post',
            data:{'h_s_id':id},
            success:function(data){
				$("#h_stock_add"+tab).empty();
				$("#h_stock_add"+tab).append(data);
            }
          })
		}
</script>
<?php //exit; ?>