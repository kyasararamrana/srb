<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('layouts')){
  		function layouts($pageData){
  			$CI = &get_instance();
        $CI->load->model('category_model');
        $CI->load->model('logo_model');
        $CI->load->model('cart_model');
        $CI->load->model('wishlist_model');
        //displaying categories list in header
        $pageData['categories'] = $CI->category_model->get_active_categories();
        //displaying logo in header and footer and favicon
        $pageData['logo'] = $CI->logo_model->get_logo();
        //session user id
        $user_id = $CI->session->userdata('id');
        if ($user_id) {
          $pageData['cart'] = $CI->cart_model->get_cart_count_by_user_id($user_id);
          $pageData['total'] = $CI->cart_model->get_cart_total_by_user_id($user_id);
          $pageData['wishlist'] = $CI->wishlist_model->get_wishlist_count_by_user_id($user_id);
        }
  			$pages['links'] = $CI->load->view('home/links',$pageData,TRUE);
  			$pages['header'] = $CI->load->view('home/header',$pageData,TRUE);
  			$pages['scripts'] = $CI->load->view('home/scripts',$pageData,TRUE);
  			$pages['footer'] = $CI->load->view('home/footer',$pageData,TRUE);
        $pages['sidebar'] = $CI->load->view('home/profile_sidebar',$pageData,TRUE);
  			return $pages;
  		}
    }
?>
