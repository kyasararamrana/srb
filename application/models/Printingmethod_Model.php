<?php
/**
 *
 */
class Printingmethod_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_printingmethod';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get all printing method
  public function get_printingmethod()
  {
    $this->db->order_by('printing_method','asc');
    return $this->db->get($this->table)->result();
  }
}

?>
