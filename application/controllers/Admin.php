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
        $user_data = array('name' => $result->name, 'email' => $result->email, 'id' => $result->id, 'status' => $result->status, 'logged_in' => TRUE);
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
  //profile
  public function profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Profile';
      $data = components($arg);
      $data['profile'] = $this->admin_model->get_user_data();
      $this->load->view('admin/profile',$data);
    } else {
      redirect('admin/login');
    }
  }
  //profile (edit - view)
  public function edit_profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Edit Profile';
      $data = components($arg);
      $data['profile'] = $this->admin_model->get_user_data();
      $this->load->view('admin/edit_profile',$data);
    } else {
      redirect('admin/login');
    }

  }
  //profile (edit)
  public function update_profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $config['upload_path']   = './assets/uploads/admin/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif)';
        $config['max_width']     = 128;
        $config['max_height']    = 128;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image')) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error',$error);
          redirect('admin/edit_profile');
        } else {
          $post_id = $this->input->post('id');
          $image_data = array('image' => $this->upload->data('file_name'));
          $post_data = array_merge($post_data,$image_data);
          if ($this->admin_model->update_profile($post_data,$post_id)) {
            redirect('admin/profile');
          } else {
            redirect('admin/edit_profile');
          }
        }
      } else {
        redirect('admin/edit_profile');
      }
    } else {
      redirect('admin/login');
    }
  }

}

?>
