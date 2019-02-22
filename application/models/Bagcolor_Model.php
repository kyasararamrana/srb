<?php
/**
 *
 */
class Bagcolor_Model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_bagcolor';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get bag colors
  public function get_bagcolor()
  {
    $this->db->order_by('bag_color','asc');
    return $this->db->get($this->table)->result();
  }
  //get active bag colors
  public function get_active_bagcolor()
  {
    $this->db->order_by('bag_color','asc');
    return $this->db->get_where($this->table, array('status' => 1))->result();
  }
}

?>
