<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagtype extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('Bagtype_Model');
  }
  //bag type list (view)
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag Type';
        $data = components($arg);
        $data['bagtypes'] = $this->Bagtype_Model->get_bagtype();
        $this->load->view('superadmin/bagtypes',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //bag type (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag Type';
        $data = components($arg);
        $this->load->view('superadmin/bagtype',$data);
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
          for ($i = 0; $i < count($post_data['bagtype']); $i++) {
            $post_array = array(
              'bag_type' => $post_data['bagtype'][$i],
              'other_charges' => $post_data['othercharges'][$i],
              'printing_cost' => $post_data['printingcost'][$i],
              'block_charges' => $post_data['blockcharges'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Bagtype_Model->insert($post_array);
          }
          $this->session->set_flashdata('success','Bag type created successfully');
          redirect('bagtype');
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
