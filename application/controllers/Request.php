<?php
/**
 *
 */
class Request extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('request_model');
  }
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Request';
      $data = components($arg);
      $data['requests'] = $this->request_model->get_requests();
      $this->load->view('admin/requests',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
}

?>
