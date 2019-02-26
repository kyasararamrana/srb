<?php
/**
 *
 */
class Handle_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_handle';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table, $post_data);
  }
  //get handles list
  public function get_handle()
  {
    $this->db->order_by('type','asc');
    return $this->db->get_where($this->table, array('status !=' => 0))->result();
  }
  //get handle by id
  public function get_handle_by_id($id='')
  {
    return $this->db->get_where($this->table, array('id' => $id))->row();
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
