<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_product';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //active and inactive records list
  public function get_products()
  {
    $this->db->order_by('p.updated_on','desc');
    $this->db->order_by('p.created_on','desc');
    $this->db->select('p.*,c.name as category');
    $this->db->join('ecom_category c','c.id = p.category','left');
    return $this->db->get_where(''.$this->table.' p',array('p.status !=' => '0'))->result();
  }
  //record by id
  public function get_product_by_id($id='')
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
  public function check_exists($name='',$id='')
  {
    return $this->db->get_where($this->table,array('name' => $name,'id !=' => $id, 'status !=' => '0'))->row('id');
  }

}

?>
