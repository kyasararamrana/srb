<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Handle extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Handle_Model');
  }
  //handle list (view)
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Handle';
        $data = components($arg);
        $data['handles'] = $this->Handle_Model->get_handle();
        $this->load->view('handle/handles',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //orders list
  public function orders()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Orders';
        $data = components($arg);
        $this->load->view('handle/orders_list',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //handle (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Handle';
        $data = components($arg);
        $this->load->view('handle/handle',$data);
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
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
      if ($this->session->userdata('role') == 'Handle') {
        $post_data = $this->input->post();
        if ($post_data) {
          for ($i = 0; $i < count($post_data['type']) ; $i++) {
            $post_array = array(
              'type' => $post_data['type'][$i],
              'material' => $post_data['material'][$i],
              'size' => $post_data['size'][$i],
              'color' => $post_data['color'][$i],
              'gsm' => $post_data['gsm'][$i],
              'quantity' => $post_data['quantity'][$i],
              'created_on' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Handle_Model->insert($post_array);
          }
          $this->session->set_flashdata('success','Handle details created successfully');
          redirect('handle');
        } else {
          $this->session->userdata('error','Please try again');
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
      if ($this->session->userdata('role') == 'Handle') {
        $arg['pageTitle'] = 'Handle';
        $data = components($arg);
        $data['handle'] = $this->Handle_Model->get_handle_by_id($id);
        $this->load->view('handle/handle',$data);
      } else {
        $this->session->userdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //update
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $post_data = $this->input->post();
        $post_id = $this->input->post('id');
        if ($post_data) {
          for ($i = 0; $i < count($post_data['type']) ; $i++) {
            $post_array = array(
              'type' => $post_data['type'][$i],
              'material' => $post_data['material'][$i],
              'size' => $post_data['size'][$i],
              'color' => $post_data['color'][$i],
              'gsm' => $post_data['gsm'][$i],
              'quantity' => $post_data['quantity'][$i],
              'updated_on' => date('Y-m-d H:i:s'),
              'updated_by' => $this->session->userdata('id'),
              'status' => 1
            );
            $this->Handle_Model->update($post_array,$post_id);
          }
          $this->session->set_flashdata('success','Handle details updated successfully');
          redirect('handle');
        } else {
          $this->session->userdata('error','Please try again');
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
  //delete
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Handle') {
        $post_data = array('status' => 0);
        if ($this->Handle_Model->update($post_data,$id)) {
          $this->session->set_flashdata('success','Handle details deleted succssfully');
          redirect('handle');
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
  public function handlelist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Handle';
      $data = components($arg);
      $this->load->view('handle/handle_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function edithandle()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Handle';
      $data = components($arg);
      $this->load->view('handle/edit_handle',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function orderstocklist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Stock List';
      $data = components($arg);
	 $data['hanlde_list']=$this->Handle_Model->get_hanlde_list();
      $this->load->view('handle/stock_orders_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function orderstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Stock';
      $data = components($arg);
	  $data['material_type']=$this->Handle_Model->get_material_type();
	  $data['type_list']=$this->Handle_Model->get_type();
	  $data['size_list']=$this->Handle_Model->get_size();
	  $data['color_list']=$this->Handle_Model->get_color();
	  $data['gsm_list']=$this->Handle_Model->get_gsm();
      $this->load->view('handle/order_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
    public function update_h_s_o_qty(){
		 if ($this->session->userdata('logged_in') == TRUE){
			 $post=$this->input->post();
			 $u_add=array('quantity'=>$post['u_qty'],'updated_at'=>date('Y-m-d H:i:s')); 
			 $update=$this->Handle_Model->update_handle_stock($post['h_id'],$u_add);
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
	//delete order 
  public  function deleteorderstock(){
			if ($this->session->userdata('logged_in') == TRUE) {
				    $u_add=array(
					   'status'=>2,
					   'updated_at'=>date('Y-m-d H:i:s'),
				    );
					$update=$this->Handle_Model->update_handle_stock(base64_decode($this->uri->segment(3)),$u_add);
					 if(count($update)>0){
						 $this->session->set_flashdata('success','Stock deleted successfully');
						 redirect('handle/orderstocklist');
					 }else{
						$this->session->set_flashdata('error','Please try again');
						 redirect('handle/orderstocklist');
					 }
				
			}else{
				$this->session->set_flashdata('error','Please login and try again');
				redirect('login');
			}
  }
  // add handle post
  public function addpost()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
		$post=$this->input->post();
			$add=array(
			   'stock_name'=>isset($post['stock_name'])?$post['stock_name']:'',
			   'mtype'=>isset($post['mtype'])?$post['mtype']:'',
			   'type'=>isset($post['type'])?$post['type']:'',
			   'size'=>isset($post['size'])?$post['size']:'',
			   'color'=>isset($post['color'])?$post['color']:'',
			   'gsm'=>isset($post['gsm'])?$post['gsm']:'',
			   'quantity'=>isset($post['quantity'])?$post['quantity']:'',
			   'created_at'=>date('Y-m-d H:i:s'),
			   'updated_at'=>date('Y-m-d H:i:s'),
			   'created_by'=>$this->session->userdata('id'),
			);
					$save=$this->Handle_Model->insert_stock_order($add);
					 if(count($save)>0){
						 $this->session->set_flashdata('success','Stock added successfully');
						 redirect('handle/orderstocklist');
					 }else{
						$this->session->set_flashdata('error','Please try again');
						redirect('handle/orderstock');
					 }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
}
