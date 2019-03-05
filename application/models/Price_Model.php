<?php
/**
 *
 */
class Price_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_price';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get price details
  public function get_price($bag_type='')
  {
    $this->db->select('p.*,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm');
    $this->db->from($this->table.' p');
    $this->db->join('ecom_bagtype t','p.bag_type = t.id','left');
    $this->db->join('ecom_baglayout l','p.bag_layout = l.id','left');
    $this->db->join('ecom_bagsize s','p.bag_size = s.id','left');
    $this->db->join('ecom_baggsm g','p.bag_gsm = g.id','left');
    $this->db->order_by('p.created_on','desc');
    $this->db->order_by('p.updated_on','desc');
    $this->db->where('p.status !=',0);
    if (isset($bag_type) && !empty($bag_type)) {
      $this->db->where('p.bag_type',$bag_type);
    }
    return $this->db->get()->result();
  }
  //get price by id
  public function get_price_by_id($id='')
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
