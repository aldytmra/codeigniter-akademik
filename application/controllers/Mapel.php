<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_mapel');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index(){
		$data['mapel'] = $this->Model_mapel->getSingleUser('is_deleted', '0')->result();
		$this->template->load('template','mapel/list', $data);
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function add(){
		 $this->form_validation->set_rules('kd_mapel', 'kd_mapel', 'required', array('required' => ' Kode Mapel Wajib Diisi.'));
		 $this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required', array('required' => ' Nama Mapel Wajib Diisi.'));
		
		// fungsi diatas bisa digantikan seperti berikut
		if ($this->form_validation->run() === TRUE) {
			# code...
		// ingat query builder CI menggunakan tanda kurung bukan kurung siku
			$data['kd_mapel'] = $this->input->post('kd_mapel');
			$data['nama_mapel'] = $this->input->post('nama_mapel');


			$id = $this->Model_mapel->insert($data);

			if ($id) {
				$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
				redirect('mapel','refresh');
				
			} else {
				$this->session->set_flashdata ("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
				redirect('/','refresh');
			}

		}
		$this->template->load('template','mapel/add');
	}

	public function edit($kd_mapel){
		$query = $this->Model_mapel->getSingleUser('kd_mapel', $kd_mapel);
		$data['user'] = $query->row_array();

		$this->form_validation->set_rules('kd_mapel', 'kd_mapel', 'required', array('required' => ' Kode Mapel Wajib Diisi.'));
		 $this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required', array('required' => ' Nama Mapel Wajib Diisi.'));
	   
	   // fungsi diatas bisa digantikan seperti berikut
	   if ($this->form_validation->run() === TRUE) {
		   # code...
	   // ingat query builder CI menggunakan tanda kurung bukan kurung siku
	   $post['kd_mapel'] = $this->input->post('kd_mapel');
	   $post['nama_mapel'] = $this->input->post('nama_mapel');

			$id = $this->Model_mapel->update($kd_mapel, $post);

		   if ($id) {
			   $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
			   redirect('mapel','refresh');
			   
		   } else {
			   $this->session->set_flashdata ("message", '<div class="alert alert-success">Data gagal dihapus</div>');
			   redirect('/','refresh');
		   }

	   }
	   $this->template->load('template','mapel/edit', $data);
	}

	public function delete($id)
	{
		
		$post['is_deleted'] = "1";
		$result = $this->Model_mapel->delete($id, $post);

		if($result)
			$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil dihapus</div>');
		else
			$this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal dihapus</div>');
		// $query = $this->Blog_model->getSingleBlog('id', $id);
		// $data['blog'] = $query->row_array();
		redirect('mapel');

	}
}


