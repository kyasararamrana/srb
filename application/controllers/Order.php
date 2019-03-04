<?php
/**
 *
 */
class Order extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
<<<<<<< HEAD
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
=======
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
>>>>>>> 21f8d1f46a35a828da81ecd86a5169b3f22afcda
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
<<<<<<< HEAD
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
=======
      $data['orders'] = $this->Order_Model->get_orders();
      $this->load->view('admin/orders',$data);
>>>>>>> 21f8d1f46a35a828da81ecd86a5169b3f22afcda
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }

}

?>
