<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('components')){
  		function components($pageData){
  			$CI = &get_instance();
			 $CI->load->model('Admin_Model');
			 $role = $CI->session->userdata('role');
			
			if ($role=='Inventory') {
			  $pageData['notification'] = $CI->Admin_Model->get_notofocation($role);
			  $pageData['read_cnt'] = $CI->Admin_Model->get_notofocation_unread($role);
			}
			 //echo '<pre>';print_r($pageData);exit;
  			$pages['links'] 	 = $CI->load->view('admin/links',$pageData,TRUE);
  			$pages['header']   	 = $CI->load->view('admin/header',$pageData,TRUE);
  			$pages['sidebar']  	 = $CI->load->view('admin/sidebar',$pageData,TRUE);
  			$pages['scripts'] = $CI->load->view('admin/scripts',$pageData,TRUE);
  			$pages['footer']   	 = $CI->load->view('admin/footer',$pageData,TRUE);
  			return $pages;
  		}
    }
?>
