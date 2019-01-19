<?php
/**
 *
 */
class Checkout extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('cart_model');
  }
  //checkout - view
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Checkout';
      $data = layouts($arg);
      $id = $this->session->userdata('id');
      $data['cart'] = $this->cart_model->get_cart_by_user_id($id);
      $data['total'] = $this->cart_model->get_cart_total_by_user_id($id);
      $this->load->view('home/checkout',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //insert
  public function insert()
  {
    // code...
  }
  //delete cart
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($id) {
        if ($this->cart_model->delete($id)) {
          $this->session->set_flashdata('success','Item removed from cart');
          redirect('checkout');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Please try again,something went wrong');
        redirect($this->agent->referrer());
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
}

?>
