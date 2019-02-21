<?php
/**
 *
 */
class Printingstyle_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_printingstyle';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get all printing style
  public function get_printingstyle()
  {
    $this->db->order_by('printing_style','asc');
    return $this->db->get($this->table)->result();
  }
  //get active printing style
  public function get_active_printingstyle()
  {
    $this->db->order_by('printing_style','asc');
    return $this->db->get_where($this->table, array('status' => 1))->result();
  }
}

?>
