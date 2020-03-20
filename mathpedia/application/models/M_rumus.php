<?

class M_rumus extends CI_Model
{
    public function viewALL()
    {
        $this->db->select('*');
        $this->db->from('rumus_mm');
        $this->db->join('kategori','kategori.id_kategori=rumus_mm.id_kategori');
        $data = $this->db->get();
        return $data->result();
    }

    public function getKategori()
    {
        $data = $this->db->get('kategori');
        return $data->result_array();
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

