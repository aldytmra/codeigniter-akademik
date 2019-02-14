<?php  

class Model_siswa extends CI_Model{

    public $table = "tbl_siswa";

    public function insertSiswa($data) 
	{
		$this->db->insert('tbl_siswa', $data);
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
		return $this->db->get('tbl_siswa');
    }
    
    public function updateUser($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_siswa', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
    }
    
    public function deleteUser ($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_siswa',$post);
		return $this->db->affected_rows();
	}

}