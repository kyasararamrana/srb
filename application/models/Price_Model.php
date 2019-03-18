<?php
/**
 *
 */
class Price_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_price';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get price details
  public function get_price($bag_type='')
  {
    $this->db->select('p.*,sp.s_size,spt.s_gsm,ht.type as handle_type,m.material,q.name as qname,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm');
    $this->db->from($this->table.' p');
    $this->db->join('ecom_bagtype t','p.bag_type = t.id','left');
    $this->db->join('ecom_baglayout l','p.bag_layout = l.id','left');
    $this->db->join('ecom_bagsize s','p.bag_size = s.id','left');
    $this->db->join('ecom_baggsm g','p.bag_gsm = g.id','left');
    $this->db->join('inv_material m','m.i_m_id = p.material_type','left');
    $this->db->join('ecom_quality q','q.id = p.quality_type','left');
    $this->db->join('ecom_sidepatt  sp','sp.s_id = p.s_size','left');
    $this->db->join('ecom_sidepatt  spt','spt.s_id = p.s_gsm','left');
    $this->db->join('ecom_handle ht','ht.id = p.handle_type','left');
    $this->db->order_by('p.created_on','desc');
    $this->db->order_by('p.updated_on','desc');
	$this->db->where('t.bag_type !=','Stitching bag');
    $this->db->where('p.status !=',0);
    if (isset($bag_type) && !empty($bag_type)) {
      $this->db->where('p.bag_type',$bag_type);
    }
    return $this->db->get()->result();
  }
  public function get_stitching_price($bag_type='')
  {
    $this->db->select('ifs.finishing_size,p.fininshing_size,sp.s_size as sidesize,p.id,p.price,spt.s_gsm as sidepatty_gsm,epct.printing_color_type,eps.printing_style,m.material,q.name as qname,sp.s_gsm,ist.stitching_type,p.bag_type,p.bag_layout,p.bag_size,p.bag_gsm,p.material_type,p.quality_type,p.s_size,p.s_gsm,t.bag_type as bag_type,l.bag_layout as bag_layout,s.bag_size as bag_size,g.bag_gsm as bag_gsm');
    $this->db->from($this->table.' p');
    $this->db->join('ecom_bagtype t','p.bag_type = t.id','left');
    $this->db->join('ecom_baglayout l','p.bag_layout = l.id','left');
    $this->db->join('ecom_bagsize s','p.bag_size = s.id','left');
    $this->db->join('ecom_baggsm g','p.bag_gsm = g.id','left');
    $this->db->join('inv_material m','m.i_m_id = p.material_type','left');
    $this->db->join('ecom_quality q','q.id = p.quality_type','left');
    $this->db->join('ecom_sidepatt  sp','sp.s_id = p.bag_size','left');
    $this->db->join('ecom_sidepatt  spt','spt.s_id = p.s_gsm','left');
    $this->db->join('inv_stitching_type  ist','ist.i_s_t_id = p.stitching_type','left');
    $this->db->join('ecom_printingstyle  eps','eps.id = p.printing_style','left');
    $this->db->join('ecom_printingcolortype  epct','epct.id = p.printing_color_type','left');
    $this->db->join('inv_finishing_size  ifs','ifs.i_f_s_id = p.fininshing_size','left');
    $this->db->order_by('p.created_on','desc');
    $this->db->order_by('p.updated_on','desc');
    $this->db->where('p.status !=',0);
    $this->db->where('t.bag_type','Stitching bag');
    if (isset($bag_type) && !empty($bag_type)) {
      $this->db->where('p.bag_type',$bag_type);
    }
    return $this->db->get()->result();
  }
  //get price by id
  public function get_price_by_id($id='')
  {
    return $this->db->get_where($this->table,array('id' => $id))->row();
  }
  //update
  public function update($post_data='', $post_id='')
  {
    $this->db->where('id',$post_id);
    $this->db->set($post_data);
    return $this->db->update($this->table);
  }
  public  function get_price_material_type(){
	 $this->db->select('ecom_price.material_type,im.material')->from('ecom_price');
	 $this->db->join('inv_material as im','im.i_m_id=ecom_price.material_type','left');
	 $this->db->group_by('ecom_price.material_type');
	 return $this->db->get()->result_array();
  }
  public  function get_price_size_list(){
	 $this->db->select('ecom_price.s_size,st.s_size')->from('ecom_price');
	 $this->db->join('ecom_sidepatt as st','st.s_id=ecom_price.s_size','left');
	 $this->db->group_by('ecom_price.s_size');
	 return $this->db->get()->result_array();
  }
  public  function get_price_gsm_list(){
	 $this->db->select('ecom_price.s_size,st.s_gsm')->from('ecom_price');
	 $this->db->join('ecom_sidepatt as st','st.s_id=ecom_price.s_gsm','left');
	 $this->db->group_by('ecom_price.s_gsm');
	 return $this->db->get()->result_array();
  } 
  public  function get_price_quality_type(){
	 $this->db->select('ecom_price.quality_type,eq.name')->from('ecom_price');
	 $this->db->join('ecom_quality as eq','eq.id=ecom_price.quality_type','left');
	 $this->db->group_by('ecom_price.quality_type');
	 return $this->db->get()->result_array();
  }
  public  function get_price_bag_gsm_list(){
	 $this->db->select('ecom_price.bag_gsm,eg.name')->from('ecom_price');
	 $this->db->join('ecom_gsm as eg','eg.id=ecom_price.bag_gsm','left');
	 $this->db->group_by('ecom_price.bag_gsm');
	 return $this->db->get()->result_array();
  }

}

?>
