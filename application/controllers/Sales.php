<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('user_agent');
    $this->load->model('Bagtype_Model');
    $this->load->model('Bagcolor_Model');
    $this->load->model('Printingmethod_Model');
    $this->load->model('Printingcolortype_Model');
    $this->load->model('Printingstyle_Model');
    $this->load->model('Suggestedprintingcolor_Model');
    $this->load->model('Printinglanguage_Model');
    $this->load->model('Handle_Model');
    $this->load->model('Sales_Model');
    $this->load->model('Sales_Wishlist_Model');
    $this->load->model('Price_Model');
  }
  //Orders List
  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Sales') {
        $arg['pageTitle'] = 'Order';
        $data = components($arg);
        $data['orders'] = $this->Sales_Model->get_order();
        $this->load->view('sales/orders',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t assess');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //order details list (view)
  public function details($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Sales') {
        $arg['pageTitle'] = 'Order';
        $data = components($arg);
        $data['order'] = $this->Sales_Model->get_details_by_id($id);
        $this->load->view('sales/order_details',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t assess');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //delete
  public function delete($id='')
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Sales') {
        if ($id) {
          if ($this->Sales_Model->delete($id)) {
            $this->session->set_flashdata('success','Order deleted successfully');
            redirect('sales');
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
  public function orderslist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Orders';
        $data = components($arg);
      $this->load->view('sales/orderslist',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Order Details
  public function orderdetails()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Order Details';
        $data = components($arg);
      $this->load->view('sales/order_details',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Order Form (view)
  public function create()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Sales') {
        $arg['pageTitle'] = 'Order';
        $data = components($arg);
        $data['bagtype'] = $this->Bagtype_Model->get_active_bagtype();
        $data['bagcolor'] = $this->Bagcolor_Model->get_active_bagcolor();
        $data['printingmethod'] = $this->Printingmethod_Model->get_active_printingmethod();
        $data['printingcolortype'] = $this->Printingcolortype_Model->get_active_printingcolortype();
        $data['printingstyle'] = $this->Printingstyle_Model->get_active_printingstyle();
        $data['suggestedprintingcolor'] = $this->Suggestedprintingcolor_Model->get_active_suggestedprintingcolor();
        $data['printinglanguage'] = $this->Printinglanguage_Model->get_active_printinglanguage();
        $this->load->view('sales/order',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
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
      if ($this->session->userdata('role') == 'Sales') {
        $post_data = $this->input->post();
        $addl_data = array(
          'created_on' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('id')
        );
        $post_data = array_merge($post_data, $addl_data);
        if ($post_data) {
          if (isset($post_data['wishlist']) && $post_data['wishlist'] == 1) {
            //adding to wishlist
            unset($post_data['wishlist']);
            if ($this->Sales_Wishlist_Model->insert($post_data)) {
              $this->session->set_flashdata('success','Wishlist created successfully');
              redirect('sales/wishlist');
            } else {
              $this->session->set_flashdata('error','Please try again');
              redirect($this->agent->referrer());
            }
          } else {
            //placing new order
            unset($post_data['wishlist']);
            if ($this->Sales_Model->insert($post_data)) {
              $this->session->set_flashdata('success','Order created successfully');
              redirect('sales');
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
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //Price List
  public function pricelist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Sales') {
        $arg['pageTitle'] = 'Price';
        $data = components($arg);
        $data['price'] = $this->Price_Model->get_price();
        $this->load->view('sales/price_list',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //Wishlist
  public function wishlist()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      if ($this->session->userdata('role') == 'Sales') {
        $arg['pageTitle'] = 'Wishlist';
        $data = components($arg);
        $data['wishlists'] = $this->Sales_Wishlist_Model->get_wishlist();
        $this->load->view('sales/wishlist',$data);
      } else {
        $this->session->set_flashdata('error','Sorry, you can\'t access');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('admin/login');
    }
  }
  //Wishlist Item View
  public function wishlistItemView()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Wishlist';
        $data = components($arg);
      $this->load->view('sales/wishlist_item_view',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //Edit Wishlist Item
  public function editWishlistItem()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      $arg['pageTitle'] = 'Wishlist';
        $data = components($arg);
      $this->load->view('sales/edit_wishlist_item',$data);
    } else {
      $this->session->set_flashdata('error','Please login and try again');
      redirect('login');
    }
  }
  //wishlist delete
  public function wishlist_delete()
  {
    $id = $this->input->post('id');
    if ($id) {
      $id = explode(',',$id);
      if ($this->Sales_Wishlist_Model->delete($id)) {
        $return['success'] = 'Wishlist items deleted successfully';
      } else {
        $return['error'] = 'Please try again';
      }
    } else {
      $return['error'] = 'Please try again';
    }
    echo json_encode($return);
    exit(0);
  }
  //adding wishlist items to order list
  public function wishlist_order()
  {
    $id = $this->input->post('id');
    if ($id) {
      $id = explode(',',$id);
      $wishlist = $this->Sales_Wishlist_Model->get_wishlist_by_ids($id);
      if (count($wishlist) > 0) {
        foreach ($wishlist as $w) {
          $id = $w->id;
          unset($w->id);
          unset($w->created_on);
          unset($w->updated_on);
          unset($w->updated_by);
          $w->created_on = date('Y-m-d H:i:s');
          $w->created_by = $this->session->userdata('id');
          $this->Sales_Model->insert($w);
          $this->Sales_Wishlist_Model->delete($id);
        }
        $return['success'] = 'Item(s) added to orders list';
      } else {
        $return['error'] = 'Please try again';
      }
    } else {
      $return['error'] = 'Please try again';
    }
    echo json_encode($return);
    exit(0);
  }

}
