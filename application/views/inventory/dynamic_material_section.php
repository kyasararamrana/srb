<td>
   <select name="v_id[]" id="v_id" onchange="get_allflags(this.value)" class="form-control">
      <option value="" >Select</option>
      <?php if(isset($vendor_list) && count($vendor_list)>0){ ?>
      <?php foreach($vendor_list as $lis){ ?>
      <?php if($vendor_id==$lis['v_id']){ ?>
      <option selected value="<?php echo $lis['v_id']; ?>" ><?php echo $lis['v_name']; ?></option>
      <?php }else{ ?>
      <option value="<?php echo $lis['v_id']; ?>" ><?php echo $lis['v_name']; ?></option>
      <?php } ?>
      <?php } ?>
      <?php } ?>
   </select>
</td>
<td>
   <select name="s_name[]" id="s_name" class="form-control">
      <option value="" >Select</option>
      <?php if(isset($stock_name) && count($stock_name)>0){ ?>
      <?php foreach($stock_name as $lis){ ?>
      <option value="<?php echo $lis['st_name']; ?>" ><?php echo $lis['st_name']; ?></option>
      <?php } ?>
      <?php } ?>
   </select>
</td>
<td>
   <select name="s_size[]" id="s_size" class="form-control">
      <option value="" >Select</option>
      <?php if(isset($size_list) && count($size_list)>0){ ?>
      <?php foreach($size_list as $lis){ ?>
      <option value="<?php echo $lis['st_size']; ?>" ><?php echo $lis['st_size']; ?></option>
      <?php } ?>
      <?php } ?>
   </select>
</td>
<td>
   <select name="s_thickness[]" id="s_thickness" class="form-control">
      <option value="" >Select</option>
      <?php if(isset($think_list) && count($think_list)>0){ ?>
      <?php foreach($think_list as $lis){ ?>
      <option value="<?php echo $lis['st_thickness']; ?>" ><?php echo $lis['st_thickness']; ?></option>
      <?php } ?>
      <?php } ?>
   </select>
</td>
<td>
   <select name="s_color[]" id="s_color" class="form-control">
      <option value="" >Select</option>
      <?php if(isset($color_list) && count($color_list)>0){ ?>
      <?php foreach($color_list as $lis){ ?>
      <option value="<?php echo $lis['st_color']; ?>" ><?php echo $lis['st_color']; ?></option>
      <?php } ?>
      <?php } ?>
   </select>
</td>
<td>
   <input type="text" name="pieces[]" placeholder="Enter Pieces" class="form-control" />
</td>
<script type="text/javascript">
   function get_allflags(id){
   	 $.ajax({
              url:'<?php echo base_url('inventory/get_vendor_data'); ?>',
              type:'post',
              data:{'v_id':id},
              success:function(data){
   			$("#stock_name_append").empty();
   			$("#stock_name_append").append(data);
              }
            })
   }
</script>
