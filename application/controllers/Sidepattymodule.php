<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidepattymodule extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Color_Model');
  }
  //orders list
  public function orderslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders';
        $data = components($arg);
      $this->load->view('sidepatty/orders_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function addsidepatty()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Sidepatty';
        $data = components($arg);
      $this->load->view('sidepatty/add_sidepatty',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function sidepattylist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Sidepatty List';
        $data = components($arg);
		$this->load->model('Sidepatty_Model');
	  $data['s_list']=$this->Sidepatty_Model->get_sidepatty_list($this->session->userdata('id'));
      $this->load->view('sidepatty/sidepatty_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function editsidepatty()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
        $arg['pageTitle'] = 'Sidepatty Edit';
        $data = components($arg);
		$this->load->model('Sidepatty_Model');
		$data['s_details']=$this->Sidepatty_Model->get_sidepatty_details(base64_decode($this->uri->segment(3)));
        $this->load->view('sidepatty/edit_sidepatty',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
 
  public function orderstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'add Order Stock';
        $data = components($arg);
		$this->load->model('Sidepatty_Model');
		$l_id=$this->session->userdata('id');
		$data['type_list']=$this->Sidepatty_Model->get_s_type_list($l_id);
		$data['size_list']=$this->Sidepatty_Model->get_s_size_list($l_id);
		$data['color_list']=$this->Sidepatty_Model->get_s_color_list($l_id);
		$data['gsm_list']=$this->Sidepatty_Model->get_s_gsm_list($l_id);
		$data['print_type_list']=$this->Sidepatty_Model->get_print_type_list($l_id);
		$data['print_color_list']=$this->Sidepatty_Model->get_print_color_list($l_id);
		//echo '<pre>';print_r($data);exit;
        $this->load->view('sidepatty/order_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  } 
  public function orderstocklist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'add Order Stock';
        $data = components($arg);
		$this->load->model('Sidepatty_Model');
		$data['order_stock_list']=$this->Sidepatty_Model->get_order_stock_list($this->session->userdata('id'));
		//echo '<pre>';print_r($data);exit;
        $this->load->view('sidepatty/stock_orders_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function printing()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Printing';
        $data = components($arg);
		$data['tab']=base64_decode($this->uri->segment(3));
		$this->load->model('Sidepatty_Model');
		$data['p_list']=$this->Sidepatty_Model->get_printing_list($this->session->userdata('id'));
		//echo '<pre>';print_r($data);exit;
		$this->load->view('sidepatty/printing',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function editprint()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Printing';
        $data = components($arg);
		$this->load->model('Sidepatty_Model');
		$data['p_details']=$this->Sidepatty_Model->get_printing_details(base64_decode($this->uri->segment(3)));
		//echo '<pre>';print_r($data);exit;
		$this->load->view('sidepatty/editprinting',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  // add sidepatty
  public  function addpost(){
			if ($this->session->userdata('logged_in') == TRUE) {
				 $post=$this->input->post();
			   $cnt=0;foreach($post['s_type'] as $li){
				   if($li!=''){
				   $add=array(
					   's_type'=>isset($post['s_type'][$cnt])?$post['s_type'][$cnt]:'',
					   's_size'=>isset($post['s_size'][$cnt])?$post['s_size'][$cnt]:'',
					   's_color'=>isset($post['s_color'][$cnt])?$post['s_color'][$cnt]:'',
					   's_gsm'=>isset($post['s_gsm'][$cnt])?$post['s_gsm'][$cnt]:'',
					   's_qty'=>isset($post['s_qty'][$cnt])?$post['s_qty'][$cnt]:'',
					   's_created_by'=>$this->session->userdata('id'),
				    );
					$this->load->model('Sidepatty_Model');
					$save=$this->Sidepatty_Model->save_Sidepatty_data($add);
				   }
				 $cnt++;}
				 if(count($save)>0){
					 $this->session->set_flashdata('success','Stock added successfully');
					redirect('sidepattymodule/sidepattylist');
				 }else{
					$this->session->set_flashdata('error','Please try again');
					redirect('sidepattymodule/addsidepatty'); 
				 }
				//echo '<pre>';print_r($post);exit;
		  
			} else {
			$this->session->set_flashdata('error','Please login and try again');
			redirect('login');
			}
  } 
  // edit sidepatty
  public  function editpost(){
			if ($this->session->userdata('logged_in') == TRUE) {
					$post=$this->input->post();
				    $u_add=array(
					   's_type'=>isset($post['s_type'])?$post['s_type']:'',
					   's_size'=>isset($post['s_size'])?$post['s_size']:'',
					   's_color'=>isset($post['s_color'])?$post['s_color']:'',
					   's_gsm'=>isset($post['s_gsm'])?$post['s_gsm']:'',
					   's_qty'=>isset($post['s_qty'])?$post['s_qty']:'',
					   's_updated_at'=>date('Y-m-d H:i:s'),
				    );
					$this->load->model('Sidepatty_Model');
					$update=$this->Sidepatty_Model->update($post['s_id'],$u_add);
					 if(count($update)>0){
						 $this->session->set_flashdata('success','Stock updated successfully');
						redirect('sidepattymodule/sidepattylist');
					 }else{
						$this->session->set_flashdata('error','Please try again');
						redirect('sidepattymodule/editsidepatty/'.base64_encode($post['s_id'])); 
					 }
				
			}else{
				$this->session->set_flashdata('error','Please login and try again');
				redirect('login');
			}
  } public  function deletesidepatty(){
			if ($this->session->userdata('logged_in') == TRUE) {
				    $u_add=array(
					   's_status'=>2,
					   's_updated_at'=>date('Y-m-d H:i:s'),
				    );
					$this->load->model('Sidepatty_Model');
					$update=$this->Sidepatty_Model->update(base64_decode($this->uri->segment(3)),$u_add);
					 if(count($update)>0){
						 $this->session->set_flashdata('success','Stock deleted successfully');
						 redirect('sidepattymodule/sidepattylist');
					 }else{
						$this->session->set_flashdata('error','Please try again');
						redirect('sidepattymodule/sidepattylist');
					 }
				
			}else{
				$this->session->set_flashdata('error','Please login and try again');
				redirect('login');
			}
  }
  //add printing
   public  function printaddpost(){
			if ($this->session->userdata('logged_in') == TRUE) {
				 $post=$this->input->post();
				 //echo '<pre>';print_r($post);exit;
			   $cnt=0;foreach($post['p_type'] as $li){
				   if($li!=''){
				   $add=array(
					   'p_type'=>isset($post['p_type'][$cnt])?$post['p_type'][$cnt]:'',
					   'p_color'=>isset($post['p_color'][$cnt])?$post['p_color'][$cnt]:'',
					   'p_created_by'=>$this->session->userdata('id'),
				    );
					$this->load->model('Sidepatty_Model');
					$save=$this->Sidepatty_Model->save_print_insert($add);
				   }
				 $cnt++;}
				 if(count($save)>0){
					 $this->session->set_flashdata('success','Stock added successfully');
					  redirect('sidepattymodule/printing/'.base64_encode(1));
				 }else{
					$this->session->set_flashdata('error','Please try again');
					redirect('sidepattymodule/printing'); 
				 }
				//echo '<pre>';print_r($post);exit;
		  
			} else {
			$this->session->set_flashdata('error','Please login and try again');
			redirect('login');
			}
  }
  public  function printeditpost(){
			if ($this->session->userdata('logged_in') == TRUE) {
				 $post=$this->input->post();
				    $u_add=array(
					   'p_type'=>isset($post['p_type'])?$post['p_type']:'',
					   'p_color'=>isset($post['p_color'])?$post['p_color']:'',
					   'p_created_at'=>date('Y-m-d H:i:s'),
				    );
					$this->load->model('Sidepatty_Model');
					$update=$this->Sidepatty_Model->update_printing($post['s_id'],$u_add);
					 if(count($update)>0){
						 $this->session->set_flashdata('success','Printing updated successfully');
						 redirect('sidepattymodule/printing/'.base64_encode(1));
					 }else{
						$this->session->set_flashdata('error','Please try again');
						redirect('sidepattymodule/printing/'.base64_encode(1));
					 }
				
			}else{
				$this->session->set_flashdata('error','Please login and try again');
				redirect('login');
			}
  } 
  public  function deleteprint(){
			if ($this->session->userdata('logged_in') == TRUE) {
				    $u_add=array(
					   'p_status'=>2,
					   'p_created_at'=>date('Y-m-d H:i:s'),
				    );
					$this->load->model('Sidepatty_Model');
					$update=$this->Sidepatty_Model->update_printing(base64_decode($this->uri->segment(3)),$u_add);
					 if(count($update)>0){
						 $this->session->set_flashdata('success','Printing deleted successfully');
						 redirect('sidepattymodule/printing/'.base64_encode(1));
					 }else{
						$this->session->set_flashdata('error','Please try again');
						redirect('sidepattymodule/printing/'.base64_encode(1));
					 }
				
			}else{
				$this->session->set_flashdata('error','Please login and try again');
				redirect('login');
			}
  }
  public  function addorder_post(){
			if ($this->session->userdata('logged_in') == TRUE) {
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				    $add=array(
					   'o_sname'=>isset($post['o_sname'])?$post['o_sname']:'',
					   'o_type'=>isset($post['o_type'])?$post['o_type']:'',
					   'o_size'=>isset($post['o_size'])?$post['o_size']:'',
					   'o_color'=>isset($post['o_color'])?$post['o_color']:'',
					   'o_gsm'=>isset($post['o_gsm'])?$post['o_gsm']:'',
					   'o_p_type'=>isset($post['o_p_type'])?$post['o_p_type']:'',
					   'o_p_color'=>isset($post['o_p_color'])?$post['o_p_color']:'',
					   'o_qty'=>isset($post['qty'])?$post['qty']:'',
					   'o_created_at'=>date('Y-m-d H:i:s'),
					   'o_updated_at'=>date('Y-m-d H:i:s'),
					   'o_created_by'=>$this->session->userdata('id'),
				    );
					$this->load->model('Sidepatty_Model');
					$save=$this->Sidepatty_Model->insert_stock_order($add);
					 if(count($save)>0){
						 $this->session->set_flashdata('success','Stock added successfully');
						 redirect('sidepattymodule/orderstocklist');
					 }else{
						$this->session->set_flashdata('error','Please try again');
						redirect('sidepattymodule/orderstock');
					 }
				
			}else{
				$this->session->set_flashdata('error','Please login and try again');
				redirect('login');
			}
  }
  //delete order 
  public  function deleteorderstock(){
			if ($this->session->userdata('logged_in') == TRUE) {
				    $u_add=array(
					   'o_status'=>2,
					   'o_updated_at'=>date('Y-m-d H:i:s'),
				    );
					$this->load->model('Sidepatty_Model');
					$update=$this->Sidepatty_Model->update_order_stock(base64_decode($this->uri->segment(3)),$u_add);
					 if(count($update)>0){
						 $this->session->set_flashdata('success','Stock deleted successfully');
						 redirect('sidepattymodule/orderstocklist');
					 }else{
						$this->session->set_flashdata('error','Please try again');
						 redirect('sidepattymodule/orderstocklist');
					 }
				
			}else{
				$this->session->set_flashdata('error','Please login and try again');
				redirect('login');
			}
  }
  public function update_s_s_o_qty(){
		 if ($this->session->userdata('logged_in') == TRUE){
			 $post=$this->input->post();
			 $u_add=array('o_qty'=>$post['u_qty'],'o_updated_at'=>date('Y-m-d H:i:s')); 
			 $this->load->model('Sidepatty_Model');
			 $update=$this->Sidepatty_Model->update_order_stock($post['o_id'],$u_add);
			 if(count($update)>0){
				 $data['msg']=1;
				echo json_encode($data);exit;
			 }else{
				 $data['msg']=0;
				 echo json_encode($data);exit;
			 }
		 }else{
			$this->session->set_flashdata('error','Please login and try again');
			redirect('login');
		 }
	}
}