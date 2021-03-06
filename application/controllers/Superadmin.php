<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Admin_Model');
    $this->load->model('Sales_Model');
  }
  //add bags
  public function bag()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
      $data = components($arg);
      $this->load->view('superadmin/bag',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //bags list
  public function bags()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
      $data = components($arg);
      $this->load->view('superadmin/bags',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  // add price
  public function price()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
      $data = components($arg);
      $this->load->view('superadmin/price',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //price list
  public function prices()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Bags';
      $data = components($arg);
      $this->load->view('superadmin/prices',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //add role
  public function role()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Roles';
        $data = components($arg);
        $this->load->view('superadmin/role',$data);
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
      if ($this->session->userdata('role') == 'Superadmin') {
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
            redirect('superadmin/roles');
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
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Roles';
        $data = components($arg);
        $data['users'] = $this->Admin_Model->get_users();
        $this->load->view('superadmin/roles',$data);
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
      if ($this->session->userdata('role') == 'Superadmin') {
        $post_data = array('status' => '0');
        if ($this->Admin_Model->update($post_data,$id)) {
          $this->session->set_flashdata('success','Role deleted successfully');
          redirect('superadmin/roles');
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('superadmin/roles');
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
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Roles';
        $data = components($arg);
        $data['user'] = $this->Admin_Model->get_user_by_id($id);
        $this->load->view('superadmin/role',$data);
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
      if ($this->session->userdata('role') == 'Superadmin') {
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
            redirect('superadmin/roles');
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
  //orders list
  public function orderslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Superadmin') {
        $arg['pageTitle'] = 'Orders';
        $data = components($arg);
        $data['orders'] = $this->Sales_Model->get_order();
        $this->load->view('superadmin/orders',$data);
      } else {
        $this->session->set_flashdata('error','Sorry,you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  public function orderdetails($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Details';
      $data = components($arg);
      $data['order'] = $this->Sales_Model->get_details_by_id($id);
      $this->load->view('superadmin/order_info',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
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
  //payment and changing payment status
  public function payments()
  {
    $post_data = $this->input->post();
    if ($post_data) {
      if ($post_data['total_price'] > $post_data['paid_amount']) {
        $status = 'pending';
      } elseif ($post_data['total_price'] <= $post_data['paid_amount']) {
        $status = 'paid';
      }
      $post_id = $this->input->post('order_id');
      $post_data = array(
        'paid_amount' => $post_data['paid_amount'],
        'payment_status' => $status,
        'updated_on' => date('Y-m-d H:i:s'),
        'updated_by' => $this->session->userdata('id')
      );
      if ($this->Sales_Model->update($post_data, $post_id)) {
        $return['success'] = 'Payment details updated successfully';
      } else {
        $return['error'] = 'Please try again';
      }
    } else {
      $return['error'] = 'Please try again';
    }
    echo json_encode($return);die();
  }

}

?>
