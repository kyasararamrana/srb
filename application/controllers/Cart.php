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
    // code...
  }
  //insert
  public function insert()
  {
    if($this->session->userdata('logged_in') == TRUE){
      $post_data = $this->input->post();
      if ($post_data) {
        if ($this->cart_model->insert($post_data)) {
          $return['success'] = 'Item added to cart';
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

}

?>
