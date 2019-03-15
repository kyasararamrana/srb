<?php
/**
 *
 */
class Stitching_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  //insert
  public function insert($data)
  {
    $this->db->insert('inv_stitching_type',$data);
    return $this->db->insert_id();
  }
  //get all list
  public function get_stitching_list()
  {
    $this->db->select('i_s_t_id,stitching_type,status,created_on')->from('inv_stitching_type as st');
	$this->db->where('st.status !=',2);
	$this->db->order_by('st.i_s_t_id','desc');
    return $this->db->get()->result_array();
  }
	public  function update($id,$data){
		$this->db->where('i_s_t_id',$id);
		return $this->db->update('inv_stitching_type',$data);
	}
	public  function get_s_details($id){
	$this->db->select('i_s_t_id,stitching_type,status,created_on')->from('inv_stitching_type as st');
	$this->db->where('st.i_s_t_id',$id);
    return $this->db->get()->row_array();
	}
	public  function get_stitching_details($stitching_type){
	$this->db->select('i_s_t_id,stitching_type,status,created_on')->from('inv_stitching_type as st');
	$this->db->where('st.stitching_type',$stitching_type);
	$this->db->where('st.status !=',2);
    return $this->db->get()->row_array();
	}
	
	
  
}

?>
