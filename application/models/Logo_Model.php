<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Logo_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_logo';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //record by id
  public function get_logo_by_id($id='')
  {
    $this->db->select('id');
    return $this->db->get_where($this->table,array('id' => $id))->row('id');
  }
  //update
  public function update($post_data='',$post_id='')
  {
    $this->db->where('id',$post_id);
    $this->db->set($post_data);
    return $this->db->update($this->table);
  }
  //active and inactive records list
  public function get_logo()
  {
    return $this->db->get_where($this->table,array('status !=' => '0'))->row();
  }

}

?>
