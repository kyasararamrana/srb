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
  //get products count - dashboard
  public function get_products_count()
  {
    $this->db->select('count(*) as count');
    return $this->db->get_where('ecom_product',array('status !='=>'0'))->row('count');
  }
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
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //check record exists
  public function check_exists($email='',$id='')
  {
    return $this->db->get_where($this->table,array('email' => $email, 'id!=' =>$id, 'status !=' => '0'))->row('id');
  }
  //get users
  public function get_users()
  {
    $this->db->order_by('created_on','desc');
    $this->db->order_by('updated_on','desc');
    $this->db->where('created_by',$this->session->userdata('id'));
    return $this->db->get_where($this->table,array('status !=' => '0'))->result();
  }
  //get user by id
  public function get_user_by_id($id='')
  {
    return $this->db->get_where($this->table,array('id' => $id))->row();
  }
  //update
  public function update($post_data='',$post_id='')
  {
    $this->db->where('id',$post_id);
    return $this->db->update($this->table,$post_data);
  } // for notification list
  public  function get_notofocation($role){
	  $this->db->select('n.n_id,n.type,n.text,n.created_at')->from('notification_list as n');
	  $this->db->where('type',$role);
	  $this->db->order_by('n.n_id','desc');
	  return $this->db->get()->result_array();
	  
  }
  public  function get_notofocation_unread($role){
	  $this->db->select('COUNT(n.n_id) as cnt')->from('notification_list as n');
	  $this->db->where('type',$role);
	  $this->db->where('read_count',0);
	  return $this->db->get()->row_array();
	  
  }
  //update notification read count
  public function update_notification($n_id,$data){
	$this->db->where('n_id',$n_id);  
	return $this->db->update('notification_list',$data);
  }
}

?>
