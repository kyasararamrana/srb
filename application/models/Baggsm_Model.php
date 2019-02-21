<?php
/**
 *
 */
class Baggsm_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_baggsm';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get bag gsm
  public function get_baggsm()
  {
    $this->db->select('g.*,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size');
    $this->db->from($this->table.' g');
    $this->db->join('ecom_bagtype t','g.bag_type = t.id','left');
    $this->db->join('ecom_baglayout l','g.bag_layout = l.id','left');
    $this->db->join('ecom_bagsize s','g.bag_size = s.id','left');
    $this->db->order_by('g.bag_gsm','asc');
    return $this->db->get()->result();
  }
}

?>