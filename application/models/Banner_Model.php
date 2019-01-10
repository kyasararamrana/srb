<?php
/**
 *
 */
class Banner_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_banner';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //active and inactive records list
  public function get_banners()
  {
    $this->db->order_by('created_on','desc');
    $this->db->order_by('updated_on','desc');
    return $this->db->get_where($this->table,array('status !=' => '0'))->result();
  }
  //record by id
  public function get_banner_by_id($id='')
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
  //active records
  public function get_active_banner()
  {
    return $this->db->get_where($this->table,array('status' => '1'))->row();
  }

}


?>
