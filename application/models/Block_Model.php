<?php
/**
 *
 */
class Block_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  //insert
  public function insert($data)
  {
    $this->db->insert('inv_block_charge',$data);
    return $this->db->insert_id();
  }
  //get all block
  public function get_block_list()
  {
    $this->db->select('ib.i_b_c_id,ecom_bagtype.bag_type,ib.block_type,ib.block_amt,ib.status,ib.created_on')->from('inv_block_charge as ib');
	$this->db->join('ecom_bagtype','ecom_bagtype.id=ib.bage_type','left');
	$this->db->where('ib.status !=',2);
	$this->db->order_by('ib.i_b_c_id','desc');
    return $this->db->get()->result_array();
  }
  
	public  function get_bags_list(){
    $this->db->select('id,bag_type')->from('ecom_bagtype');
	$this->db->where('status',1);
	$this->db->order_by('id','asc');
    return $this->db->get()->result_array();
	}
	public  function check_exist_name($b_type,$block_type,$block_amt){
    $this->db->select('*')->from('inv_block_charge as ib');
	$this->db->where('ib.bage_type',$b_type);
	$this->db->where('ib.block_type',$block_type);
	$this->db->where('ib.block_amt',$block_amt);
    return $this->db->get()->row_array();
	}
	public  function get_block_details($id){
    $this->db->select('ib.i_b_c_id,ib.block_type,ib.block_amt,ib.bage_type')->from('inv_block_charge as ib');
	$this->db->where('ib.i_b_c_id',$id);
    return $this->db->get()->row_array();
	}
	public  function update($id,$data){
		$this->db->where('i_b_c_id',$id);
		return $this->db->update('inv_block_charge',$data);
	}
	
	
	// minimum qty 
	public  function minimum_qty_insert($data){
		$this->db->insert('inv_min_qty',$data);
		return $this->db->insert_id();
	}
	// minimum qty 
	public  function get_minimum_qty_list(){
		$this->db->select('im.i_m_q_id,ecom_bagtype.bag_type,im.design,im.color,im.r_size,im.i_size,im.status,im.created_on')->from('inv_min_qty as im');
		$this->db->join('ecom_bagtype','ecom_bagtype.id=im.bage_type','left');
		$this->db->where('im.status !=',2);
		$this->db->order_by('im.i_m_q_id','desc');
		return $this->db->get()->result_array();
	}
	//minimum qty update
	public  function min_qty_update($id,$data){
		$this->db->where('i_m_q_id',$id);
		return $this->db->update('inv_min_qty',$data);
	}
	// min details
	public  function get_min_qty_details($id){
    $this->db->select('i_m_q_id,bage_type,design,color,r_size,i_size')->from('inv_min_qty');
	$this->db->where('i_m_q_id',$id);
    return $this->db->get()->row_array();
	}
	
	public  function check_min_qty_exist_name($b_type,$design,$color,$r_size,$i_size){
    $this->db->select('*')->from('inv_min_qty as ib');
	$this->db->where('ib.bage_type',$b_type);
	$this->db->where('ib.design',$design);
	$this->db->where('ib.color',$color);
	$this->db->where('ib.r_size',$r_size);
	$this->db->where('ib.i_size',$i_size);
    return $this->db->get()->row_array();
	}
  
}

?>
