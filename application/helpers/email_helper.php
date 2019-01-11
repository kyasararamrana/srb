<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('email')){
  function email($from='',$to='',$subject='',$message=''){
    $CI =& get_instance();
    $CI->load->library('email');
    $CI->load->library('encrypt');
    $config = array(
      'protocol'  => 'smtp',
      'smtp_host' => '',
      'smtp_port' => 465,
      'smtp_user' => 'xxxxx',
      'smtp_pass' => 'xxxxx',
      'mailtype'  => 'html',
      'charset'   => 'utf-8'
    );
    $CI->email->initialize($config);
    $CI->email->set_mailtype("html");
    $CI->email->set_newline("\r\n");
    $CI->email->from($from);
    $CI->email->to($to);
    $CI->email->subject($subject);
    $CI->email->message($message);
    $CI->email->send();
  }
}
?>
