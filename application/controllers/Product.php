<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('category_model');
    $this->load->model('product_model');
    $this->load->library('user_agent');
  }
  //admin product list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Products';
      $data = components($arg);
      $data['products'] = $this->product_model->get_products();
      $this->load->view('admin/products',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //admin create product - view
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Product';
      $data = components($arg);
      $data['categories'] = $this->category_model->get_active_categories();
      $this->load->view('admin/product',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }

  }
  //admin insert product
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $config['upload_path']   = './assets/uploads/product/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        if (! $this->upload->do_upload('image')) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error',$error);
          redirect('product/create');
        } else {
          $addl_data = array('image' => $this->upload->data('file_name'),'featured' => (int)$this->input->post('featured'),'created_on' => date('Y-m-d H:i:s'),'created_by' => $this->session->userdata('id'), 'status' => '1' );
          $post_data = array_merge($post_data,$addl_data);
          if ($this->product_model->insert($post_data)) {
            $this->session->set_flashdata('success','Product inserted successfully');
            redirect('product');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect('product/create');
          }
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('product/create');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //admin edit product - view
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Product';
      $data = components($arg);
      $data['categories'] = $this->category_model->get_active_categories();
      $data['product'] = $this->product_model->get_product_by_id($id);
      $this->load->view('admin/product',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }

  }
  //admin update product
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $config['upload_path']   = './assets/uploads/product/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        if (!empty($_FILES['image']['name']) && (!$this->upload->do_upload('image'))) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error',$error);
          redirect($this->agent->referrer());
        } else {
          $post_id = $this->input->post('id');
          $post_uploaded_image = $this->input->post('uploaded_image');
          if (empty($_FILES['image']['name']) && isset($post_uploaded_image)) {
            $image = $post_uploaded_image;
          } else {
            @unlink('./assets/uploads/product/'.$post_uploaded_image);
            $image = $this->upload->data('file_name');
          }
          $addl_data = array('image' => $image, 'featured' => (int)$this->input->post('featured'),'updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'), 'status' => '1');
          $post_data = array_merge($post_data,$addl_data);
          unset($post_data['uploaded_image']);
          if ($this->product_model->update($post_data,$post_id)) {
            $this->session->set_flashdata('success','Product updated successfully');
            redirect('product');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect($this->agent->referrer());
          }
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect($this->agent->referrer());
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //admin delete product
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->product_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Product deleted successfully');
        redirect('product');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('product');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //admin change product status
  public function status()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $status = $this->uri->segment(3);
      $id = $this->uri->segment(4);
      $sts = '';
      if ($status == '1') {
        $sts .= '2';
      } else {
        $sts .= '1';
      }
      $post_data = array('status' => $sts);
      if ($this->product_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Status changed successfully');
        redirect('product');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('product');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //check product exists
  public function check_exists()
  {
    $name = $this->input->post('name');
    $id = $this->input->post('id');
    if($this->product_model->check_exists($name,$id)){
      $isAvailable = false;
    } else {
      $isAvailable = true;
    }
    echo json_encode(array(
      'valid' => $isAvailable,
    ));
  }
  //home products by id
  public function products($id='')
  {
    $arg['pageTitle'] = 'Products';
    $data = layouts($arg);
    $this->load->view('home/products',$data);
  }
  //home single product details
  public function product($id='')
  {
    $arg['pageTitle'] = 'Products';
    $data = layouts($arg);
    $this->load->view('home/product',$data);
  }

}

?>
