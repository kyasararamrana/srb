<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('category_model');
  }
  //categories list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Categories';
      $data = components($arg);
      $data['categories'] = $this->category_model->get_categories();
      $this->load->view('admin/categories',$data);
    } else {
      redirect('login');
    }
  }
  //create category
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Categories';
      $data = components($arg);
      $this->load->view('admin/category',$data);
    } else {
      redirect('login');
    }
  }
  //insert category
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $addl_data = array('created_by' => $this->session->userdata('id'), 'created_on' => date('Y-m-d H:i:s'), 'status' => '1');
        $post_data = array_merge($post_data,$addl_data);
        if ($this->category_model->insert($post_data)) {
          redirect('category');
        } else {
          redirect('category/create');
        }
      } else {
        redirect('category/create');
      }
    } else {
      redirect('login');
    }
  }
  //edit category
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Categories';
      $data = components($arg);
      $data['category'] = $this->category_model->get_category_by_id($id);
      $this->load->view('admin/category',$data);
    } else {
      redirect('login');
    }
  }
  //update category
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $post_id = $this->input->post('id');
        $addl_data = array('updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'), 'status' => '1');
        $post_data = array_merge($post_data,$addl_data);
        if ($this->category_model->update($post_data,$post_id)) {
          redirect('category');
        } else {
          redirect($this->agent->referrer());
        }
      } else {
        redirect($this->agent->referrer());
      }
    } else {
      redirect('login');
    }
  }
  //delete category
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->category_model->update($post_data,$id)) {
        redirect('category');
      } else {
        redirect('category');
      }
    } else {
      redirect('login');
    }
  }
  //change category status
  public function status()
  {
    $status = $this->uri->segment(3);
    $id = $this->uri->segment(4);
    $sts = '';
    if ($status == '1') {
      $sts .= '2';
    } else {
      $sts .= '1';
    }
    $post_data = array('status' => $sts);
    if ($this->category_model->update($post_data,$id)) {
      redirect('category');
    } else {
      redirect('category');
    }
  }
  //check category exists
  public function check_exists()
  {
    $name = $this->input->get('name');
    if($this->category_model->check_exists($name)){
      $isAvailable = false;
    } else {
      $isAvailable = true;
    }
    echo json_encode(array(
      'valid' => $isAvailable,
    ));
  }

}

?>
