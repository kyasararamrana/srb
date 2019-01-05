<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('components')){
  		function components($pageData){
  			$CI = &get_instance();
  			$pages['links'] 	 = $CI->load->view('admin/links',$pageData,TRUE);
  			$pages['header']   	 = $CI->load->view('admin/header',$pageData,TRUE);
  			$pages['sidebar']  	 = $CI->load->view('admin/sidebar',$pageData,TRUE);
  			$pages['scripts'] = $CI->load->view('admin/scripts',$pageData,TRUE);
  			$pages['footer']   	 = $CI->load->view('admin/footer',$pageData,TRUE);
  			return $pages;
  		}
    }
?>
