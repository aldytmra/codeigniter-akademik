<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahunakademik extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_tahunakademik');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index(){
		$data['tahunakademik'] = $this->Model_tahunakademik->getSingleUser('is_deleted', '0')->result();
		$this->template->load('template','tahunakademik/list', $data);
	}

	public function dashboard(){
		echo '<h1>Selamat datang!</h1>';
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function add(){
		$this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required', array('required' => ' tahun Akademik Diisi.'));
		$this->form_validation->set_rules('is_active', 'is_active', 'required', array('required' => ' Status Harus Diisi.'));
		
		// fungsi diatas bisa digantikan seperti berikut
		if ($this->form_validation->run() === TRUE) {
			# code...
		// ingat query builder CI menggunakan tanda kurung bukan kurung siku
			$data['id_tahun_akademik'] = $this->input->post('id_tahun_akademik');
			$data['tahun_akademik'] = $this->input->post('tahun_akademik');
			$data['is_active'] = $this->input->post('is_active');
				
			$id = $this->Model_tahunakademik->insertTahunakademik($data);

			if ($id) {
				$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
				redirect('tahunakademik/list','refresh');
				
			} else {
				$this->session->set_flashdata ("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
				redirect('/','refresh');
			}

		}
		$this->template->load('template','tahunakademik/add');
	}

	public function edit($id_tahun_akademik){
		$query = $this->Model_tahunakademik->getSingleUser('id_tahun_akademik', $id_tahun_akademik);
		$data['user'] = $query->row_array();

		$this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required', array('required' => ' Tahun Akademik Diisi.'));
		$this->form_validation->set_rules('is_active', 'is_active', 'required', array('required' => ' Status Harus Diisi.'));
	   
	   // fungsi diatas bisa digantikan seperti berikut
	   if ($this->form_validation->run() == TRUE) {
		   # code...
	   // ingat query builder CI menggunakan tanda kurung bukan kurung siku
		   $post['id_tahun_akademik'] = $this->input->post('id_tahun_akademik');
		   $post['tahun_akademik'] = $this->input->post('tahun_akademik');
		   $post['is_active'] = $this->input->post('is_active');

			$id = $this->Model_tahunakademik->updateTahunakademik($id_tahun_akademik, $post);

		   if ($id) {
			   $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
			   redirect('tahunakademik');
			   
		   } else {
			   $this->session->set_flashdata ("message", '<div class="alert alert-success">Data gagal dihapus</div>');
			   header('/','refresh');
		   }

	   }
	   $this->template->load('template','tahunakademik/edit', $data);
	}

	public function delete($id_tahun_akademik)
	{
		
		$post['is_deleted'] = "1";
		$result = $this->Model_tahunakademik->deleteTahunakademik($id_tahun_akademik, $post);

		// if($result)
		// 	$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil dihapus</div>');
		// else
		// 	$this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal dihapus</div>');
		// // $query = $this->Blog_model->getSingleBlog('id', $id);
		// // $data['blog'] = $query->row_array();
		// redirect('tahunakademik/mahasiswa');

	}
}


