<?php
/**
 *
 */
class Sidepatty_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //insert
  public function save_Sidepatty_data($data)
  {
    $this->db->insert('ecom_sidepatt',$data);
	return $this->db->insert_id();
  }
  //lists
  public  function get_sidepatty_list($id){
	$this->db->select('s.s_id,s.s_type,s.s_size,s.s_color,s.s_gsm,s.s_qty,s.s_created_at')->from('ecom_sidepatt as s');
	$this->db->where('s.s_status !=',2);
	$this->db->where('s.s_created_by',$id);
	return $this->db->get()->result();	
  } 
  //details
  public function get_sidepatty_details($s_id){
	$this->db->select('*')->from('ecom_sidepatt as s');
	$this->db->where('s.s_id',$s_id);
	return $this->db->get()->row_array();  
  }
  //update
  public function update($s_id,$data){
	 $this->db->where('s_id',$s_id);
    return $this->db->update('ecom_sidepatt',$data);  
  }
  // stock add
  public  function save_v_stock_data($data){
	  $this->db->insert('ecom_stcok_orders',$data);
	return $this->db->insert_id(); 
  }
  //get stock list 
  public  function get_stick_list($id){
	$this->db->select('v.v_u_id,v.v_name,s.st_o_id,s.st_name,s.st_size,s.st_thickness,s.st_color,s.st_pieces,s.st_created_at')->from('ecom_stcok_orders as s');
	$this->db->join('ecom_vendors as v','v.v_id=s.st_v_id','left');
	$this->db->where('s.st_status !=',2);
	$this->db->where('s.st_created_by',$id);
	return $this->db->get()->result();  
  }
  //stock details
  public  function get_stock_details($s_id){
	 $this->db->select('ec.st_o_id,ec.st_name,ec.st_size,ec.st_thickness,ec.st_color,ec.st_pieces,ec.st_created_at')->from('ecom_stcok_orders as ec');
	$this->db->where('st_o_id',$s_id);
	return $this->db->get()->row_array();  
  }
  public  function save_v_stock_update($st_o_id,$data){
	 $this->db->where('st_o_id',$st_o_id);
     return $this->db->update('ecom_stcok_orders',$data); 
  }
  // insert printing
  public function save_p_type_insert($data){
	   $this->db->insert('ecom_sidepatty_p_type',$data);
		return $this->db->insert_id();  
  } 
  // insert printing color
  public function save_p_color_insert($data){
	   $this->db->insert('ecom_sidepatty_p_color',$data);
		return $this->db->insert_id();  
  }
  //list printing
  public  function get_p_type_list($pid){
	 $this->db->select('p.s_p_id,p.p_type')->from('ecom_sidepatty_p_type as p');
	$this->db->where('p.p_status !=',2);
	$this->db->where('p.p_created_by',$pid);
	return $this->db->get()->result();  
  } 
  public  function get_p_color_list($pid){
	 $this->db->select('p.s_c_id,p.p_color')->from('ecom_sidepatty_p_color as p');
	$this->db->where('p.p_status !=',2);
	$this->db->where('p.p_created_by',$pid);
	return $this->db->get()->result();  
  }
  //update print_type
  public  function update_printing($s_p_id,$data){
	$this->db->where('s_p_id',$s_p_id);
     return $this->db->update('ecom_sidepatty_p_type',$data); 
  }
  //update colors
  public  function update_p_colors($s_p_id,$data){
	$this->db->where('s_c_id',$s_p_id);
     return $this->db->update('ecom_sidepatty_p_color',$data); 
  }
  //prinint details
  public  function get_printing_details($s_p_id){
	 $this->db->select('p.s_p_id,p.p_type')->from('ecom_sidepatty_p_type as p');
	$this->db->where('p.s_p_id',$s_p_id);
	return $this->db->get()->row_array();  
  } 
  //prinint color details
  public  function get_p_color_details($s_p_id){
	 $this->db->select('p.s_c_id,p.p_color')->from('ecom_sidepatty_p_color as p');
	$this->db->where('p.s_c_id',$s_p_id);
	return $this->db->get()->row_array();  
  }
  //getting Types
  public  function get_s_type_list($l_id){
	 $this->db->select('s.s_id,s.s_type')->from('ecom_sidepatt as s');
	$this->db->where('s.s_status',1);
	$this->db->group_by('s.s_type');
	$this->db->order_by('s.s_id','desc');
	return $this->db->get()->result_array();    
  }
  //getting sizes
  public  function get_s_size_list($l_id){
	 $this->db->select('s.s_id,s.s_size')->from('ecom_sidepatt as s');
	$this->db->where('s.s_status',1);
	$this->db->group_by('s.s_size');
	$this->db->order_by('s.s_id','desc');
	return $this->db->get()->result_array();  
  }
  //getting colors
  public  function get_s_color_list($l_id){
	 $this->db->select('s.s_id,s.s_color')->from('ecom_sidepatt as s');
	 $this->db->where('s.s_status',1);
	 $this->db->group_by('s.s_color');
	 $this->db->order_by('s.s_id','desc');
	 return $this->db->get()->result_array();  
  }
  //getting gsms
  public  function get_s_gsm_list($l_id){
	 $this->db->select('s.s_id,s.s_gsm')->from('ecom_sidepatt as s');
	 $this->db->where('s.s_status',1);
	 $this->db->group_by('s.s_gsm');
	 $this->db->order_by('s.s_id','desc');
	 return $this->db->get()->result_array(); 
  }
  
  //getting printing type
  public  function get_print_type_list($l_id){
	 $this->db->select('p.s_p_id,p.p_type')->from('ecom_sidepatty_p_type as p');
	 $this->db->where('p.p_status',1);
	 $this->db->group_by('p.p_type');
	 $this->db->order_by('p.s_p_id','desc');
	 return $this->db->get()->result_array(); 
  }
  //getting printing color
  public  function get_print_color_list($l_id){
	 $this->db->select('p.s_c_id,p.p_color')->from('ecom_sidepatty_p_color as p');
	 $this->db->where('p.p_status',1);
	 $this->db->group_by('p.p_color');
	 $this->db->order_by('p.s_c_id','desc');
	 return $this->db->get()->result_array(); 
  }
  //insert order stock
  public  function  insert_stock_order($data){
	$this->db->insert('ecom_sidepatty_order_stock',$data);
	return $this->db->insert_id();	  
  }
  //stock list
  public  function get_order_stock_list($l_id){
	 $this->db->select('o.o_s_id,o.o_sname,o.o_type,o.o_size,o.o_color,o.o_gsm,o.o_p_type,o.o_p_color,o.o_qty')->from('ecom_sidepatty_order_stock as o');
	 $this->db->where('o.o_status !=',2);
	 $this->db->order_by('o.o_s_id','desc');
	 return $this->db->get()->result_array();   
  }
  //update order stock 
  
  public function update_order_stock($o_s_id,$data){
	 	$this->db->where('o_s_id',$o_s_id);
     return $this->db->update('ecom_sidepatty_order_stock',$data);  
  }
  
}

?>
