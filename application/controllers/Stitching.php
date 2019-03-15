<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Stitching extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Stitching_Model');
    $this->load->model('Bagtype_Model');
    $this->load->model('Price_Model');
  }
  //qualities list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Add Stitching Type';
      $data = components($arg);
      $this->load->view('superadmin/addstitching',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  } 
  //qualities list
  public function lists()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stitching list';
      $data = components($arg);
	  $data['stitching_list']=$this->Stitching_Model->get_stitching_list();
	  //echo '<pre>';print_r($data);exit;
      $this->load->view('superadmin/stitching_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
 
  //insert type
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
	  //echo '<pre>';print_r($post_data);exit;
      if ($post_data) {
          for ($i = 0; $i < count($post_data['stitching_type']); $i++) {
            $post_array = array(
              'stitching_type' => $post_data['stitching_type'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
            );
            $save=$this->Stitching_Model->insert($post_array);
          }
		  if(count($save)>0){
			  $this->session->set_flashdata('success','Stitching Type created successfully');
				redirect('stitching/lists');
		  }else{
			$this->session->set_flashdata('error','Technical problem will occured. Please try again');
			redirect('stitching');
		  }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('stitching');
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
		$data['s_details'] = $this->Stitching_Model->get_s_details($id);
		//echo '<pre>';print_r($data);exit;
        $this->load->view('superadmin/edit_stitching',$data);
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
				$s_details = $this->Stitching_Model->get_s_details($post['i_s_t_id']);
				if($s_details['stitching_type']!=$post['stitching_type']){
					$check=$this->Stitching_Model->get_stitching_details($post['stitching_type']);
					if(count($check)>0){
						$this->session->set_flashdata('error','Already exists. Please try again');
						redirect('stitching/edit/'.base64_encode($post['i_s_t_id']));	
					}
					
				}
				//echo '<pre>';print_r($post);exit;
				$u_dat=array(
				'stitching_type'=>isset($post['stitching_type'])?$post['stitching_type']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Stitching_Model->update($post['i_s_t_id'],$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Stitching Type updated successfully');
						redirect('stitching/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('stitching/edit/'.base64_encode($post['i_m_q_id']));
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
				$update=$this->Stitching_Model->update($id,$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Stitching deleted successfully');
						redirect('stitching/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('stitching/lists');
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
	// priceadd
	  public function addprice()
	  {
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
			$arg['pageTitle'] = 'Price';
			$data = components($arg);
			$data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
			$data['material_type'] = $this->Bagtype_Model->get_active_material();
			$data['quality_type'] = $this->Bagtype_Model->get_active_quality();
			$data['size_list'] = $this->Bagtype_Model->get_active_size_list();
			$data['gsm_list'] = $this->Bagtype_Model->get_active_gsm_list();
			$data['handle_rate_cost'] = $this->Bagtype_Model->get_active_handle_rate_cost();
			$data['stitching_type_list'] = $this->Bagtype_Model->get_active_stitching_type_list();
			$data['printing_list'] = $this->Bagtype_Model->get_active_printing_list();
			$data['printingcolortype'] = $this->Bagtype_Model->get_active_printingcolortype();
			$this->load->view('superadmin/stitchingprice',$data);
		  } else {
			$this->session->set_flashdata('error','Sorry you can\'t access');
			redirect('admin');
		  }
		} else {
		  $this->session->set_flashdata('error','Please login and try again');
		  redirect('admin/login');
		}
	  }
	  
	  //price list (view)
  public function pricelist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Price';
        $data = components($arg);
        $bag_type = $this->input->post('bag_type');
        $data['filter'] = $bag_type;
        $data['bagtype'] = $this->Bagtype_Model->get_bagtype();
        if (isset($bag_type) && !empty($bag_type)) {
          $data['price'] = $this->Price_Model->get_stitching_price($bag_type);
        } else {
          $data['price'] = $this->Price_Model->get_stitching_price();
        }
		//echo '<pre>';print_r($data);exit;
        $this->load->view('superadmin/stitchingpricelist',$data);
      } else {
        $this->session->set_flashdata('error','Sorry you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
	   public function stitchinginsert()
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
          $post_data = array_merge($post_data, $addl_data);
          if ($this->Price_Model->insert($post_data)) {
            $this->session->set_flashdata('success','Price details created successfully');
            redirect('stitching/pricelist');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect($this->agent->referrer());
          }
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect($this->agent->referrer());
        }
      } else {
        $this->session->set_flashdata('error','Sorry you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  

}

?>
