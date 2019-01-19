<?php
/**
 *
 */
class Billing_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public $table = 'ecom_billing';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  
}

?>
