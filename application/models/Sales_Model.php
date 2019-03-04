<?php
/**
 *
 */
class Sales_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_sales_order';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get orders
  public function get_order()
  {
    $this->db->select('so.*,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm,c.bag_color as bag_color');
    $this->db->from($this->table. ' so');
    $this->db->join('ecom_bagtype t','t.id = so.bag_type','left');
    $this->db->join('ecom_baglayout l','l.id = so.bag_layout','left');
    $this->db->join('ecom_bagsize s','s.id = so.bag_size','left');
    $this->db->join('ecom_baggsm g','g.id = so.bag_gsm','left');
    $this->db->join('ecom_bagcolor c','c.id = so.bag_color','left');
    $this->db->order_by('so.created_on','desc');
    return $this->db->get()->result();
  }
  //get order details by id
  public function get_details_by_id($id='')
  {
    $this->db->select('so.*,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm,c.bag_color as bag_color,m.printing_method as printing_method,ct.printing_color_type as printing_color_type,ps.printing_style as printing_style,sc.suggested_printing_color as suggested_printing_color,pl.printing_language as printing_language');
    $this->db->from($this->table.' so');
    $this->db->join('ecom_bagtype t','t.id = so.bag_type','left');
    $this->db->join('ecom_baglayout l','l.id = so.bag_layout','left');
    $this->db->join('ecom_bagsize s','s.id = so.bag_size','left');
    $this->db->join('ecom_baggsm g','g.id = so.bag_gsm','left');
    $this->db->join('ecom_bagcolor c','c.id = so.bag_color','left');
    $this->db->join('ecom_printingmethod m','m.id = so.printing_method','left');
    $this->db->join('ecom_printingcolortype ct','ct.id = so.printing_color_type','left');
    $this->db->join('ecom_printingstyle ps','ps.id = so.printing_color_type','left');
    $this->db->join('ecom_suggestedprintingcolor sc','sc.id = so.printing_color_type','left');
    $this->db->join('ecom_printinglanguage pl','pl.id = so.printing_color_type','left');
    return $this->db->get_where($this->table, array('so.id' => $id))->row();
  }
  //delete
  public function delete($id='')
  {
    return $this->db->delete($this->table,array('id' => $id));
  }
  //update
  public function update($post_data='',$post_id)
  {
    $this->db->where('id',$post_id);
    $this->db->set($post_data);
    return $this->db->update($this->table);
  }
  //confirmed order
  public function get_order_confirmed()
  {
    $this->db->select('so.*,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm,c.bag_color as bag_color');
    $this->db->from($this->table. ' so');
    $this->db->join('ecom_bagtype t','t.id = so.bag_type','left');
    $this->db->join('ecom_baglayout l','l.id = so.bag_layout','left');
    $this->db->join('ecom_bagsize s','s.id = so.bag_size','left');
    $this->db->join('ecom_baggsm g','g.id = so.bag_gsm','left');
    $this->db->join('ecom_bagcolor c','c.id = so.bag_color','left');
    $this->db->where('so.status',1);
    $this->db->where('so.status !=',2);
    $this->db->where('so.status !=',3);
    $this->db->order_by('so.created_on','desc');
    return $this->db->get()->result();
  }
}

?>
