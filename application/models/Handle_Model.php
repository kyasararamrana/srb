<?php
/**
 *
 */
class Handle_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_handle';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table, $post_data);
  }
  //get handles list
  public function get_handle()
  {
    $this->db->order_by('type','asc');
    return $this->db->get_where($this->table, array('status !=' => 0))->result();
  }
  //get handle by id
  public function get_handle_by_id($id='')
  {
    return $this->db->get_where($this->table, array('id' => $id))->row();
  }
  //update
  public function update($post_data='',$post_id='')
  {
    $this->db->where('id',$post_id);
    $this->db->set($post_data);
    return $this->db->update($this->table);
  }
  // material type list
  public  function get_material_type(){
	return $this->db->select('eh.id,eh.material')->from('ecom_handle as eh')->where('eh.status',1)->group_by('eh.material')->get()->result_array();  
  }
  public  function get_type(){
	return $this->db->select('eh.id,eh.type')->from('ecom_handle as eh')->where('eh.status',1)->group_by('eh.type')->get()->result_array();  
  } 
  public  function get_size(){
	return $this->db->select('eh.id,eh.size')->from('ecom_handle as eh')->where('eh.status',1)->group_by('eh.size')->get()->result_array();  
  }
  public  function get_color(){
	return $this->db->select('eh.id,eh.color')->from('ecom_handle as eh')->where('eh.status',1)->group_by('eh.color')->get()->result_array();  
  }
  public  function get_gsm(){
	return $this->db->select('eh.id,eh.gsm')->from('ecom_handle as eh')->where('eh.status',1)->group_by('eh.gsm')->get()->result_array();  
  }
  //save handle stock
  public  function insert_stock_order($data){
	$this->db->insert('ecom_handle_stock',$data);
	return $this->db->insert_id();	
  }
  // handle stock list
  public  function get_hanlde_list(){
	return $this->db->select('eh.h_s_id,eh.stock_name,eh.mtype,eh.type,eh.size,eh.color,eh.gsm,eh.quantity')->from('ecom_handle_stock as eh')->where('eh.status',1)->get()->result_array();  
  }
  //update order stock 
  public function update_handle_stock($h_s_id,$data){
	 	$this->db->where('h_s_id',$h_s_id);
     return $this->db->update('ecom_handle_stock',$data);  
  }
  
  // handle order list
  public  function get_h_order_list(){
	  $this->db->select('hs.h_or_id,hsa.stock_name,hs.order_id,hs.h_material_type,hs.h_type,hs.h_size,hs.h_color,hs.h_gsm,hs.h_quantity,hs.h_status,hs.h_created_at')->from('inv_handle_section_order_item as hs');
	  $this->db->join('ecom_handle_stock as hsa','hsa.h_s_id=hs.h_stcock_name','left');
	  $this->db->where('hs.h_status !=',2);
	  return $this->db->get()->result_array();
  }
	public function update_orders($order_id,$data){
		$this->db->where('h_or_id',$order_id);
		return $this->db->update('inv_handle_section_order_item',$data);		
	}
	public  function update_orders_details($order_id){
	  $this->db->select('hs.order_id')->from('inv_handle_section_order_item as hs');
	  $this->db->where('hs.h_or_id',$order_id);
	  return $this->db->get()->row_array();
	}
	public  function insert_notification($data){
			$this->db->insert('notification_list',$data);
	        return $this->db->insert_id();
	}

}

?>
