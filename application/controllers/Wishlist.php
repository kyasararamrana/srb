<?php
/**
 *
 */
class Wishlist extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('wishlist_model');
  }
  //wishlist - (view)
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Wishlist';
      $data = layouts($arg);
      $user_id = $this->session->userdata('id');
      if ($user_id) {
        $data['wishlist'] = $this->wishlist_model->get_wishlist_by_userid($user_id);
      }
      $this->load->view('home/wishlist',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //wishlist insert
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $addl_data = array('product_quantity' => 1, 'created_on' => date('Y-m-d H:i:s'),'created_by' => $this->session->userdata('id'));
        $post_data = array_merge($post_data,$addl_data);
        if ($this->wishlist_model->insert($post_data)) {
          $return['success'] = 'Item added to wishlist';
          $user_id = $this->session->userdata('id');
          if ($user_id) {
            $return['count'] = $this->wishlist_model->get_wishlist_count_by_user_id($user_id)->wishlist_count;
          }
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
  //wishlist delete
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($id) {
        if ($this->wishlist_model->delete($id)) {
          $this->session->set_flashdata('success','Item removed from wishlist');
          redirect('wishlist');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('wishlist');
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('wishlist');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
}

?>
