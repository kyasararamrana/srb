<?php
/**
 *
 */
class Printingcolortype_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_printingcolortype';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get all printing color type
  public function get_printingcolortype()
  {
    $this->db->order_by('printing_color_type','asc');
    return $this->db->get($this->table)->result();
  }
  //get active printing color types
  public function get_active_printingcolortype()
  {
    $this->db->order_by('printing_color_type','asc');
    return $this->db->get_where($this->table,array('status' => 1))->result();
  }
}

?>
