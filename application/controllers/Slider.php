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
  //insert slider
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $config['upload_path']   = './assets/uploads/slider/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_width']     = 420;
        $config['max_height']    = 420;
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error',$error);
          redirect('slider/create');
        } else {
          $addl_data = array('image' => $this->upload->data('file_name') , 'created_on' => date('Y-m-d H:i:s'), 'created_by' => $this->session->userdata('id'), 'status' => '1' );
          $post_data = array_merge($post_data,$addl_data);
          if ($this->slider_model->insert($post_data)) {
            $this->session->set_flashdata('success','Slider created successfully');
            redirect('slider');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect('slider/create');
          }
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('slider/create');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //edit slider
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Slider';
      $data = components($arg);
      $data['slider'] = $this->slider_model->get_slider_by_id($id);
      $this->load->view('admin/slider',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //update slider
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $config['upload_path']   = './assets/uploads/slider/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_width']     = 780;
        $config['max_height']    = 438;
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['image']['name']) && (!$this->upload->do_upload('image'))) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error',$error);
          redirect($this->agent->referrer());
        } else {
          $post_id = $this->input->post('id');
          $post_uploaded_image = $this->input->post('uploaded_image');
          if (empty($_FILES['image']['name']) && isset($post_uploaded_image)) {
            $image = $post_uploaded_image;
          } else {
            @unlink('./assets/uploads/slider/'.$post_uploaded_image);
            $image = $this->upload->data('file_name');
          }
          $addl_data = array('image' => $image, 'updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'));
          $post_data = array_merge($post_data,$addl_data);
          unset($post_data['uploaded_image']);
          if ($this->slider_model->update($post_data,$post_id)) {
            $this->session->set_flashdata('success','Slider updated successfully');
            redirect('slider');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect($this->agent->referrer());
          }
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect($this->agent->referrer());
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //delete slider
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->slider_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Slider deleted successfully');
        redirect('slider');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('slider');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
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
  //check banner exists
  public function check_exists()
  {
    $heading = $this->input->post('heading');
    $id = $this->input->post('id');
    if($this->slider_model->check_exists($heading,$id)){
      $isAvailable = false;
    } else {
      $isAvailable = true;
    }
    echo json_encode(array(
      'valid' => $isAvailable,
    ));
  }

}

?>
