<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesmanagement extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Color_Model');
  }
  //orders list
  public function orderslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders';
        $data = components($arg);
      $this->load->view('salesmanagement/orderslist',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
    
  public function orderdetails()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Details';
        $data = components($arg);
      $this->load->view('salesmanagement/order_details',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
    
  public function editorderdetails()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Details';
        $data = components($arg);
      $this->load->view('salesmanagement/edit_order_details',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
}