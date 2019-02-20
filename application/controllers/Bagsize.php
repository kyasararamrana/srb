<?php
/**
 *
 */
class Bagsize extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('Baglayout_Model');
    $this->load->model('Bagsize_Model');
  }
  //bag sizes list (view)
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag Size';
        $data = components($arg);
        $data['bagsizes'] = $this->Bagsize_Model->get_bagsize();
        $this->load->view('superadmin/bagsizes',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //bag size (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag Size';
        $data = components($arg);
        $data['baglayouts'] = $this->Baglayout_Model->get_active_baglayout();
        $this->load->view('superadmin/bagsize',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //insert
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $post_data = $this->input->post();
        if ($post_data) {
          for ($i = 0; $i < count($post_data['bagsize']); $i++) {
            $post_array = array(
              'bag_layout' => $post_data['baglayout'],
              'bag_size' => $post_data['bagsize'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Bagsize_Model->insert($post_array);
            $this->session->set_flashdata('success','Bag size created successfully');
            redirect('bagsize');
          }
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }

}

?>
