<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Admin_Model');
  }
  //orders list
  public function orderslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders';
      $data = components($arg);
      $this->load->view('inventory/orders_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function assignstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
      $data = components($arg);
      $this->load->view('inventory/assign_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function addstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
      $data = components($arg);
	  $this->load->model('Vendor_Model');
	  $data['v_list']=$this->Vendor_Model->get_all_vendor_lists();
      $this->load->view('inventory/add_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function stocklist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stock list';
      $data = components($arg);
	   $this->load->model('Vendor_Model');
	   $data['s_list']=$this->Vendor_Model->get_stick_list($this->session->userdata('id'));
      $this->load->view('inventory/stock_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function editstock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Edit Stock';
      $data = components($arg);
	  $this->load->model('Vendor_Model');
	  $data['s_detail']=$this->Vendor_Model->get_stock_details(base64_decode($this->uri->segment(3)));
      $this->load->view('inventory/edit_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function add_damage_stock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
      $data = components($arg);
      $this->load->view('inventory/add_damage_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function damaged_stock_list()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
      $data = components($arg);
      $this->load->view('inventory/damaged_stock_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function edit_damage_stock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Stocks';
      $data = components($arg);
      $this->load->view('inventory/edit_damage_stock',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }

  
  
  //add role
  public function role()
  {
    //print_r($this->session->userdata());
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
        $arg['pageTitle'] = 'Roles';
        $data = components($arg);
        $this->load->view('inventory/role',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //insert role
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
        $post_data = $this->input->post();
        if ($post_data) {
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
              $file_name = $this->upload->data('file_name');
            }
          }
          $addl_data = array(
            'password' => md5($post_data['password']),
            'org_password' => $post_data['confirmpassword'],
            'image' => $file_name,
            'created_on' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id'),
            'status' => 1
          );
          $post_data = array_merge($post_data,$addl_data);
          unset($post_data['confirmpassword']);
          if ($this->Admin_Model->insert($post_data)) {
            $this->session->set_flashdata('success','Role created successfully');
            redirect('inventory/roles');
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
  public function roles()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
        $arg['pageTitle'] = 'Roles';
        $data = components($arg);
        $data['users'] = $this->Admin_Model->get_users();
        $this->load->view('inventory/roles',$data);
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
  //-->
  public function addrole()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Roles';
      $data = components($arg);
      $this->load->view('inventory/add_role',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  public function roleslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Roles';
      $data = components($arg);
      $this->load->view('inventory/roles_list',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
 //stock add 
 public function stcockaddpost(){
	   if ($this->session->userdata('logged_in') == TRUE) {
           if ($this->session->userdata('role') == 'Inventory'){
			   $post=$this->input->post();
			   $cnt=0;foreach($post['v_id'] as $li){
				   if($li!=''){
				   $add=array(
					   'st_v_id'=>isset($post['v_id'][$cnt])?$post['v_id'][$cnt]:'',
					   'st_name'=>isset($post['st_name'][$cnt])?$post['st_name'][$cnt]:'',
					   'st_size'=>isset($post['st_size'][$cnt])?$post['st_size'][$cnt]:'',
					   'st_thickness'=>isset($post['st_thickness'][$cnt])?$post['st_thickness'][$cnt]:'',
					   'st_color'=>isset($post['st_color'][$cnt])?$post['st_color'][$cnt]:'',
					   'st_pieces'=>isset($post['st_pieces'][$cnt])?$post['st_pieces'][$cnt]:'',
					   'st_created_by'=>$this->session->userdata('id'),
				    );
					$this->load->model('Vendor_Model');
					$save=$this->Vendor_Model->save_v_stock_data($add);
				   }
				 $cnt++;}
				 if(count($save)>0){
					 $this->session->set_flashdata('success','Stock added successfully');
					redirect('inventory/stocklist');
				 }else{
					$this->session->set_flashdata('error','Please try again');
					redirect('inventory/addstock'); 
				 }
			   
		   }else {
			$this->session->set_flashdata('error','Sorry, you can\'t access');
			redirect('admin');
			}
		} else {
		  $this->session->set_flashdata('error','Please login and try again');
		  redirect('login');
		}
 }
 //stockedit postpublic 

 function editstock_post(){
	  if ($this->session->userdata('logged_in') == TRUE) {
           if ($this->session->userdata('role') == 'Inventory'){
			   $post=$this->input->post();
				$s_update=array(
					'st_name'=>isset($post['st_name'])?$post['st_name']:'',
					'st_size'=>isset($post['st_size'])?$post['st_size']:'',
					'st_thickness'=>isset($post['st_thickness'])?$post['st_thickness']:'',
					'st_color'=>isset($post['st_color'])?$post['st_color']:'',
					'st_pieces'=>isset($post['st_pieces'])?$post['st_pieces']:'',
					);
					$this->load->model('Vendor_Model');
					$update=$this->Vendor_Model->save_v_stock_update($post['st_o_id'],$s_update);
					 if(count($update)>0){
						 $this->session->set_flashdata('success','Stock updated successfully');
						redirect('inventory/stocklist');
					 }else{
						$this->session->set_flashdata('error','Please try again');
						redirect('inventory/editstock/'.base64_encode($post['st_o_id'])); 
					 }
			}else {
				$this->session->set_flashdata('error','Sorry, you can\'t access');
				redirect('admin');
			}
		} else {
		  $this->session->set_flashdata('error','Please login and try again');
		  redirect('login');
		}
 } 
 //delete stock
 public function deletestock()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Inventory') {
		  $this->load->model('Vendor_Model');
				$u_data = array(
				'st_updated_at' => date('Y-m-d H:i:s'),
				'st_status' => 2
				);
			if ($this->Vendor_Model->save_v_stock_update(base64_decode($this->uri->segment(3)),$u_data)){
				$this->session->set_flashdata('success','Stcok deleted successfully');
				redirect('inventory/stocklist');
			  } else {
				$this->session->set_flashdata('error','Please try again');
				redirect('inventory/stocklist');
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
