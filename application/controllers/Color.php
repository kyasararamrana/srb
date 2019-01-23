<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Color extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Color_Model');
  }
  //colors list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Colors';
      $data = components($arg);
      $data['colors'] = $this->Color_Model->get_colors();
      $this->load->view('admin/colors',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //create color
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Colors';
      $data = components($arg);
      $this->load->view('admin/color',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //insert color
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $addl_data = array('created_by' => $this->session->userdata('id'), 'created_on' => date('Y-m-d H:i:s'), 'status' => '1');
        $post_data = array_merge($post_data,$addl_data);
        if ($this->Color_Model->insert($post_data)) {
          $this->session->set_flashdata('success','Color created successfully');
          redirect('color');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('color/create');
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('color/create');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //edit color
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Colors';
      $data = components($arg);
      $data['color'] = $this->Color_Model->get_color_by_id($id);
      $this->load->view('admin/color',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //update color
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $post_id = $this->input->post('id');
        $addl_data = array('updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'));
        $post_data = array_merge($post_data,$addl_data);
        if ($this->Color_Model->update($post_data,$post_id)) {
          $this->session->set_flashdata('success','Color updated successfully');
          redirect('color');
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
  //delete color
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->Color_Model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Color deleted successfully');
        redirect('color');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('color');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //change color status
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
      if ($this->Color_Model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Status changed successfully');
        redirect('color');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('color');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //check color exists
  public function check_exists()
  {
    $name = $this->input->post('name');
    $id = $this->input->post('id');
    if($this->Color_Model->check_exists($name,$id)){
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
