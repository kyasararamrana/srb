<?php
/**
 *
 */
class Bag extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('Bagtype_Model');
    $this->load->model('Baglayout_Model');
    $this->load->model('Baggsm_Model');
    $this->load->model('Baggsm_Model');
    $this->load->model('Printingmethod_Model');
    $this->load->model('Printingcolortype_Model');
    $this->load->model('Printingstyle_Model');
    $this->load->model('Suggestedprintingcolor_Model');
    $this->load->model('Printinglanguage_Model');
  }
  //
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $data['printingmethod'] = $this->Printingmethod_Model->get_active_printingmethod();
        $data['printingcolortype'] = $this->Printingcolortype_Model->get_active_printingcolortype();
        $data['printingstyle'] = $this->Printingstyle_Model->get_active_printingstyle();
        $data['suggestedprintingcolor'] = $this->Suggestedprintingcolor_Model->get_active_suggestedprintingcolor();
        $data['printinglanguage'] = $this->Printinglanguage_Model->get_active_printinglanguage();
        $this->load->view('superadmin/bag',$data);
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->sesion->userdata('error','Please login and try again');
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
          $addl_data = array(
            'created_on' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id'),
            'status' => 1
          );
          $post_data = array_merge($post_data,$addl_data);
          if ($this->Bag_Model->insert($post_data)) {
            $this->session->set_flashdata('success','Bag details created succssfully');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect($this->agent->referrer());
          }
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->sesion->userdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //getting bag layout by bag type (ajax call)
  public function get_baglayout_by_bagtype()
  {
    $bag_type = $this->input->post('bag_type');
    if ($bag_type) {
      $result = $this->Baglayout_Model->get_baglayout_by_bagtype($bag_type);
      if ($result) {
        echo '<option value="">Select</option>';
        foreach($result as $res) {
          echo '<option value="'.$res->id.'">'.$res->bag_layout.'</option>';
        }
        exit(0);
      } else {
        echo '<option value="">No bag layout found</option>';exit(0);
      }
    }
  }
  //getting bag size by bag layout (ajax call)
  public function get_bagsize_by_baglayout()
  {
    $bag_layout = $this->input->post('bag_layout');
    if ($bag_layout) {
      $result = $this->Baglayout_Model->get_bagsize_by_baglayout($bag_layout);
      if ($result) {
        echo '<option value="">Select</option>';
        foreach($result as $res) {
          echo '<option value="'.$res->id.'">'.$res->bag_size.'</option>';
        }
        exit(0);
      } else {
        echo '<option value="">No bag size found</option>';exit(0);
      }
    }
  }
  //getting bag gsm by bag size (ajax call)
  public function get_baggsm_by_bagsize()
  {
    $bag_size = $this->input->post('bag_size');
    if ($bag_size) {
      $result = $this->Baggsm_Model->get_baggsm_by_bagsize($bag_size);
      if ($result) {
        echo '<option value="">Select</option>';
        foreach($result as $res) {
          echo '<option value="'.$res->id.'">'.$res->bag_gsm.'</option>';
        }
        exit(0);
      } else {
        echo '<option value="">No bag gsm found</option>';exit(0);
      }
    }
  }

}

?>
