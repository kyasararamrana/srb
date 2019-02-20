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
    $this->db->select('*');
    $this->db->from($this->table.' s');
    $this->db->join('ecom_baglayout l','s.bag_layout = l.id','left');
    $this->db->order_by('bag_size','asc');
    $this->db->where(array('s.status' => 1));
    return $this->db->get()->result();
  }
}

?>
