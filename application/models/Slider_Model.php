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
  //active and inactive records list
  public function get_all_sliders()
  {
    return $this->db->get_where($this->table,array('status !=' => '0'))->result();
  }
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //record by id
  public function get_slider_by_id($id='')
  {
    return $this->db->get_where($this->table,array('id' => $id))->row();
  }
  //update
  public function update($post_data='',$post_id='')
  {
    $this->db->where('id',$post_id);
    $this->db->set($post_data);
    return $this->db->update($this->table);
  }
  //check record exists
  public function check_exists($heading='',$id='')
  {
    return $this->db->get_where($this->table,array('heading' => $heading,'id !=' => $id, 'status !=' => '0'))->row('id');
  }
}

?>
