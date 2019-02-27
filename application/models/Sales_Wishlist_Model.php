<?php
/**
 *
 */
class Sales_Wishlist_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_sales_wishlist';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //wishlist
  public function get_wishlist()
  {
    $this->db->select('sw.*,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm,c.bag_color as bag_color');
    $this->db->from($this->table. ' sw');
    $this->db->join('ecom_bagtype t','t.id = sw.bag_type','left');
    $this->db->join('ecom_baglayout l','l.id = sw.bag_layout','left');
    $this->db->join('ecom_bagsize s','s.id = sw.bag_size','left');
    $this->db->join('ecom_baggsm g','g.id = sw.bag_gsm','left');
    $this->db->join('ecom_bagcolor c','c.id = sw.bag_color','left');
    $this->db->order_by('sw.created_on','desc');
    return $this->db->get()->result();
  }

}

?>
