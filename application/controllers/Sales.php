<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Bagtype_Model');
    $this->load->model('Bagcolor_Model');
    $this->load->model('Printingmethod_Model');
    $this->load->model('Printingcolortype_Model');
    $this->load->model('Printingstyle_Model');
    $this->load->model('Suggestedprintingcolor_Model');
    $this->load->model('Printinglanguage_Model');
    $this->load->model('Handle_Model');
  }
  //Orders List
  public function orderslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders';
        $data = components($arg);
      $this->load->view('sales/orderslist',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Order Details
  public function orderdetails()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Details';
        $data = components($arg);
      $this->load->view('sales/order_details',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Order Form (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Sales') {
        $arg['pageTitle'] = 'Order';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $data['bagcolor'] = $this->Bagcolor_Model->get_active_bagcolor();
        $data['printingmethod'] = $this->Printingmethod_Model->get_active_printingmethod();
        $data['printingcolortype'] = $this->Printingcolortype_Model->get_active_printingcolortype();
        $data['printingstyle'] = $this->Printingstyle_Model->get_active_printingstyle();
        $data['suggestedprintingcolor'] = $this->Suggestedprintingcolor_Model->get_active_suggestedprintingcolor();
        $data['printinglanguage'] = $this->Printinglanguage_Model->get_active_printinglanguage();
        $this->load->view('sales/order',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //Price List
  public function pricelist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Form';
        $data = components($arg);
      $this->load->view('sales/price_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Wishlist
  public function wishlist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Wishlist';
        $data = components($arg);
      $this->load->view('sales/wishlist',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Wishlist Item View
  public function wishlistItemView()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Wishlist';
        $data = components($arg);
      $this->load->view('sales/wishlist_item_view',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Edit Wishlist Item
  public function editWishlistItem()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Wishlist';
        $data = components($arg);
      $this->load->view('sales/edit_wishlist_item',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
}
