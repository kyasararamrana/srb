<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Logo extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('logo_model');
  }
  //logo create
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Logo';
      $data = components($arg);
      $data['logo'] = $this->logo_model->get_logo();
      $this->load->view('admin/logo',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }

  }

  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        if (isset($post_data['id']) && !empty($post_data['id'])) {
          //updating
          $post_id = $this->input->post('id');
          $post_uploaded_logo = $this->input->post('uploaded_logo');
          $post_uploaded_favicon = $this->input->post('uploaded_favicon');
          if ((empty($_FILES['logo']['name']) && isset($post_uploaded_logo))) {
            $logo = $post_uploaded_logo;
          } else {
            @unlink('./assets/uploads/logo/'.$post_uploaded_logo);
            $logo = $this->_do_upload('logo');
          }
          if ((empty($_FILES['favicon']['name']) && isset($post_uploaded_favicon))) {
            $favicon = $post_uploaded_favicon;
          } else {
            @unlink('./assets/uploads/logo/'.$post_uploaded_favicon);
            $favicon = $this->_do_upload('favicon');
          }
          $addl_data = array('logo' => $logo, 'favicon' => $favicon, 'updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'), 'status' => '1');
          $post_data = array_merge($post_data,$addl_data);
          unset($post_data['uploaded_logo']);
          unset($post_data['uploaded_favicon']);
          if ($this->logo_model->update($post_data,$post_id)) {
            $this->session->set_flashdata('success','Logo updated successfully');
            redirect('logo');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect($this->agent->referrer());
          }
        } else {
          //creating
          if (isset($_FILES['logo']) && $_FILES['logo']['name'] != ''){
            $logo = $this->_do_upload('logo');
          }
          if (isset($_FILES['favicon']) && $_FILES['favicon']['name'] != ''){
            $favicon = $this->_do_upload('favicon');
          }
          $addl_data = array('logo' => $logo, 'favicon' => $favicon, 'created_by' => $this->session->userdata('id'), 'created_on' => date('Y-m-d H:i:s'), 'status' => '1');
          $post_data = array_merge($post_data,$addl_data);
          if ($this->logo_model->insert($post_data)) {
            $this->session->set_flashdata('success','logo created successfully');
            redirect('logo');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect('logo');
          }
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('logo');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //uploading files
  private function _do_upload($filename){
    $config['upload_path']   = './assets/uploads/logo/';
    $config['allowed_types'] = 'png|jpeg|jpg|gif|ico';
    $config['encrypt_name']  = TRUE;
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload($filename)) {
      $error = $this->upload->display_errors();
      $this->session->set_flashdata('error',$error);
      redirect('logo');
    } else {
      $data = $this->upload->data('file_name');
      return $data;
    }
  }

}

?>
