<?php
/**
 *
 */
class Work_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public $table = 'ecom_work';
  //insert
  public function insert($post_data='')
  {
    return $this->db->insert($this->table, $post_data);
  }
  //get working
  public function get_work()
  {
    return $this->db->get($this->table)->result();
  }

}

?>
