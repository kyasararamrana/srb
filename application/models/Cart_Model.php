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
  //update
  public function update($post_data='',$post_id='')
  {
    $this->db->where('id',$post_id);
    return $this->db->update($this->table,$post_data);
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
  //product id from records for user
  public function get_product_id_by_user_id($user_id='')
  {
    $this->db->select('product_id');
    $result = $this->db->get_where($this->table,array('user_id' => $user_id))->result();
    $return = array();
    foreach ($result as $r) {
      $return[] = $r->product_id;
    }
    return $return;
  }
}

?>
