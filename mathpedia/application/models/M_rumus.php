<?

class M_rumus extends CI_Model
{
    public function select_all()
    {
        // return $this->db->get('rumus_mm');
        $this->db->select('*');
        $this->db->from('rumus_mm');

        $data = $this->db->get();

        return $data->result();
    }
    
    public function input_rms($data,$table){
		$this->db->insert($table,$data);
    }

    public function ubh_rms($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	public function update_rms($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }	
    
    public function delete_rms($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }
}

?>

