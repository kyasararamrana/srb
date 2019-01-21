<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_users';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get user access
  public function get_access($email='',$password='')
  {
    return $this->db->get_where($this->table,array('email' => $email, 'password' => $password, 'status' => '1'))->row();
  }
  //check record exists
  public function check_exists($email='',$id='')
  {
    return $this->db->get_where($this->table,array('email' => $email, 'id!=' =>$id, 'status !=' => '0'))->row('id');
  }
  //user data
  public function get_user_data()
  {
    return $this->db->get_where($this->table,array('id' => $this->session->userdata('id')))->row();
  }
  //update Profile
  public function update_profile($post_data='',$post_id='')
  {
    $this->db->where('id',$post_id);
    return $this->db->update($this->table,$post_data);
  }
  //check old password
  public function check_password($password='')
  {
    return $this->db->get_where($this->table,array('password' => $password,'status !=' => '0','id' => $this->session->userdata('id')))->row('id');
  }
  //change Password
  public function change_password($post_data='')
  {
    $this->db->where('id',$this->session->userdata('id'));
    return $this->db->update($this->table,$post_data);
  }

}

?>
