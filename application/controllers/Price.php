<?php
/**
 *
 */
class Price extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('Bagtype_Model');
  }
  //
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Price';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $this->load->view('superadmin/prices',$data);
      } else {
        $this->session->set_flashdata('error','Sorry you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //create (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Price';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $this->load->view('superadmin/price',$data);
      } else {
        $this->session->set_flashdata('error','Sorry you can\'t access');
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

        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Sorry you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }

  }
}

?>
