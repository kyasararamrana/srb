<?php
/**
 *
 */
class Price_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_price';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table,$post_data);
  }
  //get price details
  public function get_price()
  {
    return $this->db->get($this->table)->result();
  }
  
}

?>
