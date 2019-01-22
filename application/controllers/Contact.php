<?php
/**
 *
 */
class Contact extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('request_model');
  }
  //contact - (view)
  public function index()
  {
    $arg['pageTitle'] = 'Contact';
    $data = layouts($arg);
    $this->load->view('home/contact',$data);
  }
  //contact - insert
  public function insert()
  {
    $post_data = $this->input->post();
    if ($post_data) {
      $addl_data = array('created_on' => date('Y-m-d H:i:s'));
      $post_data = array_merge($post_data,$addl_data);
      if ($this->request_model->insert($post_data)) {
        $this->session->set_flashdata('success','Contact information saved successfully');
        redirect('/contact');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('/contact');
      }
    } else {
      $this->session->set_flashdata('error','Please try again');
      redirect('/contact');
    }
  }
}

?>
