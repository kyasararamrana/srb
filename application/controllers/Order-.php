<?php
/**
 *
 */
class Order extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Order_Model');
  }
  //order (view) - home
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders';
      $data = layouts($arg);
      $user_id = $this->session->userdata('id');
      if($user_id){
        $data['orders'] = $this->Order_Model->get_order_by_user_id($user_id);
      }
      $this->load->view('home/order',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //order (view) - admin
  public function orders()
  {
    if($this->session->userdata('logged_in') == TRUE){
      $arg['pageTitle'] = 'Orders';
      $data = components($arg);
      $data['orders'] = $this->Order_Model->get_orders();
      $this->load->view('admin/orders',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }

}

?>
