<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordermanagement extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Color_Model');
  }
  //orders list
  public function orderconfirm()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order_confirmation';
        $data = components($arg);
      $this->load->view('ordermanagement/orderconfirm',$data);
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
      $this->load->view('ordermanagement/order_info',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //add machine work
  public function work()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Machine_work';
        $data = components($arg);
      $this->load->view('ordermanagement/work',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //machine works list
  public function works()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Machine_works';
        $data = components($arg);
      $this->load->view('ordermanagement/works',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //orders status list
  public function orderstatus()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders_status';
        $data = components($arg);
      $this->load->view('ordermanagement/orders_status_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //orders status list
  public function return_bags()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders_status';
        $data = components($arg);
      $this->load->view('ordermanagement/return_bags',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //orders status list
  public function return_bags_list()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders_status';
        $data = components($arg);
      $this->load->view('ordermanagement/return_bags_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
}