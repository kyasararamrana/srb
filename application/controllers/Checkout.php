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
    $this->load->model('billing_model');
    $this->load->library('user_agent');
  }
  //checkout - view
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Checkout';
      $data = layouts($arg);
      $user_id = $this->session->userdata('id');
      if($user_id){
        $data['cart'] = $this->cart_model->get_cart_by_user_id($user_id);
        $data['total'] = $this->cart_model->get_cart_total_by_user_id($user_id);
      }
      $this->load->view('home/checkout',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //insert
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $addl_data = array('created_on' => date('Y-m-d H:i:s'), 'created_by' => $this->session->userdata('id'));
        $post_data = array_merge($post_data,$addl_data);
        if ($this->billing_model->insert($post_data)) {
          $this->session->set_flashdata('success','Billing information created');
          $user_id = $this->session->userdata('id');
          if($user_id){
            $cart =  $this->cart_model->get_cart_by_user_id($user_id);
            if ($cart) {
              print_r($cart);die();
            }
          }
          //redirect('/order');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect($this->agent->referrer());
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
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
