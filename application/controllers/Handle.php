<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Handle extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Handle_Model');
  }
  //handle list (view)
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Handle';
        $data = components($arg);
        $data['handles'] = $this->Handle_Model->get_handle();
        $this->load->view('handle/handles',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //orders list
  public function orders()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Orders';
        $data = components($arg);
        $this->load->view('handle/orders_list',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //handle (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Handle';
        $data = components($arg);
        $this->load->view('handle/handle',$data);
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //insert
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $post_data = $this->input->post();
        if ($post_data) {
          for ($i = 0; $i < count($post_data['type']) ; $i++) {
            $post_array = array(
              'type' => $post_data['type'][$i],
              'material' => $post_data['material'][$i],
              'size' => $post_data['size'][$i],
              'color' => $post_data['color'][$i],
              'gsm' => $post_data['gsm'][$i],
              'quantity' => $post_data['quantity'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Handle_Model->insert($post_array);
          }
          $this->session->set_flashdata('success','Handle details created successfully');
          redirect('handle');
        } else {
          $this->session->userdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->userdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //edit (view)
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Handle';
        $data = components($arg);
        $data['handle'] = $this->Handle_Model->get_handle_by_id($id);
        $this->load->view('handle/handle',$data);
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //update
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $post_data = $this->input->post();
        $post_id = $this->input->post('id');
        if ($post_data) {
          for ($i = 0; $i < count($post_data['type']) ; $i++) {
            $post_array = array(
              'type' => $post_data['type'][$i],
              'material' => $post_data['material'][$i],
              'size' => $post_data['size'][$i],
              'color' => $post_data['color'][$i],
              'gsm' => $post_data['gsm'][$i],
              'quantity' => $post_data['quantity'][$i],
              'updated_on' => date('Y-m-d H:i:s'),
              'updated_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Handle_Model->update($post_array,$post_id);
          }
          $this->session->set_flashdata('success','Handle details updated successfully');
          redirect('handle');
        } else {
          $this->session->userdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->userdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //delete
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $post_data = array('status' => 0);
        if ($this->Handle_Model->update($post_data,$id)) {
          $this->session->set_flashdata('success','Handle details deleted succssfully');
          redirect('handle');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  public function handlelist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Handle';
      $data = components($arg);
      $this->load->view('handle/handle_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function edithandle()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Handle';
      $data = components($arg);
      $this->load->view('handle/edit_handle',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function orderstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Stock';
      $data = components($arg);
      $this->load->view('handle/order_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
}
