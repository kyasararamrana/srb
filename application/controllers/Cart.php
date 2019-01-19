<?php
/**
 *
 */
class Cart extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('cart_model');
    $this->load->library('user_agent');
  }
  //cart - view
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Cart';
      $data = layouts($arg);
      $id = $this->session->userdata('id');
      if($id){
        $data['cart'] = $this->cart_model->get_cart_by_user_id($id);
        $this->load->view('home/cart',$data);
      } else {
        $this->session->set_flashdata('error','Please login and try again');
        redirect('home/login');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //insert cart
  public function insert()
  {
    if($this->session->userdata('logged_in') == TRUE){
      $post_data = $this->input->post();
      if ($post_data) {
        if ($this->cart_model->insert($post_data)) {
          $return['success'] = 'Item added to cart';
          $id = $this->session->userdata('id');
          if($id){
            $return['count'] = $this->cart_model->get_cart_count_by_user_id($id)->cart_count;
            $total_cart = $this->cart_model->get_cart_total_by_user_id($id)->total_cart;
            $return['total'] = number_format($total_cart,2, '.', ',');
          }
          echo json_encode($return);
        } else {
          $return['error'] = 'Please try again';
          echo json_encode($return);
        }
      } else {
        $return['error'] = 'Please try again';
        echo json_encode($return);
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //update cart
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      $post_id = $this->input->post('id');
      if ($post_data) {
        if ($this->cart_model->update($post_data,$post_id)) {
          $return['success'] = 'Item quantity updated';
        } else {
          $return['error'] = 'Please try again';
        }
      } else {
        $return['error'] = 'Please try again';
      }
      echo json_encode($return);
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
          redirect('cart');
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
