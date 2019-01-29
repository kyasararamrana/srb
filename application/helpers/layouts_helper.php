<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('layouts')){
  		function layouts($pageData){
  			$CI = &get_instance();
        $CI->load->model('Category_Model');
        $CI->load->model('Logo_Model');
        $CI->load->model('Cart_Model');
        $CI->load->model('Wishlist_Model');
        $CI->load->model('Product_Model');
        //displaying categories list in header
        $pageData['categories'] = $CI->Category_Model->get_active_categories();
        //displaying logo in header and footer and favicon
        $pageData['logo'] = $CI->Logo_Model->get_logo();
        //session user id
        $user_id = $CI->session->userdata('id');
        if ($user_id) {
          $pageData['cart'] = $CI->Cart_Model->get_cart_count_by_user_id($user_id);
          $pageData['total'] = $CI->Cart_Model->get_cart_total_by_user_id($user_id);
          $pageData['wishlist'] = $CI->Wishlist_Model->get_wishlist_count_by_user_id($user_id);
        }
        $pageData['product'] = $CI->Product_Model->get_active_products_list();
  			$pages['links'] = $CI->load->view('home/links',$pageData,TRUE);
  			$pages['header'] = $CI->load->view('home/header',$pageData,TRUE);
  			$pages['scripts'] = $CI->load->view('home/scripts',$pageData,TRUE);
  			$pages['footer'] = $CI->load->view('home/footer',$pageData,TRUE);
        $pages['sidebar'] = $CI->load->view('home/profile_sidebar',$pageData,TRUE);
  			return $pages;
  		}
    }
?>
