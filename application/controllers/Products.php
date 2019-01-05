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
    // code...
  }
  //admin create product - view
  public function create($value='')
  {
    // code...
  }
  //admin edit product - view
  public function edit($value='')
  {
    // code...
  }
  //admin update product
  public function update($value='')
  {
    // code...
  }
  //admin delete product
  public function delete($value='')
  {
    // code...
  }
  //admin change product status
  public function status($value='')
  {
    // code...
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
