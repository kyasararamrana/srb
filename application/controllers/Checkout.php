<?php
/**
 *
 */
class Checkout extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Cart_Model');
    $this->load->model('Billing_Model');
    $this->load->model('Order_Model');
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
        $data['cart'] = $this->Cart_Model->get_cart_by_user_id($user_id);
        $data['total'] = $this->Cart_Model->get_cart_total_by_user_id($user_id);
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
        if ($this->Billing_Model->insert($post_data)) {
          $billing_id = $this->db->insert_id();
          $this->session->set_flashdata('success','Billing information created');
          $user_id = $this->session->userdata('id');
          if($user_id){
            $cart =  $this->Cart_Model->get_cart_by_user_id($user_id);
            $addl_data = array(
              'billing_id' => $billing_id,
              'user_id' => $this->session->userdata('id')
            );
            if ($cart) {
              $this->Order_Model->insert($addl_data);
              $order_id = $this->db->insert_id();
              foreach($cart as $c){
                unset($c->id);
                unset($c->created_on);
                $str = date('Ymd').$order_id;
                $c->order_number = 'SRB'.str_pad($str,10,'0',STR_PAD_LEFT);
                $c->order_id = $order_id;
                $c->created_by = $c->user_id;
                $c->created_on = date('Y-m-d H:i:s');
                $c->status = 'Confirm';
                $this->Order_Model->insert_order_items($c);
                $this->Order_Model->delete_cart_after_order($c->user_id);
              }
              $this->session->set_flashdata('success','Order placed successfully');
              redirect('/order');
            }
          }
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
        if ($this->Cart_Model->delete($id)) {
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
