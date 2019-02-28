<?php
/**
 *
 */
class Vendor_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //insert
  public function insert($data)
  {
    $this->db->insert('ecom_vendors',$data);
	return $this->db->insert_id();
  }
  //lists
  public  function get_vendor_lists($id){
	$this->db->select('v.v_id,v.v_u_id,v.v_name,v.v_p_mobile,v.v_p_email,v.v_address,v.v_aadhar_no,v.v_gst_no')->from('ecom_vendors as v');
	$this->db->where('v.v_status !=',2);
	$this->db->where('v.v_created_by',$id);
	return $this->db->get()->result();	
  } 
  public  function get_all_vendor_lists(){
	$this->db->select('v.v_id,v.v_u_id,v.v_name')->from('ecom_vendors as v');
	$this->db->where('v.v_status',1);
	return $this->db->get()->result_array();	
  }
  //details
  public function get_v_details($v_id){
	$this->db->select('*')->from('ecom_vendors as v');
	$this->db->where('v.v_id',$v_id);
	return $this->db->get()->row_array();  
  }
  //update
  public function update($v_id,$data){
	 $this->db->where('v_id',$v_id);
    return $this->db->update('ecom_vendors',$data);  
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
  
}

?>
