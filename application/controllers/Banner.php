<?php
/**
 *
 */
class Banner extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('banner_model');
    $this->load->library('user_agent');
  }
  //banners list
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Banner';
      $data = components($arg);
      $data['banners'] = $this->banner_model->get_banners();
      $this->load->view('admin/banners',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //create banner
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Banner';
      $data = components($arg);
      $this->load->view('admin/banner',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //insert banner
  public function insert()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $config['upload_path']   = './assets/uploads/banner/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_width']     = 780;
        $config['max_height']    = 438;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image')) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error',$error);
          redirect('banner/create');
        } else {
          $addl_data = array('image' => $this->upload->data('file_name'), 'created_by' => $this->session->userdata('id'), 'created_on' => date('Y-m-d H:i:s'), 'status' => '1');
          $post_data = array_merge($post_data,$addl_data);
          if ($this->banner_model->insert($post_data)) {
            $this->session->set_flashdata('success','banner created successfully');
            redirect('banner');
          } else {
            $this->session->set_flashdata('error','Please try again');
            redirect('banner/create');
          }
        }
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('banner/create');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //edit banner
  public function edit($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Banners';
      $data = components($arg);
      $data['banner'] = $this->banner_model->get_banner_by_id($id);
      $this->load->view('admin/banner',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //update banner
  public function update()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = $this->input->post();
      if ($post_data) {
        $config['upload_path']   = './assets/uploads/banner/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_width']     = 780;
        $config['max_height']    = 438;
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
            @unlink('./assets/uploads/banner/'.$post_uploaded_image);
            $image = $this->upload->data('file_name');
          }
          $addl_data = array('image' => $image, 'updated_by' => $this->session->userdata('id'), 'updated_on' => date('Y-m-d H:i:s'), 'status' => '1');
          $post_data = array_merge($post_data,$addl_data);
          unset($post_data['uploaded_image']);
          if ($this->banner_model->update($post_data,$post_id)) {
            $this->session->set_flashdata('success','Banner updated successfully');
            redirect('banner');
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
      redirect('login');
    }
  }
  //delete banner
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $post_data = array('status' => '0');
      if ($this->banner_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Banner deleted successfully');
        redirect('banner');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('banner');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //change banner status
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
      if ($this->banner_model->update($post_data,$id)) {
        $this->session->set_flashdata('success','Status changed successfully');
        redirect('banner');
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect('banner');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //check banner exists
  public function check_exists()
  {
    $name = $this->input->post('name');
    $id = $this->input->post('id');
    if($this->banner_model->check_exists($name,$id)){
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
