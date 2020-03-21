<?

class M_admin extends CI_Model
{
  public function viewALL()
  {
    return $this->db->get('admin');
  }

  public function input_adm($data,$table){
		$this->db->insert($table,$data);
  }
    
  public function ubh_adm($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	public function update_adm($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
  }	
    
  public function delete_adm($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
  }
}

?>