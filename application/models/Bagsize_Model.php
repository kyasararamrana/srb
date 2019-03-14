<?php
/**
 *
 */
class Bagsize_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_bagsize';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get all bag sizes
  public function get_bagsize()
  {
    $this->db->select('s.*,eb.bag_type,ebl.bag_layout');
    $this->db->from($this->table.' s');
    $this->db->join('ecom_baglayout as ebl','s.bag_layout = ebl.id','left');
    $this->db->join('ecom_bagtype as eb','s.bag_type = eb.id','left');
    $this->db->order_by('bag_size','asc');
    $this->db->where(array('s.status' => 1));
    return $this->db->get()->result();
  }
}

?>
