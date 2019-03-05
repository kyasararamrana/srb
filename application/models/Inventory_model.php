<?php
/**
 *
 */
class Inventory_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  
  //lists
  public  function get_inventory_order_lists(){
	$this->db->select('s.id,s.customer_name,bt.bag_type,bs.bag_size,g.name as bag_gsm,s.quantity,s.total_price,s.created_on')->from('ecom_sales_order as s');
	$this->db->join('ecom_bagtype as bt','bt.id=s.bag_type','left');
	$this->db->join('ecom_bagsize as bs','bs.id=s.bag_size','left');
	$this->db->join('ecom_gsm as g','g.id=s.bag_gsm','left');
	$this->db->where('s.status !=',2);
	//$this->db->where('v.v_created_by',$id);
	return $this->db->get()->result();	
  }
  public function get_inventory_list(){
	return $this->db->select('v_id,v_name')->from('ecom_vendors')->where('v_status',1)->get()->result_array();
  }
  // stock name list
	public  function get_stock_name($v_id){
		return $this->db->select('es.st_o_id,es.st_name')->from('ecom_stcok_orders as es')->where('es.st_v_id',$v_id)->where('es.st_status',1)->group_by('es.st_name')->get()->result_array();
	}// stock size list
	public  function get_stock_size($v_id){
		return $this->db->select('es.st_o_id,es.st_size')->from('ecom_stcok_orders as es')->where('es.st_v_id',$v_id)->where('es.st_status',1)->group_by('es.st_size')->get()->result_array();
	}// stock thickness list
	public  function get_stock_thinkness($v_id){
		return $this->db->select('es.st_o_id,es.st_thickness')->from('ecom_stcok_orders as es')->where('es.st_v_id',$v_id)->where('es.st_status',1)->group_by('es.st_thickness')->get()->result_array();
	}// stock color list
	public  function get_stock_color($v_id){
		return $this->db->select('es.st_o_id,es.st_color')->from('ecom_stcok_orders as es')->where('es.st_v_id',$v_id)->where('es.st_status',1)->group_by('es.st_color')->get()->result_array();
	}
	// handle stock list
	public function get_handle_list(){
	return $this->db->select('h_s_id,stock_name')->from('ecom_handle_stock')->where('status',1)->get()->result_array();
	}
// handle-stock name list
	public  function get_h_mtype_name($v_id){
		return $this->db->select('eh.h_s_id,eh.mtype')->from('ecom_handle_stock as eh')->where('eh.h_s_id',$v_id)->where('eh.status',1)->group_by('eh.mtype')->get()->result_array();
	}
	public  function get_h_type_list($v_id){
		return $this->db->select('eh.h_s_id,eh.type')->from('ecom_handle_stock as eh')->where('eh.h_s_id',$v_id)->where('eh.status',1)->group_by('eh.type')->get()->result_array();
	}
	public  function get_h_size_list($v_id){
		return $this->db->select('eh.h_s_id,eh.size')->from('ecom_handle_stock as eh')->where('eh.h_s_id',$v_id)->where('eh.status',1)->group_by('eh.size')->get()->result_array();
	}
	public  function get_h_color_list($v_id){
		return $this->db->select('eh.h_s_id,eh.color')->from('ecom_handle_stock as eh')->where('eh.h_s_id',$v_id)->where('eh.status',1)->group_by('eh.color')->get()->result_array();
	}
	public  function get_h_gsm_list($v_id){
		return $this->db->select('eh.h_s_id,eh.gsm')->from('ecom_handle_stock as eh')->where('eh.h_s_id',$v_id)->where('eh.status',1)->group_by('eh.gsm')->get()->result_array();
	}
	//	insert material order 
	public  function add_material_order($data){
		$this->db->insert('inv_material_section_order_item',$data);
		return $this->db->insert_id();
	}//	insert handle order 
	public  function add_handle_order($data){
		$this->db->insert('inv_handle_section_order_item',$data);
		return $this->db->insert_id();
	}
	public  function get_material_order_list(){
	  $this->db->select('ms.i_or_id,ms.order_id,ms.m_v_id,ms.m_stcock_name,ms.m_size,ms.m_thinkness,ms.m_color,ms.m_quantity,ms.m_status,ms.m_created_at')->from('inv_material_section_order_item as ms');
	  $this->db->where('ms.m_status !=',2);
	  return $this->db->get()->result_array();	
	}
  
}

?>
