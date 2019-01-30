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
  //active Products and category
  public function get_active_products($id='',$size='',$color='',$gsm='',$quality='')
  {
    $this->db->group_start();
    if ($id) { $this->db->or_where('category',$id); }
    if ($size) { $this->db->or_where('FIND_IN_SET("'.$size.'",size)!=',0); }
    if ($color) { $this->db->or_where('FIND_IN_SET("'.$color.'",color)!=',0); }
    if ($gsm) { $this->db->or_where('FIND_IN_SET("'.$gsm.'",gsm)!=',0); }
    if ($quality) { $this->db->or_where('FIND_IN_SET("'.$quality.'",quality)!=',0); }
    $this->db->group_end();
    return $this->db->get_where($this->table,array('status' => '1'))->result();
  }
  //single active product
  public function get_single_active_product($id='')
  {
    $this->db->select('p.*,c.name as category,GROUP_CONCAT(DISTINCT s.name ORDER BY s.id ASC) as size,GROUP_CONCAT(DISTINCT cs.name ORDER BY cs.id ASC) as color,GROUP_CONCAT(DISTINCT g.name ORDER BY g.id ASC) as gsm,GROUP_CONCAT(DISTINCT q.name ORDER BY q.id ASC) as quality');
    $this->db->join('ecom_category c','c.id = p.category','left');
    $this->db->join('ecom_size s','FIND_IN_SET(s.id,p.size) > 0','left');
    $this->db->join('ecom_color cs','FIND_IN_SET(cs.id,p.color) > 0','left');
    $this->db->join('ecom_gsm g','FIND_IN_SET(g.id,p.gsm) > 0','left');
    $this->db->join('ecom_quality q','FIND_IN_SET(q.id,p.quality) > 0','left');
    $this->db->group_by('p.id');
    $this->db->where('s.status','1');
    $this->db->where('cs.status','1');
    $this->db->where('g.status','1');
    $this->db->where('q.status','1');
    return $this->db->get_where($this->table.' p',array('p.id' => $id, 'p.status' => '1'))->row();
  }
  //active and featured Products
  public function get_active_featured_products()
  {
    return $this->db->get_where($this->table, array('featured' => '1', 'status' => '1' ))->result();
  }
  //active and deals Products
  public function get_active_deals_products()
  {
    return $this->db->get_where($this->table, array('deals' => '1', 'status' => '1' ))->result();
  }
  //active and having discount
  public function get_active_discount_products()
  {
    return $this->db->get_where($this->table,array('discount_percentage !=' => 0))->result();
  }
  //active products (id and name)
  public function get_active_products_list()
  {
    $this->db->select('id,name');
    return $this->db->get_where($this->table,array('status' => '1'))->result();
  }
}

?>
