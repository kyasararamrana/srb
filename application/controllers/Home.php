<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Home_Model');
    $this->load->model('Banner_Model');
    $this->load->model('Slider_Model');
    $this->load->model('Product_Model');
    $this->load->model('Wishlist_Model');
    $this->load->library('form_validation');
    $this->load->library('user_agent');
  }
  //home page
  public function index()
  {
    $arg['pageTitle'] = 'Home';
    $data = layouts($arg);
    $data['banner'] = $this->Banner_Model->get_active_banner();
    $data['slider'] = $this->Slider_Model->get_active_slider();
    $data['featured'] = $this->Product_Model->get_active_featured_products();
    $data['discount'] = $this->Product_Model->get_active_discount_products();
    $data['deals'] = $this->Product_Model->get_active_deals_products();
    $data['products'] = $this->Product_Model->get_products();
    $user_id = $this->session->userdata('id');
    if($user_id){
      $data['cart'] = $this->Cart_Model->get_product_id_by_user_id($user_id);
      $data['wishlist'] = $this->Wishlist_Model->get_product_id_by_user_id($user_id);
    }
    $this->load->view('home/index',$data);
  }
  //user login
  public function login()
  {
    $data['pageTitle'] = 'Login';
    $this->load->view('home/login',$data);
  }
  //get user access
  public function get_access()
  {
    $post_data = $this->input->post();
    if ($post_data) {
      //validations
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      $this->form_validation->set_rules('email', 'Email Address ', 'required');
      $this->form_validation->set_rules('password', 'Password ', 'required');
      if ($this->form_validation->run() == FALSE) {
        $data['pageTitle'] = 'Login';
        $this->load->view('home/login',$data);
      } else {
        //getting user data from database
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password = md5($password);
        $result = $this->Home_Model->get_access($email,$password);
        if ($result) {
          $user_data = array('id' => $result->id, 'firstname' => $result->firstname, 'lastname' => $result->lastname, 'email' => $result->email, 'mobile' => $result->mobile, 'logged_in' => TRUE);
          $this->session->set_userdata($user_data);
          $this->session->set_flashdata('success','Logged in successfully');
          if ($this->session->userdata('previous_url')) {
            redirect($this->session->userdata('previous_url'));
          } else {
            redirect('home');
          }

        } else {
          $this->session->set_flashdata('error','Email or password is incorrect');
          redirect('home/login');
        }
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //create user
  public function register()
  {
    $data['pageTitle'] = 'Register';
    $this->load->view('home/register',$data);
  }
  //insert register user
  public function insert()
  {
    $post_data = $this->input->post();
    if ($post_data) {
      //validations
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      $this->form_validation->set_rules('firstname', 'First Name', 'required');
      $this->form_validation->set_rules('lastname', 'Last Name ', 'required');
      $this->form_validation->set_rules('email', 'Email Address ', 'required');
      $this->form_validation->set_rules('mobile', 'Mobile Number ', 'required');
      $this->form_validation->set_rules('password', 'Password ', 'required');
      $this->form_validation->set_rules('confirmpassword', 'confirm Password ', 'required');
      if ($this->form_validation->run() == FALSE) {
        $data['pageTitle'] = 'Register';
        $this->load->view('home/register',$data);
      } else {
        //inserting data into database
        unset($post_data['confirmpassword']);
        $addl_data = array('created_on' => date('Y-m-d H:i:s'),'status' => '1','password' => md5($post_data['password']));
        $post_data = array_merge($post_data,$addl_data);
        if ($this->Home_Model->insert($post_data)) {
          $this->session->set_flashdata('success','Registered successfully');
          $email = $this->input->post('email');
          $password = $this->input->post('password');
          $password = md5($password);
          $result = $this->Home_Model->get_access($email,$password);
          //sending email
          email('rana@prachatech.com',$result->email,$subject='Registation successfully',$message='Registation successfully for "$result->firstname"');
          //-->
          if ($result) {
            $user_data = array('id' => $result->id, 'firstname' => $result->firstname, 'lastname' => $result->lastname, 'email' => $result->email, 'mobile' => $result->mobile, 'logged_in' => TRUE);
            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('success','logged in successfully');
            redirect('home');
          }
        } else {
          $this->session->set_flashdata('error','Please try again');
          redirect('home/register');
        }
      }
    } else {
      $this->session->set_flashdata('error','Please try again');
      redirect('home/register');
    }
  }
  //check email exists
  public function check_exists()
  {
    $email = $this->input->post('email');
    $id = $this->input->post('id');
    if ($this->Home_Model->check_exists($email,$id)) {
      $isAvailable = false;
    } else {
      $isAvailable = true;
    }
    echo json_encode(array(
      'valid' => $isAvailable,
    ));
  }
  //logout
  public function logout()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $this->session->sess_destroy();
      $this->session->set_flashdata('success','logged out successfully');
      redirect('home/login');
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //profile
  public function profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Profile';
      $data = layouts($arg);
      $data['profile'] = $this->Home_Model->get_user_data();
      $this->load->view('home/profile',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //profile (edit - view)
  public function edit_profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Edit Profile';
      $data = layouts($arg);
      $data['profile'] = $this->Home_Model->get_user_data();
      $this->load->view('home/edit_profile',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //profile (edit)
  public function update_profile()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
          $post_id = $this->input->post('id');
          if ($this->Home_Model->update_profile($post_data,$post_id)) {
            $this->session->set_flashdata('success','Profile updated successfully');
            redirect('home/profile');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect('home/edit_profile');
          }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('home/edit_profile');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //change password
  public function change_password()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Change Password';
      $data = layouts($arg);
      $this->load->view('home/change_password',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }
  }
  //update Password
  public function update_password()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $password = $this->input->post('newpassword');
      $post_data = array('password' => md5($password));
      if ($this->Home_Model->change_password($post_data)) {
        $this->session->set_flashdata('success','Password changed successfully');
        redirect('home/change_password');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('home/change_password');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('home/login');
    }

  }
  //check old Password
  public function check_password()
  {
    $old_password = $this->input->post('oldpassword');
    $old_password = md5($old_password);
    if($this->Home_Model->check_password($old_password)){
      $isAvailable = true;
    } else {
      $isAvailable = false;
    }
    echo json_encode(array(
      'valid' => $isAvailable,
    ));
  }
  //search
  public function search()
  {
    $product_id = $this->input->post('search_key');
    if ($product_id) {
      redirect('product/'.$product_id);
    } else {
      $this->session->set_flashdata('error','Something went wrong, please try again');
      redirect($this->agent->referrer());
    }
  }

}

?>
