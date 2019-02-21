<?php
/**
 *
 */
class Printingcolortype extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Printingcolortype_Model');
  }
  //
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Printing Method';
        $data = components($arg);
        $data['printingcolortypes'] = $this->Printingcolortype_Model->get_printingcolortype();
        $this->load->view('superadmin/printingcolortypes',$data);
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
        $arg['pageTitle'] = 'Printing Color Type';
        $data = components($arg);
        $this->load->view('superadmin/printingcolortype',$data);
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
          for ($i = 0; $i < count($post_data['printingcolortype']); $i++) {
            $post_array = array(
              'printing_color_type' => $post_data['printingcolortype'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Printingcolortype_Model->insert($post_array);
          }
          $this->session->set_flashdata('success','Printing color type created successfully');
          redirect('printingcolortype');
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
