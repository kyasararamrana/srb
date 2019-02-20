<?php
/**
 *
 */
class Baggsm extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('Bagsize_Model');
    $this->load->model('Bagtype_Model');
    $this->load->model('Baglayout_Model');
    $this->load->model('Baggsm_Model');
  }
  //bag gsm list (view)
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag Gsm';
        $data = components($arg);
        $data['baggsms'] = $this->Baggsm_Model->get_baggsm();
        $this->load->view('superadmin/baggsms',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //bag gsm (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag Gsm';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $this->load->view('superadmin/baggsm',$data);
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
          for ($i = 0; $i < count($post_data['baggsm']); $i++) {
            $post_array = array(
              'bag_type' => $post_data['bagtype'],
              'bag_layout' => $post_data['baglayout'],
              'bag_size' => $post_data['bagsize'],
              'bag_gsm' => $post_data['baggsm'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Baggsm_Model->insert($post_array);
          }
          $this->session->set_flashdata('success','Bag gsm created successfully');
          redirect('baggsm');
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

}

?>
