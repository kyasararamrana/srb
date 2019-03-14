<?php
/**
 *
 */
class Baglayout_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_baglayout';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get all bag layouts
  public function get_baglayout()
  {
    $this->db->select('l.*,t.bag_type as bag_type');
    $this->db->from($this->table.' l');
    $this->db->join('ecom_bagtype t','l.bag_type = t.id','left');
    $this->db->order_by('l.bag_layout','asc');
    return $this->db->get()->result();
  }
  //get active bag layouts
  public function get_active_baglayout()
  {
    $this->db->order_by('bag_layout','asc');
    return $this->db->get_where($this->table,array('status' => 1))->result();
  }
  //get bag layout by bag type
  public function get_baglayout_by_bagtype($bag_type='')
  {
    $this->db->select('id,bag_layout');
    $this->db->order_by('bag_layout','asc');
    return $this->db->get_where($this->table,array('bag_type' => $bag_type))->result();
  } 
  public function get_bag_per_kg_amount($bag_type)
  {
    $this->db->select('id,cost_per_kg,percentage,additional_gsm')->from('ecom_bagtype');
    $this->db->where('id',$bag_type);
    return $this->db->get()->row_array();
  }
  //gaet handle cost
  public function get_handle_cost($handletype)
  {
    $this->db->select('id,material')->from('ecom_handle');
    $this->db->where('id',$handletype);
    return $this->db->get()->row_array();
  }
  //get bag size by bag layout
  public function get_bagsize_by_baglayout($bag_layout='')
  {
    $this->db->select('id,bag_size');
    $this->db->order_by('bag_size','asc');
    return $this->db->get_where('ecom_bagsize',array('bag_layout' => $bag_layout))->result();
  }

}

?>
