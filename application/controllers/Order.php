<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Sales_Model');
    $this->load->model('Work_Model');
  }
  //Order Confirmation
  public function orderconfirm()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Confirmation';
      $data = components($arg);
      $data['orders'] = $this->Sales_Model->get_order();
      $this->load->view('order/orderconfirm',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Order Details
  public function orderdetails($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Details';
      $data = components($arg);
      $data['order'] = $this->Sales_Model->get_details_by_id($id);
      $this->load->view('order/order_info',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Add Work
  public function work()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Order') {
        $arg['pageTitle'] = 'Roll Management';
        $data = components($arg);
        $this->load->view('order/work',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
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
      if ($this->session->userdata('role') == 'Order') {
        $post_data = $this->input->post();
        if ($post_data) {
          $addl_data = array(
            'created_on' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id')
          );
          $post_data = array_merge($post_data, $addl_data);
          if ($this->Work_Model->insert($post_data)) {
            $this->session->set_flashdata('success','Roll created successfully');
            redirect('order/works');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect($this->agent->referrer());
          }
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
  //Machine Works List
  public function works()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Roll Management';
      $data = components($arg);
      $data['works'] = $this->Work_Model->get_work();
      $this->load->view('order/works',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Orders Status List
  public function orderstatus()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders Status';
      $data = components($arg);
      $this->load->view('order/orders_status_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Add Return Bags
  public function return_bags()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Return Orders';
        $data = components($arg);
      $this->load->view('ordermanagement/return_bags',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Return Bags List
  public function return_bags_list()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Return Orders';
        $data = components($arg);
      $this->load->view('ordermanagement/return_bags_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
}
