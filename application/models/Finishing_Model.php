<?php
/**
 *
 */
class Finishing_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  //insert
  public function insert($data)
  {
    $this->db->insert('inv_finishing_size',$data);
    return $this->db->insert_id();
  }
  //get all list
  public function get_finishing_size_list()
  {
    $this->db->select('ifs.i_f_s_id,es.s_size,ifs.finishing_size,ifs.created_on')->from('inv_finishing_size as ifs');
	$this->db->join('ecom_sidepatt as es','es.s_id=ifs.s_size','left');
	$this->db->where('ifs.status !=',2);
	$this->db->order_by('ifs.i_f_s_id','desc');
    return $this->db->get()->result_array();
  }
	public  function update($id,$data){
		$this->db->where('i_f_s_id',$id);
		return $this->db->update('inv_finishing_size',$data);
	}
	public  function get_f_details($id){
	$this->db->select('ifs.i_f_s_id,ifs.s_size,ifs.finishing_size,ifs.created_on')->from('inv_finishing_size as ifs');
	$this->db->where('ifs.i_f_s_id',$id);
    return $this->db->get()->row_array();
	}
	public  function get_finishing_details($finishing_size,$s_size){
	$this->db->select('ifs.i_f_s_id,ifs.finishing_size,ifs.created_on')->from('inv_finishing_size as ifs');
	$this->db->where('ifs.finishing_size',$finishing_size);
	$this->db->where('ifs.s_size',$s_size);
	$this->db->where('ifs.status !=',2);
    return $this->db->get()->row_array();
	}
	
	
  
}

?>
