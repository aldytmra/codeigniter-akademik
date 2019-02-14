<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_ruangan');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index(){
		$data['ruangan'] = $this->Model_ruangan->getSingleUser('is_deleted', '0')->result();
		$this->template->load('template','ruangan/list', $data);
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
		 $this->form_validation->set_rules('nim', 'nim', 'required', array('required' => ' NIM Wajib Diisi.'));
		 $this->form_validation->set_rules('nama', 'nama', 'required', array('required' => ' Nama Wajib Diisi.'));
		 $this->form_validation->set_rules('gender', 'gender', 'required', array('required' => ' gender Wajib dipilih.'));
		 $this->form_validation->set_rules('kd_agama', 'agama', 'required', array('required' => ' agama Wajib dipilih.'));
		 $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', array('required' => ' Tanggal lahir Wajib diisi.'));
		 $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required', array('required' => ' tempat_lahir wajib diisi.'));
		
		// fungsi diatas bisa digantikan seperti berikut
		if ($this->form_validation->run() === TRUE) {
			# code...
		// ingat query builder CI menggunakan tanda kurung bukan kurung siku
			$data['nim'] = $this->input->post('nim');
			$data['nama'] = $this->input->post('nama');
			$data['gender'] = $this->input->post('gender');
			$data['kd_agama'] = $this->input->post('agama');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['tempat_lahir'] = $this->input->post('tempat_lahir');

			$config['upload_path']   = './uploads/'; 
	         $config['allowed_types'] = 'gif|jpg|png'; 
	         $config['max_size']      = 200; 
	         $config['max_width']     = 2000; 
	         $config['max_height']    = 1500;  
	         $this->load->library('upload', $config);
				
	         if ( !$this->upload->do_upload('foto')) 
	         {
	            echo $this->upload->display_errors(); 
	         }
				
	         else 
	         { 
	            $data['foto'] = $this->upload->data()['file_name'] ; 
			  }

				$id = $this->Model_ruangan->insertSiswa($data);

			if ($id) {
				$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
				redirect('ruangan/mahasiswa','refresh');
				
			} else {
				$this->session->set_flashdata ("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
				redirect('/','refresh');
			}

		}
		$this->template->load('template','ruangan/add');
	}

	public function edit($kd_ruangan){
		$query = $this->Model_ruangan->getSingleUser('kd_ruangan', $kd_ruangan);
		$data['user'] = $query->row_array();

		$this->form_validation->set_rules('kd_ruangan', 'kd_ruangan', 'required', array('required' => ' Kode Ruang Wajib Diisi.'));
		$this->form_validation->set_rules('nama_ruangan', 'nama_ruangan', 'required', array('required' => ' Nama Ruang Wajib Diisi.'));
	   
	   // fungsi diatas bisa digantikan seperti berikut
	   if ($this->form_validation->run() == TRUE) {
		   # code...
	   // ingat query builder CI menggunakan tanda kurung bukan kurung siku
		   $post['kd_ruangan'] = $this->input->post('kd_ruangan');
		   $post['nama_ruangan'] = $this->input->post('nama_ruangan');

			$id = $this->Model_ruangan->updateRuangan($kd_ruangan, $post);

		   if ($id) {
			   $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
			   header('ruangan/list');
			   
		   } else {
			   $this->session->set_flashdata ("message", '<div class="alert alert-success">Data gagal dihapus</div>');
			   header('/','refresh');
		   }

	   }
	   $this->template->load('template','ruangan/edit', $data);
	}

	public function delete($kd_ruangan)
	{
		
		$post['is_deleted'] = "1";
		$result = $this->Model_ruangan->deleteRuangan($kd_ruangan, $post);

		// if($result)
		// 	$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil dihapus</div>');
		// else
		// 	$this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal dihapus</div>');
		// // $query = $this->Blog_model->getSingleBlog('id', $id);
		// // $data['blog'] = $query->row_array();
		// redirect('ruangan/mahasiswa');

	}
}


