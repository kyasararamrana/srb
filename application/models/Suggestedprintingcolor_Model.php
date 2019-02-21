<?php
/**
 *
 */
class Suggestedprintingcolor_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_suggestedprintingcolor';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //
  public function get_suggestedprintingcolor()
  {
    $this->db->order_by('suggested_printing_color','asc');
    return $this->db->get($this->table)->result();
  }
}

?>
