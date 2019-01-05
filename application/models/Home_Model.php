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
  public function check_exists($email='')
  {
    return $this->db->get_where($this->table,array('email' => $email,'status !=' => '0'))->row('id');
  }

}

?>
