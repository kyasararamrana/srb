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
    $this->load->model('Admin_Model');
  }
  //dashboard
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Dashboard';
  	  $data = components($arg);
      $data['category'] = $this->Admin_Model->get_categories_count();
      $data['product'] = $this->Admin_Model->get_products_count();
      $this->load->view('admin/index',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
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
      $this->session->set_flashdata('error','Please login and try again');
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
      $result = $this->Admin_Model->get_access($email,$password);
      if($result){
        $user_data = array('name' => $result->name, 'email' => $result->email, 'id' => $result->id, 'status' => $result->status, 'logged_in' => TRUE);
        $this->session->set_userdata($user_data);
        redirect('/admin');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('admin/login');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //logout
  public function logout()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $this->session->sess_destroy();
      $this->session->set_flashdata('success','Loggedout successfully');
      redirect('admin/login');
    }
  }
  //profile
  public function profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Profile';
      $data = components($arg);
      $data['profile'] = $this->Admin_Model->get_user_data();
      $this->load->view('admin/profile',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //profile (edit - view)
  public function edit_profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Edit Profile';
      $data = components($arg);
      $data['profile'] = $this->Admin_Model->get_user_data();
      $this->load->view('admin/edit_profile',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
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
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_width']     = 128;
        $config['max_height']    = 128;
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['image']['name']) && (!$this->upload->do_upload('image'))) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error',$error);
          redirect('admin/edit_profile');
        } else {
          $post_id = $this->input->post('id');
          $post_uploaded_image = $this->input->post('uploaded_image');
          if (empty($_FILES['image']['name']) && isset($post_uploaded_image)) {
            $image = $post_uploaded_image;
          } else {
            @unlink('./assets/uploads/admin/'.$post_uploaded_image);
            $image = $this->upload->data('file_name');
          }
          $image_data = array('image' => $image);
          $post_data = array_merge($post_data,$image_data);
          unset($post_data['uploaded_image']);
          if ($this->Admin_Model->update_profile($post_data,$post_id)) {
            $this->session->set_flashdata('success','Profile updated successfully');
            redirect('admin/profile');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect('admin/edit_profile');
          }
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('admin/edit_profile');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //change password
  public function change_password()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Change Password';
      $data = components($arg);
      $this->load->view('admin/change_password',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //update Password
  public function update_password()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $password = $this->input->post('newpassword');
      $post_data = array('password' => md5($password), 'org_password' => $password);
      if ($this->Admin_Model->change_password($post_data)) {
        $this->session->set_flashdata('success','Password changed successfully');
        redirect('admin/change_password');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('admin/change_password');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }

  }
  //check old Password
  public function check_password()
  {
    $old_password = $this->input->post('oldpassword');
    $old_password = md5($old_password);
    if($this->Admin_Model->check_password($old_password)){
      $isAvailable = true;
    } else {
      $isAvailable = false;
    }
    echo json_encode(array(
      'valid' => $isAvailable,
    ));
  }

}

?>
