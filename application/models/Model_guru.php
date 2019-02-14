<?php  

class Model_guru extends CI_Model{

    public $table = "tbl_guru";

    public function insert($data) 
	{
		$this->db->insert('tbl_guru', $data);
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
		return $this->db->get('tbl_guru');
    }
    
    public function update($id, $post)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_guru', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
    }
    
    public function delete ($id, $post)
	{
		$this->db->where('id_guru', $id);
		$this->db->update('tbl_guru',$post);
		return $this->db->affected_rows();
	}

}