<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('category_model');
  }
  //admin product list
  public function index($value='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {

    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //admin create product - view
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Product';
      $data = components($arg);
      $data['categories'] = $this->category_model->get_active_categories();
      $this->load->view('admin/product',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }

  }
  //admin edit product - view
  public function edit($value='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {

    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }

  }
  //admin update product
  public function update($value='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {

    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //admin delete product
  public function delete($value='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {

    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //admin change product status
  public function status($value='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {

    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //home products by id
  public function products($id='')
  {
    $arg['pageTitle'] = 'Products';
    $data = layouts($arg);
    $this->load->view('home/products',$data);
  }
  //home single product details
  public function product($id='')
  {
    $arg['pageTitle'] = 'Products';
    $data = layouts($arg);
    $this->load->view('home/product',$data);
  }

}

?>
