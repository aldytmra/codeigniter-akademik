<?php  

class Model_mapel extends CI_Model{

    public $table = "tbl_mapel";

    public function insert($data) 
	{
		$this->db->insert('tbl_mapel', $data);
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
		return $this->db->get('tbl_mapel');
    }
    
    public function update($kd_mapel, $post)
	{
		$this->db->where('kd_mapel', $kd_mapel);
		$this->db->update('tbl_mapel', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
    }
    
    public function delete($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_mapel',$post);
		return $this->db->affected_rows();
	}

}