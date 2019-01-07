<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_admin';
  //get admin access
  public function get_access($email='',$password='')
  {
    return $this->db->get_where($this->table,array('email' => $email,'password' => $password))->row();
  }
  //get categories count - dashboard
  public function get_categories_count()
  {
    $this->db->select('count(*) as count');
    return $this->db->get_where('ecom_category',array('status !='=>'0'))->row('count');
  }
  public function get_user_data()
  {
    return $this->db->get_where($this->table,array('id' => $this->session->userdata('id')))->row();
  }
  //update Profile
  public function update_profile($post_data,$post_id)
  {
    $this->db->where('id',$post_id);
    return $this->db->update($this->table,$post_data);
  }

}

?>
