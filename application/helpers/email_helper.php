<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('email')){
  function email($from='',$to='',$subject='',$message=''){
    $CI =& get_instance();
    $CI->load->library('email');
    $CI->email->from($from);
    $CI->email->to($to);
    $CI->email->subject($subject);
    $CI->email->message($message);
    $CI->email->send();
  }
}
?>
