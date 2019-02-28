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
	return $this->db->get()->result();	
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
  
}

?>
