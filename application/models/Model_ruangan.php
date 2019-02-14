<?php  

class Model_ruangan extends CI_Model{

    public $table = "tbl_ruangan";

    public function insertSiswa($data) 
	{
		$this->db->insert('tbl_ruangan', $data);
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
		return $this->db->get('tbl_ruangan');
    }
    
    public function updateRuangan($kd_ruangan, $post)
	{
		$this->db->where('kd_ruangan', $kd_ruangan);
		$this->db->update('tbl_ruangan', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
    }
    
    public function deleteRuangan ($kd_ruangan, $post)
	{
		$this->db->where('kd_ruangan', $kd_ruangan);
		$this->db->update('tbl_ruangan',$post);
		return $this->db->affected_rows();
	}

}