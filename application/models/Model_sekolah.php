<?php  

class Model_sekolah extends CI_Model{

    
    public function getSingleUser($field, $value)
	{
		$this->db->where($field, $value);
		return $this->db->get('tbl_sekolah_info');
    }
    
    public function updateSekolah($id, $post)
	{
		$this->db->where('id_sekolah', $id);
		$this->db->update('tbl_sekolah_info', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
    }

}