<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidepattymodule extends CI_Controller
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
      $this->load->view('sidepatty/orders_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function addstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
        $data = components($arg);
      $this->load->view('sidepatty/add_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function stocklist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
        $data = components($arg);
      $this->load->view('sidepatty/stock_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function editstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
        $data = components($arg);
      $this->load->view('sidepatty/edit_stock',$data);
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
      $this->load->view('sidepatty/order_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
}