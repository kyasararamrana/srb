<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Material_Model');
  }
  //qualities list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Add Material';
      $data = components($arg);
      $this->load->view('superadmin/addmaterial',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  } 
  //qualities list
  public function lists()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Material list';
      $data = components($arg);
	  $data['material_list']=$this->Material_Model->get_material_list();
      $this->load->view('superadmin/material_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
 
  //insert quality
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
          for ($i = 0; $i < count($post_data['material']); $i++) {
            $post_array = array(
              'material' => $post_data['material'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
            );
            $save=$this->Material_Model->insert($post_array);
          }
		  if(count($save)>0){
			  $this->session->set_flashdata('success','Material created successfully');
				redirect('material/lists');
		  }else{
			$this->session->set_flashdata('error','Technical problem will occured. Please try again');
			redirect('material');
		  }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('material');
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
		$data['m_details'] = $this->Material_Model->get_m_details($id);
		//echo '<pre>';print_r($data);exit;
        $this->load->view('superadmin/edit_material',$data);
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
				$m_details = $this->Material_Model->get_m_details($post['i_m_q_id']);
				if($m_details['material']!=$post['material']){
					$check=$this->Material_Model->get_meterial_details($post['material']);
					if(count($check)>0){
						$this->session->set_flashdata('error','Already exists. Please try again');
						redirect('material/edit/'.base64_encode($post['i_m_q_id']));	
					}
					
				}
				//echo '<pre>';print_r($post);exit;
				$u_dat=array(
				'material'=>isset($post['material'])?$post['material']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Material_Model->update($post['i_m_q_id'],$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Material updated successfully');
						redirect('material/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('material/edit/'.base64_encode($post['i_m_q_id']));
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
				$update=$this->Material_Model->update($id,$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Material deleted successfully');
						redirect('material/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('material/lists');
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
