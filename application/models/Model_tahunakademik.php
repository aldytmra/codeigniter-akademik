<?php  

class Model_tahunakademik extends CI_Model{

    public $table = "tbl_tahunakademik";

    public function insertTahunakademik($data) 
	{
		$this->db->insert('tbl_tahunakademik', $data);
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
		return $this->db->get('tbl_tahunakademik');
    }
    
    public function updateTahunakademik($id_tahun_akademik, $post)
	{
		$this->db->where('id_tahun_akademik', $id_tahun_akademik);
		$this->db->update('tbl_tahunakademik', $post);
		return $this->db->affected_rows();
		// affected rows adalah emngembalikan nilai bila ada yg berubah atau terpengaruhi
    }
    
    public function deleteTahunakademik ($id_tahun_akademik, $post)
	{
		$this->db->where('id_tahun_akademik', $id_tahun_akademik);
		$this->db->update('tbl_tahunakademik',$post);
		return $this->db->affected_rows();
	}

}