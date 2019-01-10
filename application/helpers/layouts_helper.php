<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('layouts')){
  		function layouts($pageData){
  			$CI = &get_instance();
        $CI->load->model('category_model');
        $CI->load->model('logo_model');
        //displaying categories list in header
        $pageData['categories'] = $CI->category_model->get_active_categories();
        //displaying logo in header and footer and favicon
        $pageData['logo'] = $CI->logo_model->get_logo();
  			$pages['links'] = $CI->load->view('home/links',$pageData,TRUE);
  			$pages['header'] = $CI->load->view('home/header',$pageData,TRUE);
  			$pages['scripts'] = $CI->load->view('home/scripts',$pageData,TRUE);
  			$pages['footer'] = $CI->load->view('home/footer',$pageData,TRUE);
  			return $pages;
  		}
    }
?>
