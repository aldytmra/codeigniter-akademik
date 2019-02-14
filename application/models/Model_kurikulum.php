<?php  

class Model_kurikulum extends CI_Model{

    public $table = "tbl_kurikulum";

    public function insertKurikulum($data) 
	{
		$this->db->insert('tbl_kurikulum', $data);
		// parameter ke 2 adalah value parameter pertama adalah value dari filternya
		// untuk mengecek berhasil sudah disimpan atau belum
		return $this->db->insert_id();
		// insert id untuk mengembalikan nilai ID terakhir yg baru dsimpan yaitu untuk memberikan pesan sukses disimpan
		
    }
    
    public function auth_user($username, $password)
	{
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }
    
    public function getSingleUser($field, $value)
	{
		$this->db->where($field, $value);
		return $this->db->get('tbl_kurikulum');
	}
	
	public function getAppertisers()
	{
			$this->db->where('is_deleted', '0');
			$query = $this->db->get('tbl_jurusan');
			return $query->result();
    }
    
    public function updateKurikulum($id_kurikulum, $post)
	{
		$this->db->where('id_kurikulum', $id_kurikulum);
		$this->db->update('tbl_kurikulum', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
    }
    
    public function deleteKurikulum ($id_kurikulum, $post)
	{
		$this->db->where('id_kurikulum', $id_kurikulum);
		$this->db->update('tbl_kurikulum',$post);
		return $this->db->affected_rows();
	}

	
}