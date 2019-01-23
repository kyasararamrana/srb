<?php
/**
 *
 */
class Wishlist_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_wishlist';
  //records by user
  public function get_wishlist_by_userid($user_id='')
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
  //records count by user
  public function get_wishlist_count_by_user_id($user_id='')
  {
    $this->db->select('COUNT(*) AS wishlist_count');
    return $this->db->get_where($this->table,array('user_id' => $user_id))->row();
  }
}

?>
