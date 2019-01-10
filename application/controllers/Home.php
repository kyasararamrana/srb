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
    $this->load->model('home_model');
    $this->load->model('banner_model');
    $this->load->model('slider_model');
    $this->load->library('form_validation');
  }
  //home page
  public function index()
  {
    $arg['pageTitle'] = 'Home';
    $data = layouts($arg);
    $data['banner'] = $this->banner_model->get_active_banner();
    $data['slider'] = $this->slider_model->get_active_slider();
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
        $result = $this->home_model->get_access($email,$password);
        if ($result) {
          $user_data = array('firstname' => $result->firstname, 'lastname' => $result->lastname, 'email' => $result->email, 'mobile' => $result->mobile, 'logged_in' => TRUE);
          $this->session->set_userdata($user_data);
          redirect('home');
        } else {
          redirect('home/login');
        }
      }
    } else {
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
        if ($this->home_model->insert($post_data)) {
          $this->session->set_flashdata('success','Registered successfully');
          $email = $this->input->post('email');
          $password = $this->input->post('password');
          $password = md5($password);
          $result = $this->home_model->get_access($email,$password);
          //sending email
          email('rana@prachatech.com',$result->email,$subject='Registation successfully',$message='Registation successfully for "$result->firstname"');
          //-->
          if ($result) {
            $user_data = array('firstname' => $result->firstname, 'lastname' => $result->lastname, 'email' => $result->email, 'mobile' => $result->mobile, 'logged_in' => TRUE);
            $this->session->set_userdata($user_data);
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
    if ($this->home_model->check_exists($email)) {
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
      redirect('home/login');
    } else {
      redirect('home/login');
    }
  }

}

?>
