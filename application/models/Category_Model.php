<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_category';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //active and inactive records list
  public function get_categories()
  {
    $this->db->order_by('created_on','desc');
    $this->db->order_by('updated_on','desc');
    return $this->db->get_where($this->table,array('status !=' => '0'))->result();
  }
  //record by id
  public function get_category_by_id($id='')
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
  public function check_exists($name='')
  {
    return $this->db->get_where($this->table,array('name' => $name,'status !=' => '0'))->row('id');
  }
  //active records list
  public function get_active_categories()
  {
    return $this->db->get_where($this->table,array('status' => '1'))->result();
  }

}

?>
