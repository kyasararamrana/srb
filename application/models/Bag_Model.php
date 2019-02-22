<?php
/**
 *
 */
class Bag_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_bag';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get all bags
  public function get_bags()
  {
    $this->db->select('b.*,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm');
    $this->db->from($this->table.' b');
    $this->db->join('ecom_bagtype t','t.id = b.bag_type','left');
    $this->db->join('ecom_baglayout l','l.id = b.bag_layout','left');
    $this->db->join('ecom_bagsize s','s.id = b.bag_size','left');
    $this->db->join('ecom_baggsm g','g.id = b.bag_gsm','left');
    $this->db->order_by('b.created_on','desc');
    $this->db->where('b.status != ',0);
    return $this->db->get()->result();
  }
  //get bag by id
  public function get_bag_by_id($id='')
  {
    return $this->db->get_where($this->table,array('id' => $id))->row();
  }
  //update
  public function update($post_data='', $post_id='')
  {
    $this->db->where('id',$post_id);
    $this->db->set($post_data);
    return $this->db->update($this->table);
  }
}

?>
