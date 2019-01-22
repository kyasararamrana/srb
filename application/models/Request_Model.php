<?php
/**
 *
 */
class Request_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_request';
  //get requests
  public function get_requests()
  {
    return $this->db->get($this->table)->result();
  }
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
}

?>
