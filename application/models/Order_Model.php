<?php
/**
 *
 */
class Order_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table_order = 'ecom_order';
  public $table_order_items = 'ecom_order_items';
  public $table_cart = 'ecom_cart';
  //all orders items
  public function get_orders()
  {
    $this->db->select('*');
    $this->db->join($this->table_order.' o','o.id = ol.order_id','left');
    return $this->db->get($this->table_order_items.' ol')->result();
  }
  //order items by user id
  public function get_order_by_user_id($user_id='')
  {
    $this->db->select('*');
    $this->db->join($this->table_order.' o','o.id = ol.order_id','left');
    return $this->db->get_where($this->table_order_items.' ol',array('ol.user_id' => $user_id))->result();
  }
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table_order,$post_data);
  }
  //insert order item
  public function insert_order_items($post_data='')
  {
    return $this->db->insert($this->table_order_items,$post_data);
  }
  //delete ordered items from cart
  public function delete_cart_after_order($user_id='')
  {
    $this->db->where('user_id',$user_id);
    return $this->db->delete($this->table_cart);
  }
}

?>
