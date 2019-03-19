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
              'additional_gsm' => $post_data['additionalgsm'][$i],
              'percentage' => $post_data['percentage'][$i],
              'cost_per_kg' => $post_data['costperkg'][$i],
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
  //edit quality
  public function edit()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Edit bag type';
      $data = components($arg);
	  $id=$this->uri->segment(3);
      $data['b_details'] = $this->Bagtype_Model->get_b_additional_details($id);
	  //echo '<pre>';print_r($data);exit;
      $this->load->view('superadmin/editbagtype',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //delete bagtype
  public function delete()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('updated_on' =>date('Y-m-d H:i:s'),'updated_by' =>$this->session->userdata('id'),'status' => 2);
	  $id=$this->uri->segment(3);
	 // echo $id;exit;
      if ($this->Bagtype_Model->update($id,$post_data)) {
         $this->session->set_flashdata('success','Bag Type deleted successfully');
         redirect($this->agent->referrer());
      } else {
        $this->session->set_flashdata('error','Please try again');
         redirect($this->agent->referrer());
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //update quality
 public function update()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				$u_dat=array(
				'bag_type'=>isset($post['bagtype'])?$post['bagtype']:'',
				'additional_gsm'=>isset($post['additionalgsm'])?$post['additionalgsm']:'',
				'percentage'=>isset($post['percentage'])?$post['percentage']:'',
				'cost_per_kg'=>isset($post['costperkg'])?$post['costperkg']:'',
				'updated_on'=>date('Y-m-d H:i:s'),
				'updated_by'=>$this->session->userdata('id'),
				);
				$update=$this->Bagtype_Model->update($post['b_type_id'],$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Bag Type updated successfully');
						 redirect('bagtype');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
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
