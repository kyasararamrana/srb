<?php
/**
 *
 */
class Slider_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_slider';

  public function get_all_sliders()
  {
    return $this->db->get_where($this->table,array('status !=' => '0'))->result();
  }
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //update
  public function update($post_data='',$post_id='')
  {
    $this->db->where('id',$post_id);
    $this->db->set($post_data);
    return $this->db->update($this->table);
  }
}

?>
