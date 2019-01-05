<?php

/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('admin_model');
  }
  //dashboard 
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Dashboard';
  	  $data = components($arg);
      $data['category'] = $this->admin_model->get_categories_count();
      $this->load->view('admin/index',$data);
    } else {
      redirect('admin/login');
    }
  }
  //admin login
  public function login()
  {
    if ($this->session->userdata('logged_in') != TRUE) {
      $data['pageTitle'] = 'Login';
      $this->load->view('admin/login',$data);
    } else {
      redirect('admin');
    }
  }
  //get admin access
  public function get_access()
  {
    $post_data = $this->input->post();
    if($post_data){
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $password = md5($password);
      $result = $this->admin_model->get_access($email,$password);
      if($result){
        $user_data = array('first_name' => $result->first_name, 'last_name' => $result->last_name, 'email' => $result->email, 'id' => $result->id, 'status' => $result->status, 'logged_in' => TRUE);
        $this->session->set_userdata($user_data);
        redirect('/admin');
      } else {
        redirect('admin/login');
      }
    } else {
      redirect('admin/login');
    }
  }
  //logout
  public function logout()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $this->session->sess_destroy();
      redirect('admin/login');
    }
  }

}

?>
