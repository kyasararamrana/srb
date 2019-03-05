<?php
/**
 *
 */
class Bagtype_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_bagtype';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get active bag types
  public function get_active_bagtype()
  {
    $this->db->select('id,bag_type');
    $this->db->order_by('bag_type','asc');
    return $this->db->get_where($this->table,array('status' => 1))->result();
  }
  //get all bag types
  public function get_bagtype()
  {
    $this->db->order_by('bag_type','asc');
    return $this->db->get($this->table)->result();
  }
  //get other charges, printing charges, block changes by bag type
  public function get_bag_additional_details($bag_type='')
  {
    $this->db->select('other_charges,printing_cost,block_charges,additional_gsm,percentage,cost_per_kg');
    return $this->db->get_where($this->table, array('id' => $bag_type))->row();
  }
}

?>
