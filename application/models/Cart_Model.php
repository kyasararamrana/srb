<?php
/**
 *
 */
class Cart_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_cart';
  //records by user
  public function get_cart_by_user_id($user_id='')
  {
    return $this->db->get_where($this->table,array('user_id' => $user_id))->result();
  }
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //delete
  public function delete($id='')
  {
    return $this->db->delete($this->table,array('id' => $id));
  }
  //records total by user
  public function get_cart_total_by_user_id($user_id='')
  {
    $this->db->select('SUM(product_quantity * net_price) AS total_cart');
    return $this->db->get_where($this->table,array('user_id' => $user_id))->row();
  }
  //records count by user
  public function get_cart_count_by_user_id($user_id='')
  {
    $this->db->select('COUNT(*) AS cart_count');
    return $this->db->get_where($this->table,array('user_id' => $user_id))->row();
  }
}

?>
