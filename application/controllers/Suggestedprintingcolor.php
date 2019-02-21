<?php
/**
 *
 */
class Suggestedprintingcolor extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Suggestedprintingcolor_Model');
  }
  //
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Printing Style';
        $data = components($arg);
        $data['suggestedprintingcolors'] = $this->Suggestedprintingcolor_Model->get_suggestedprintingcolor();
        $this->load->view('superadmin/suggestedprintingcolors',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //create
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Suggested Printing Color';
        $data = components($arg);
        $this->load->view('superadmin/suggestedprintingcolor',$data);
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
          for ($i = 0; $i < count($post_data['suggestedprintingcolor']); $i++) {
            $post_array = array(
              'suggested_printing_color' => $post_data['suggestedprintingcolor'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Suggestedprintingcolor_Model->insert($post_array);
          }
          $this->session->set_flashdata('success','Suggested printing color created successfully');
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
