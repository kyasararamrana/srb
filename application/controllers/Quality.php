<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Quality extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('quality_model');
  }
  //qualities list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Quality';
      $data = components($arg);
      $data['qualities'] = $this->quality_model->get_qualities();
      $this->load->view('admin/qualities',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //create quality
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Quality';
      $data = components($arg);
      $this->load->view('admin/quality',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //insert quality
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $addl_data = array('created_by' => $this->session->userdata('id'), 'created_on' => date('Y-m-d H:i:s'), 'status' => '1');
        $post_data = array_merge($post_data,$addl_data);
        if ($this->quality_model->insert($post_data)) {
          $this->session->set_flashdata('success','Color created successfully');
          redirect('quality');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('quality/create');
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('quality/create');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //edit quality
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Quality';
      $data = components($arg);
      $data['quality'] = $this->quality_model->get_quality_by_id($id);
      $this->load->view('admin/quality',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //update quality
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $post_id = $this->input->post('id');
        $addl_data = array('updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'), 'status' => '1');
        $post_data = array_merge($post_data,$addl_data);
        if ($this->quality_model->update($post_data,$post_id)) {
          $this->session->set_flashdata('success','Color updated successfully');
          redirect('quality');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
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
  //delete quality
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->quality_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Color deleted successfully');
        redirect('quality');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('quality');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //change quality status
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
      if ($this->quality_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Status changed successfully');
        redirect('quality');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('quality');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //check quality exists
  public function check_exists()
  {
    $name = $this->input->post('name');
    $id = $this->input->post('id');
    if($this->quality_model->check_exists($name,$id)){
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
