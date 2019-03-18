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
  //get bag gsm by bag size
  public function get_baggsm_by_bagsize($bag_size='')
  {
    $this->db->select('id,bag_gsm');
    $this->db->order_by('bag_gsm','asc');
    return $this->db->get_where($this->table,array('bag_size' => $bag_size))->result();
  }
  //get bag gsm by bag layout
  public function get_baggsm_by_baglayout($bag_layout='')
  {
    $this->db->select('id,bag_gsm');
    $this->db->order_by('bag_gsm','asc');
    return $this->db->get_where($this->table,array('bag_layout' => $bag_layout))->result();
  }
  //get fininshing_size by bag sidepattywidth
  public function get_fininshing_size_by_sidepattywidth($sidepattywidth='')
  {
    $this->db->select('i_f_s_id,finishing_size');
    $this->db->order_by('i_f_s_id','asc');
    return $this->db->get_where('inv_finishing_size',array('s_size' => $sidepattywidth))->result();
  }
}

?>
