<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('slider_model');
  }
  //slider list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Slider';
      $data = components($arg);
      $data['slider'] = $this->slider_model->get_all_sliders();
      $this->load->view('admin/sliders',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //create
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Slider';
      $data = components($arg);
      $this->load->view('admin/slider',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //insert
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if (!empty($post_data)) {
        $config['upload_path']   = './assets/uploads/slider/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_width']     = 420;
        $config['max_height']    = 420;
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        foreach ($post_data['heading'] as $key => $value) {
          $_FILES['image']['name'] = $_FILES['image']['name'][$key];
          $_FILES['image']['type'] = $_FILES['image']['type'][$key];
          $_FILES['image']['tmp_name'] = $_FILES['image']['tmp_name'][$key];
          $_FILES['image']['error'] = $_FILES['image']['error'][$key];
          $_FILES['image']['size'] = $_FILES['image']['size'][$key];
          $this->upload->do_upload();
          $image = $this->upload->data('file_name');
          if (!empty($post_data['heading'][$key]) && !empty($post_data['content'][$key]) && !empty($image)) {
            $this->slider_model->insert(array('heading' => $post_data['heading'][$key] , 'content' => $post_data['content'][$key] , 'image' => $image, 'created_on' => date('Y-m-d H:i:s') , 'created_by' => $this->session->userdata('id'), 'status' => '1'));
          }
        }
        redirect('slider');
      } else {
        $this->session->set_flashdata('error','Please try again');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //change slider status
  public function status()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $status = $this->uri->segment(3);
      $id = $this->uri->segment(4);
      $sts = '';
      if ($status == '1') {
        $sts .= '2';
      } else {
        $sts .= '1';
      }
      $post_data = array('status' => $sts);
      if ($this->slider_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Status changed successfully');
        redirect('slider');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('slider');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }

}

?>
