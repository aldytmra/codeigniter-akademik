<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_kurikulum');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('mylib_helper');

	}

	public function index(){
		$data['kurikulum'] = $this->Model_kurikulum->getSingleUser('is_deleted', '0')->result();
		$this->template->load('template','kurikulum/list', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function add(){
		$this->form_validation->set_rules('nama_kurikulum', 'nama_kurikulum', 'required', array('required' => ' Kode Nama Kurikulum Diisi.'));
		$this->form_validation->set_rules('is_active', 'is_active', 'required', array('required' => ' Status Harus Diisi.'));
		
		// fungsi diatas bisa digantikan seperti berikut
		if ($this->form_validation->run() === TRUE) {
			# code...
		// ingat query builder CI menggunakan tanda kurung bukan kurung siku
			$data['id_kurikulum'] = $this->input->post('id_kurikulum');
			$data['nama_kurikulum'] = $this->input->post('nama_kurikulum');
			$data['is_active'] = $this->input->post('is_active');
				
			$id = $this->Model_kurikulum->insertKurikulum($data);

			if ($id) {
				$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
				redirect('kurikulum/list','refresh');
				
			} else {
				$this->session->set_flashdata ("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
				redirect('/','refresh');
			}

		}
		$this->template->load('template','kurikulum/add');
	}

	public function edit($id_kurikulum){
		$query = $this->Model_kurikulum->getSingleUser('id_kurikulum', $id_kurikulum);
		$data['user'] = $query->row_array();

		$this->form_validation->set_rules('nama_kurikulum', 'nama_kurikulum', 'required', array('required' => ' Kode Nama Kurikulum Diisi.'));
		$this->form_validation->set_rules('is_active', 'is_active', 'required', array('required' => ' Status Harus Diisi.'));
	   
	   // fungsi diatas bisa digantikan seperti berikut
	   if ($this->form_validation->run() == TRUE) {
		   # code...
	   // ingat query builder CI menggunakan tanda kurung bukan kurung siku
		   $post['id_kurikulum'] = $this->input->post('id_kurikulum');
		   $post['nama_kurikulum'] = $this->input->post('nama_kurikulum');
		   $post['is_active'] = $this->input->post('is_active');

			$id = $this->Model_kurikulum->updateKurikulum($id_kurikulum, $post);

		   if ($id) {
			   $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
			   header('kurikulum/list');
			   
		   } else {
			   $this->session->set_flashdata ("message", '<div class="alert alert-success">Data gagal dihapus</div>');
			   header('/','refresh');
		   }

	   }
	   $this->template->load('template','kurikulum/edit', $data);
	}

	public function delete($id_kurikulum)
	{
		
		$post['is_deleted'] = "1";
		$result = $this->Model_kurikulum->deleteKurikulum($id_kurikulum, $post);

		if($result)
			$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil dihapus</div>');
		else
			$this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal dihapus</div>');
		// $query = $this->Blog_model->getSingleBlog('id', $id);
		// $data['blog'] = $query->row_array();
		redirect('kurikulum');

	}
	
	public function detail()
	
	{
		$info_sekolah = $this->db->select('js.jumlah_kelas')->from('tbl_jenjang_sekolah js')->join('tbl_sekolah_info si', 'js.id_jenjang = si.id_jenjang_sekolah')->get();
		$data['info'] = $info_sekolah->row_array();
		
		
		

		// $this->db->select('tj.nama_jurusan','tm.kd_mapel','tm.nama_mapel','kd.kelas')->from('tbl_kurikulum_detail kd')
		// ->join('tbl_kurikulum tk', 'kd.id_kurikulum=tk.id_kurikulum')
		// ->join('tbl_mapel tm', 'kd.kd_mapel=tm.kd_mapel')
		// ->join('tbl_jurusan tj', 'kd.kd_jurusan=tj.kd_jurusan')
		// ->get();

		
		$data['appertisers']  = $this->Model_kurikulum->getAppertisers();
		// $data['kurikulum'] = $this->Model_kurikulum->getSingleUser('is_deleted', '0')->result();
		$this->template->load('template','kurikulum/detail', $data);
	}

	function dataKurikulumDetail(){
		$kd_jurusan = $_GET['jurusan'];
		$kelas = $_GET['kelas'];
		echo "<table class='table table-bordered'>
					<thead>
					<tr>
						<th style='width:120px;'>NO</th>
						<th>KODE MAPEL</th>
						<th>NAMA MATA PELAJARAN</th>
						<th>KELAS</th>
					</tr>
					</thead>
					<tbody>";

					$sql = "SELECT tj.nama_jurusan,tm.kd_mapel,tm.nama_mapel,kd.kelas FROM tbl_kurikulum_detail as kd, tbl_kurikulum as tk,tbl_mapel as tm, tbl_jurusan as tj WHERE kd.id_kurikulum=tk.id_kurikulum and kd.kd_mapel=tm.kd_mapel and kd.kd_jurusan=tj.kd_jurusan and kd.kelas'$kelas' and kd.kd_jurusan='$kd_jurusan'";
					
					$kurikulum = $this->db->query($sql)->result();
					$no = 1;
					foreach($kurikulum as $u){
						echo  "<tr>
							<td> $no</td>
							<td> $u->kd_mapel</td>
							<td> $u->nama_mapel</td>
							<td> $u->kelas</td>
						</tr>";
						$no++;
					}
		echo		"</table>";
	}


}
