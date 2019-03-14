<?php
/**
 *
 */
class Material_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  //insert
  public function insert($data)
  {
    $this->db->insert('inv_material',$data);
    return $this->db->insert_id();
  }
  //get all list
  public function get_material_list()
  {
    $this->db->select('i_m_id,material,status,created_on')->from('inv_material as im');
	$this->db->where('im.status !=',2);
	$this->db->order_by('im.i_m_id','desc');
    return $this->db->get()->result_array();
  }
	public  function update($id,$data){
		$this->db->where('i_m_id',$id);
		return $this->db->update('inv_material',$data);
	}
	public  function get_m_details($id){
	$this->db->select('i_m_id,material,status,created_on')->from('inv_material as im');
	$this->db->where('im.i_m_id',$id);
    return $this->db->get()->row_array();
	}
	public  function get_meterial_details($material){
	$this->db->select('i_m_id,material,status,created_on')->from('inv_material as im');
	$this->db->where('im.material',$material);
	$this->db->where('im.status !=',2);
    return $this->db->get()->row_array();
	}
	
	
  
}

?>
