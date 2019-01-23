<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Size_Model');
  }
  //sizes list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Sizes';
      $data = components($arg);
      $data['sizes'] = $this->Size_Model->get_sizes();
      $this->load->view('admin/sizes',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //create size
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Sizes';
      $data = components($arg);
      $this->load->view('admin/size',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //insert size
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $addl_data = array('created_by' => $this->session->userdata('id'), 'created_on' => date('Y-m-d H:i:s'), 'status' => '1');
        $post_data = array_merge($post_data,$addl_data);
        if ($this->Size_Model->insert($post_data)) {
          $this->session->set_flashdata('success','size created successfully');
          redirect('size');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('size/create');
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('size/create');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //edit size
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Sizes';
      $data = components($arg);
      $data['size'] = $this->Size_Model->get_size_by_id($id);
      $this->load->view('admin/size',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //update size
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $post_id = $this->input->post('id');
        $addl_data = array('updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'));
        $post_data = array_merge($post_data,$addl_data);
        if ($this->Size_Model->update($post_data,$post_id)) {
          $this->session->set_flashdata('success','Size updated successfully');
          redirect('size');
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
  //delete size
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->Size_Model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Size deleted successfully');
        redirect('size');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('size');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //change size status
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
      if ($this->Size_Model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Status changed successfully');
        redirect('size');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('size');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //check size exists
  public function check_exists()
  {
    $name = $this->input->post('name');
    $id = $this->input->post('id');
    if($this->Size_Model->check_exists($name,$id)){
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
