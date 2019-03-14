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
    $this->load->model('Bag_Model');
    $this->load->model('Bagtype_Model');
    $this->load->model('Baglayout_Model');
    $this->load->model('Bagcolor_Model');
    $this->load->model('Baggsm_Model');
    $this->load->model('Printingmethod_Model');
    $this->load->model('Printingcolortype_Model');
    $this->load->model('Printingstyle_Model');
    $this->load->model('Suggestedprintingcolor_Model');
    $this->load->model('Printinglanguage_Model');
  }
  //bag list (view)
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag';
        $data = components($arg);
        $data['bags'] = $this->Bag_Model->get_bags();
        $this->load->view('superadmin/bags',$data);
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->userdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //bag (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $data['bagcolor'] = $this->Bagcolor_Model->get_active_bagcolor();
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
      $this->session->userdata('error','Please login and try again');
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
            redirect('bag');
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
      $this->session->userdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //edit (view)
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Bag';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $data['bagcolor'] = $this->Bagcolor_Model->get_active_bagcolor();
        $data['printingmethod'] = $this->Printingmethod_Model->get_active_printingmethod();
        $data['printingcolortype'] = $this->Printingcolortype_Model->get_active_printingcolortype();
        $data['printingstyle'] = $this->Printingstyle_Model->get_active_printingstyle();
        $data['suggestedprintingcolor'] = $this->Suggestedprintingcolor_Model->get_active_suggestedprintingcolor();
        $data['printinglanguage'] = $this->Printinglanguage_Model->get_active_printinglanguage();
        $data['bag'] = $this->Bag_Model->get_bag_by_id($id);
        $this->load->view('superadmin/bag',$data);
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->userdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //update
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $post_data = $this->input->post();
        if ($post_data) {
          $post_id = $this->input->post('id');
          if ($this->Bag_Model->update($post_data,$post_id)) {
            $this->session->set_flashdata('success','Bag details updated succssfully');
            redirect('bag');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect($this->agent->referrer());
          }
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t assess');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //delete
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $post_data = array( 'status' => 0 );
        if ($this->Bag_Model->update($post_data,$id)) {
          $this->session->set_flashdata('success','Bag details deleted successfully');
          redirect('bag');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t assess');
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
    $layout = $this->input->post('layout');
    if ($bag_type) {
      $result = $this->Baglayout_Model->get_baglayout_by_bagtype($bag_type);
      if (count($result) > 0) {
        echo '<option value="">Select</option>';
        foreach($result as $res) {
          $selected = (isset($layout) && ($layout == $res->id)) ? "selected":"";
          echo '<option value="'.$res->id.'" '.$selected.'>'.$res->bag_layout.'</option>';
        }
        exit(0);
      } else {
        echo '<option value="">No bag layout found</option>';exit(0);
      }
    }
  }
  
  // get cost for kg amount
  public function get_bag_per_kg_amount()
  {
		$post=$this->input->post();
		$details=$this->Baglayout_Model->get_bag_per_kg_amount($post['bag_type']);
		//echo $this->db->last_query();exit;
		if(count($details) > 0)
				{
				$data['msg']=1;
				$data['amt']=$details['cost_per_kg'];
				$data['percent']=$details['percentage'];
				$data['gsm']=$details['additional_gsm'];
				echo json_encode($data);exit;	
				}else{
					$data['msg']=2;
					$data['amt']='';
					$data['percent']='';
					$data['gsm']='';
					echo json_encode($data);exit;
				}
  } 
  // get handle cost 
  public function get_handle_cost()
  {
		$post=$this->input->post();
		$details=$this->Baglayout_Model->get_handle_cost($post['handle_type']);
		//echo $this->db->last_query();exit;
		if(count($details) > 0)
				{
				$data['msg']=1;
				$data['amt']=$details['material'];
				echo json_encode($data);exit;	
				}else{
					$data['msg']=2;
					$data['amt']='';
					echo json_encode($data);exit;
				}
  }
  //getting bag size by bag layout (ajax call)
  public function get_bagsize_by_baglayout()
  {
    $bag_layout = $this->input->post('bag_layout');
    $size = $this->input->post('size');
    if ($bag_layout) {
      $result = $this->Baglayout_Model->get_bagsize_by_baglayout($bag_layout);
      if (count($result) > 0) {
        echo '<option value="">Select</option>';
        foreach($result as $res) {
          $selected = (isset($size) && ($size == $res->id)) ? "selected":"";
          echo '<option value="'.$res->id.'" '.$selected.'>'.$res->bag_size.'</option>';
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
    $gsm = $this->input->post('gsm');
    if ($bag_size) {
      $result = $this->Baggsm_Model->get_baggsm_by_bagsize($bag_size);
      if (count($result) > 0) {
        echo '<option value="">Select</option>';
        foreach($result as $res) {
          $selected = (isset($gsm) && ($gsm == $res->id)) ? "selected":"";
          echo '<option value="'.$res->id.'" '.$selected.'>'.$res->bag_gsm.'</option>';
        }
        exit(0);
      } else {
        echo '<option value="">No bag gsm found</option>';exit(0);
      }
    }
  }
  //get other charges, printing charges, block changes by bag type
  public function get_bag_additional_details()
  {
    $bag_type = $this->input->post('bag_type');
    if ($bag_type) {
      $result = $this->Bagtype_Model->get_bag_additional_details($bag_type);
      echo json_encode($result);
    }
  }

}

?>
