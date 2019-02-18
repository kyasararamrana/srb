<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainadmin extends CI_Controller
{

function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Color_Model');
  }
  //add bags
  public function bag()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
        $data = components($arg);
      $this->load->view('mainadmin/bag',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //bags list
  public function bags()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
        $data = components($arg);
      $this->load->view('mainadmin/bags',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  // add price
  public function price()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
        $data = components($arg);
      $this->load->view('mainadmin/price',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //price list
  public function prices()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
        $data = components($arg);
      $this->load->view('mainadmin/prices',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //add role
  public function role()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Roles';
        $data = components($arg);
      $this->load->view('mainadmin/role',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //roles list
  public function roles()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Roles';
        $data = components($arg);
      $this->load->view('mainadmin/roles',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //orders list
  public function orderslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders';
        $data = components($arg);
      $this->load->view('mainadmin/orders',$data);
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
      $this->load->view('mainadmin/order_info',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }

}

?>