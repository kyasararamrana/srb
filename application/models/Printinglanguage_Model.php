<?php
/**
 *
 */
class Printinglanguage_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_printinglanguage';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get all printing languages
  public function get_printinglanguage()
  {
    $this->db->order_by('printing_language','asc');
    return $this->db->get($this->table)->result();
  }
}

?>
