<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Finishing extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Bagtype_Model');
    $this->load->model('Finishing_Model');
  }
  //qualities list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Add Material';
      $data = components($arg);
		$data['size_list'] = $this->Bagtype_Model->get_active_size_list();
		$this->load->view('superadmin/addfinishing',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  } 
  //qualities list
  public function lists()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Finishing list';
      $data = components($arg);
	  $data['finishing_list']=$this->Finishing_Model->get_finishing_size_list();
	  //echo '<pre>';print_r($data);exit;
      $this->load->view('superadmin/finishing_list',$data);
    }else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  } 
  //insert quality
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
	  //echo '<pre>';print_r($post_data);exit;
      if ($post_data) {
          for ($i = 0; $i < count($post_data['finishing_size']); $i++) {
            $post_array = array(
              's_size'=>$post_data['s_size'],
              'finishing_size'=>$post_data['finishing_size'][$i],
              'created_on'=>date('Y-m-d H:i:s'),
              'created_by'=>$this->session->userdata('id'),
            );
            $save=$this->Finishing_Model->insert($post_array);
          }
		  if(count($save)>0){
			  $this->session->set_flashdata('success','Finishing Size created successfully');
				redirect('finishing/lists');
		  }else{
			$this->session->set_flashdata('error','Technical problem will occured. Please try again');
			redirect('finishing');
		  }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('finishing');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //edit quality
    public function edit()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Edit Material';
        $data = components($arg);
		$id=base64_decode($this->uri->segment(3));
		$data['size_list'] = $this->Bagtype_Model->get_active_size_list();
		$data['f_details'] = $this->Finishing_Model->get_f_details($id);
		//echo '<pre>';print_r($data);exit;
        $this->load->view('superadmin/edit_finishing',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    }else{
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //update quality
  public function update()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				$f_details = $this->Finishing_Model->get_f_details($post['i_f_s_id']);
				if($f_details['finishing_size']!=$post['finishing_size'] || $f_details['s_size']!=$post['s_size']){
					$check=$this->Finishing_Model->get_finishing_details($post['finishing_size'],$post['s_size']);
					if(count($check)>0){
						$this->session->set_flashdata('error','Already exists. Please try again');
						redirect('finishing/edit/'.base64_encode($post['i_f_s_id']));	
					}
					
				}
				//echo '<pre>';print_r($post);exit;
				$u_dat=array(
				's_size'=>isset($post['s_size'])?$post['s_size']:'',
				'finishing_size'=>isset($post['finishing_size'])?$post['finishing_size']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Finishing_Model->update($post['i_f_s_id'],$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Finishing Size updated successfully');
						redirect('finishing/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('finishing/edit/'.base64_encode($post['i_f_s_id']));
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
  //delete quality
  public function delete()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
				$id=base64_decode($this->uri->segment(3));
				$u_dat=array(
				'status'=>2,
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Finishing_Model->update($id,$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Finishing size deleted successfully');
						redirect('finishing/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('finishing/lists');
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
