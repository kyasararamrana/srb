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
  
}

?>
