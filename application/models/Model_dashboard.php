<?php  

class Model_dashboard extends CI_Model{

    
    public function auth_user($username, $password)
	{
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }
    
    public function updateUser($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_siswa', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
	}
	
	public $table = "tbl_siswa";

    public function insertSiswa($data) 
	{
		$this->db->insert('tbl_siswa', $data);
		// parameter ke 2 adalah value parameter pertama adalah value dari filternya
		// untuk mengecek berhasil sudah disimpan atau belum
		return $this->db->insert_id();
		// insert id untuk mengembalikan nilai ID terakhir yg baru dsimpan yaitu untuk memberikan pesan sukses disimpan
		
	}
	
	public function jumlahKelas()
	{
		$this->db->where('is_deleted', 0);
		return $this->db->count_all_results('tbl_ruangan'); 
	}

	public function jumlahSiswa()
	{
		$this->db->where('is_deleted', 0);

		return $this->db->count_all_results('tbl_siswa'); 
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
	}

	public function jumlahMapel()
	{
		$this->db->where('is_deleted', 0);

		return $this->db->count_all_results('tbl_mapel'); 
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
	}
      
    public function getSingleUser($field, $value)
	{
		$this->db->where($field, $value);
		$this->db->limit(3);
		return $this->db->get('tbl_siswa');
    }
    
    public function deleteUser ($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_siswa',$post);
		return $this->db->affected_rows();
	}

}