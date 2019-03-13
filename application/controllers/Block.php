<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Block extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('Block_Model');
  }
  //list (view)
  public function lists()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Block Charges List';
        $data = components($arg);
        $data['block_list'] = $this->Block_Model->get_block_list();
        $this->load->view('superadmin/block_charges_list',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //minimum list (view)
  public function min_qty_list()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Minimum Quantity List';
        $data = components($arg);
        $data['mim_qty_list'] = $this->Block_Model->get_minimum_qty_list();
        $this->load->view('superadmin/min_qty_list',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //minimumqty (view)
  public function minimumqty()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Add Block Charges';
        $data = components($arg);
		$data['bags_list'] = $this->Block_Model->get_bags_list();
        $this->load->view('superadmin/add_minimumqty',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    }else{
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }  
  //block (view)
  public function charges()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Add Block Charges';
        $data = components($arg);
		$data['bags_list'] = $this->Block_Model->get_bags_list();
        $this->load->view('superadmin/add_block_charges',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    }else{
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  public function edit()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Add Block Charges';
        $data = components($arg);
		$id=base64_decode($this->uri->segment(3));
		$data['block_details'] = $this->Block_Model->get_block_details($id);
		$data['bags_list'] = $this->Block_Model->get_bags_list();
		//echo '<pre>';print_r($data);exit;
        $this->load->view('superadmin/edit_block_charges',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    }else{
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  } 
  // min qty edit
  public function min_qty_edit()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Add Block Charges';
        $data = components($arg);
		$id=base64_decode($this->uri->segment(3));
		$data['min_details'] = $this->Block_Model->get_min_qty_details($id);
		$data['bags_list'] = $this->Block_Model->get_bags_list();
		//echo '<pre>';print_r($data);exit;
        $this->load->view('superadmin/edit_qty_list',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    }else{
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
		 //echo '<pre>';print_r($post_data);exit;
        if ($post_data) {
          for ($i = 0; $i < count($post_data['block_type']); $i++) {
            $post_array = array(
              'bage_type' => $post_data['b_type'],
              'block_type' => $post_data['block_type'][$i],
              'block_amt' => $post_data['block_amt'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $save=$this->Block_Model->insert($post_array);
          }
		  if(count($save)>0){
			  $this->session->set_flashdata('success','Block charges created successfully');
				redirect('block/lists');
		  }else{
			$this->session->set_flashdata('error','Technical problem will occured. Please try again');
			redirect('block/charges');
		  }
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
   public function update()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
				$post_data=$this->input->post();
				$block_details= $this->Block_Model->get_block_details($post_data['i_b_c_id']);
				if($block_details['bage_type']!=$post_data['b_type']|| $block_details['block_type']!=$post_data['block_type'] || $block_details['block_amt']!=$post_data['block_amt']){
					$check=$this->Block_Model->check_exist_name($post_data['b_type'],$post_data['block_type'],$post_data['block_amt']);
					if(count($check)>0){
							$this->session->set_flashdata('error','Already exist. Please try again');
							redirect('block/edit/'.base64_encode($post_data['i_b_c_id']));
					  }
				  
				}
				$u_dat=array(
				'bage_type' => $post_data['b_type'],
				'block_type' => $post_data['block_type'],
				'block_amt' => $post_data['block_amt'],
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Block_Model->update($post_data['i_b_c_id'],$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Block charges updated successfully');
						redirect('block/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('block/edit/'.base64_encode($post_data['i_b_c_id']));
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
	public function delete()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
				$id=base64_decode($this->uri->segment(3));
				$u_dat=array(
				'status'=>2,
				'updated_at'=>date('Y-m-d H:i:s'),
				);
					$update=$this->Block_Model->update($id,$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Block charges deleted successfully');
						redirect('block/lists');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('block/lists');
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
	
	// minimum qty insrert
	 public function addmim_qty_post()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $post_data = $this->input->post();
		 //echo '<pre>';print_r($post_data);exit;
        if ($post_data) {
          for ($i = 0; $i < count($post_data['design']); $i++) {
            $post_array = array(
              'bage_type' => $post_data['b_type'],
              'design' => $post_data['design'][$i],
              'color' => $post_data['color'][$i],
              'r_size' => $post_data['r_size'][$i],
              'i_size' => $post_data['i_size'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $save=$this->Block_Model->minimum_qty_insert($post_array);
          }
		  if(count($save)>0){
			  $this->session->set_flashdata('success','Minimum qty created successfully');
				redirect('block/min_qty_list');
		  }else{
			$this->session->set_flashdata('error','Technical problem will occured. Please try again');
			redirect('block/minimumqty');
		  }
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
   public function min_qty_delete()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
				$id=base64_decode($this->uri->segment(3));
				$u_dat=array(
				'status'=>2,
				'updated_at'=>date('Y-m-d H:i:s'),
				);
					$update=$this->Block_Model->min_qty_update($id,$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Minimum Quantity deleted successfully');
						redirect('block/min_qty_list');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('block/min_qty_list');
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
	 public function min_qty_update()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		  if ($this->session->userdata('role') == 'Superadmin') {
				$post_data=$this->input->post();
				//echo '<pre>';print_r($post_data);exit;
				$min_details= $this->Block_Model->get_min_qty_details($post_data['i_m_q_id']);
				if($min_details['bage_type']!=$post_data['b_type']|| $min_details['design']!=$post_data['design'] || $min_details['color']!=$post_data['color'] || $min_details['r_size']!=$post_data['r_size'] || $min_details['i_size']!=$post_data['i_size']){
					$check=$this->Block_Model->check_min_qty_exist_name($post_data['b_type'],$post_data['design'],$post_data['color'],$post_data['r_size'],$post_data['i_size']);
					if(count($check)>0){
							$this->session->set_flashdata('error','Already exist. Please try again');
							redirect('block/min_qty_edit/'.base64_encode($post_data['i_m_q_id']));
					  }
				  
				}
				$u_dat=array(
				'bage_type' => $post_data['b_type'],
				'design' => $post_data['design'],
				'color' => $post_data['color'],
				'r_size' => $post_data['r_size'],
				'i_size' => $post_data['i_size'],
				'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Block_Model->min_qty_update($post_data['i_m_q_id'],$u_dat);
				 if(count($update)>0){
						$this->session->set_flashdata('success','Minimum updated successfully');
						redirect('block/min_qty_list');
				  }else{
					$this->session->set_flashdata('error','Technical problem will occured. Please try again');
					redirect('block/min_qty_edit/'.base64_encode($post_data['i_m_q_id']));
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
