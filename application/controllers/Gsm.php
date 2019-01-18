<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Gsm extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('gsm_model');
  }
  //gsms list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Gsm';
      $data = components($arg);
      $data['gsms'] = $this->gsm_model->get_gsms();
      $this->load->view('admin/gsms',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //create gsm
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Gsm';
      $data = components($arg);
      $this->load->view('admin/gsm',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //insert gsm
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $addl_data = array('created_by' => $this->session->userdata('id'), 'created_on' => date('Y-m-d H:i:s'), 'status' => '1');
        $post_data = array_merge($post_data,$addl_data);
        if ($this->gsm_model->insert($post_data)) {
          $this->session->set_flashdata('success','Gsm created successfully');
          redirect('gsm');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('gsm/create');
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('gsm/create');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //edit gsm
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Gsm';
      $data = components($arg);
      $data['gsm'] = $this->gsm_model->get_gsm_by_id($id);
      $this->load->view('admin/gsm',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //update gsm
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $post_id = $this->input->post('id');
        $addl_data = array('updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'));
        $post_data = array_merge($post_data,$addl_data);
        if ($this->gsm_model->update($post_data,$post_id)) {
          $this->session->set_flashdata('success','Gsm updated successfully');
          redirect('gsm');
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
  //delete gsm
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->gsm_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Gsm deleted successfully');
        redirect('gsm');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('gsm');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //change gsm status
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
      if ($this->gsm_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Status changed successfully');
        redirect('gsm');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('gsm');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //check gsm exists
  public function check_exists()
  {
    $name = $this->input->post('name');
    $id = $this->input->post('id');
    if($this->gsm_model->check_exists($name,$id)){
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
