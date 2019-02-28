<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Vendor_Model');
  }
  
  public function add()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Vendor add';
      $data = components($arg);
      $this->load->view('inventory/vendor/add',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function lists()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Vendor List';
      $data = components($arg);
	  $data['vendor_list']=$this->Vendor_Model->get_vendor_lists($this->session->userdata('id'));
      $this->load->view('inventory/vendor/list',$data);
    }else{
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function view()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Vendor view';
      $data = components($arg);
	  $data['v_details']=$this->Vendor_Model->get_v_details(base64_decode($this->uri->segment(3)));
      $this->load->view('inventory/vendor/view',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  
  public function edit()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Vendor edit';
      $data = components($arg);
	  $data['v_details']=$this->Vendor_Model->get_v_details(base64_decode($this->uri->segment(3)));
      $this->load->view('inventory/vendor/edit',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
 
  //insert vendor
  public function addpost()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
        $post_data = $this->input->post();
		//echo '<pre>';print_r($post_data);exit;
        if ($post_data) {
         
		  if(isset($post_data['v_id'])&& $post_data['v_id']!=''){
			   $addl_data = array('v_updated_at' => date('Y-m-d H:i:s'));
		  }else{
			   $addl_data = array(
				'v_u_id' => time(),
					'v_created_at' => date('Y-m-d H:i:s'),
				'v_created_by' => $this->session->userdata('id'),
				'v_status' => 1
			);
		  }
			$post_data = array_merge($post_data,$addl_data);
				if(isset($post_data['v_id'])&& $post_data['v_id']!=''){				 
				 $save=$this->Vendor_Model->update($post_data['v_id'],$post_data);
				}else{
					$save=$this->Vendor_Model->insert($post_data);				 
				}
				if(count($save)>0){
					if(isset($post_data['v_id'])&& $post_data['v_id']!=''){
					$this->session->set_flashdata('success','Vendor updated successfully');
					}else{
						$this->session->set_flashdata('success','Vendor added successfully');
					}
					redirect('vendor/lists');
				} else {
					$this->session->set_flashdata('error','Please try again');
					redirect($this->agent->referrer());
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
  //roles list
  public function deletes()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
				$addl_data = array(
				'v_updated_at' => date('Y-m-d H:i:s'),
				'v_status' => 2
				);
			if ($this->Vendor_Model->update(base64_decode($this->uri->segment(3)),$addl_data)){
				$this->session->set_flashdata('success','Vendor deleted successfully');
				redirect('vendor/lists');
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
  //delete user
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
        $post_data = array('status' => '0');
        if ($this->Admin_Model->update($post_data,$id)) {
          $this->session->set_flashdata('success','Role deleted successfully');
          redirect('inventory/roles');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('inventory/roles');
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
  //edit role - (view)
  public function editrole($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
        $arg['pageTitle'] = 'Roles';
        $data = components($arg);
        $data['user'] = $this->Admin_Model->get_user_by_id($id);
        $this->load->view('inventory/role',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
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
      if ($this->session->userdata('role') == 'Inventory') {
        $post_data = $this->input->post();
        if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
          $config['upload_path']   = './assets/uploads/admin/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_width']     = 128;
          $config['max_height']    = 128;
          $config['encrypt_name']  = TRUE;
          $this->load->library('upload', $config);
          if ( ! $this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error',$error);
            redirect($this->agent->referrer());
          } else {
            $post_uploaded_image = $this->input->post('uploaded_image');
            @unlink('./assets/uploads/admin/'.$post_uploaded_image);
            $file_name = $this->upload->data('file_name');
          }
        }  else {
          $file_name = $this->input->post('uploaded_image');
        }
        unset($post_data['uploaded_image']);
        $addl_data = array(
          'password' => md5($post_data['password']),
          'org_password' => $post_data['confirmpassword'],
          'image' => $file_name,
          'updated_on' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('id'),
          'status' => 1
        );
        $post_data = array_merge($post_data,$addl_data);
        unset($post_data['confirmpassword']);
        if ($post_data) {
          $post_id = $this->input->post('id');
          if ($this->Admin_Model->update($post_data,$post_id)) {
            $this->session->set_flashdata('success','Role updated successfully');
            redirect('inventory/roles');
          } else {
            $this->session->userdata('error','Please try again');
            redirect($this->agent->referrer());
          }
        } else {
          $this->session->userdata('error','Please try again');
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
  //check email exists
  public function check_exists()
  {
    $email = $this->input->post('email');
    $id = $this->input->post('id');
    if ($this->Admin_Model->check_exists($email,$id)) {
      $isAvailable = false;
    } else {
      $isAvailable = true;
    }
    echo json_encode(array(
      'valid' => $isAvailable,
    ));
  }
 
  
}
