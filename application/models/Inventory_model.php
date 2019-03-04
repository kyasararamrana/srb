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
	$this->db->select('s.customer_name,bt.bag_type,bs.bag_size,g.name as bag_gsm,s.quantity,s.total_price')->from('ecom_sales_order as s');
	$this->db->join('ecom_bagtype as bt','bt.id=s.bag_type','left');
	$this->db->join('ecom_bagsize as bs','bs.id=s.bag_size','left');
	$this->db->join('ecom_gsm as g','g.id=s.bag_gsm','left');
	$this->db->where('s.status !=',2);
	//$this->db->where('v.v_created_by',$id);
	return $this->db->get()->result();	
  } 
  
}

?>
