<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_guru');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index(){
		$data['guru'] = $this->Model_guru->getSingleUser('is_deleted', '0')->result();
		$this->template->load('template','guru/list', $data);
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
		 $this->form_validation->set_rules('nuptk', 'nuptk', 'required', array('required' => ' NUPTK Wajib Diisi.'));
		 $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required', array('required' => ' Nama Wajib Diisi.'));
		 $this->form_validation->set_rules('gender', 'gender', 'required', array('required' => ' Gender Wajib dipilih.'));
		
		// fungsi diatas bisa digantikan seperti berikut
		if ($this->form_validation->run() === TRUE) {
			# code...
		// ingat query builder CI menggunakan tanda kurung bukan kurung siku
			$data['id_guru'] = $this->input->post('id_guru');
			$data['nuptk'] = $this->input->post('nuptk');
			$data['nama_guru'] = $this->input->post('nama_guru');
			$data['gender'] = $this->input->post('gender');

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

				$id = $this->Model_guru->insert($data);

			if ($id) {
				$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
				redirect('guru','refresh');
				
			} else {
				$this->session->set_flashdata ("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
				redirect('/','refresh');
			}

		}
		$this->template->load('template','guru/add');
	}

	public function edit($id_guru){
		$query = $this->Model_guru->getSingleUser('id_guru', $id_guru);
		$data['user'] = $query->row_array();

		 $this->form_validation->set_rules('nuptk', 'nuptk', 'required', array('required' => ' NUPTK Wajib Diisi.'));
		 $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required', array('required' => ' Nama Wajib Diisi.'));
		 $this->form_validation->set_rules('gender', 'gender', 'required', array('required' => ' Gender Wajib dipilih.'));
	   
	   // fungsi diatas bisa digantikan seperti berikut
	   if ($this->form_validation->run() === TRUE) {
		   # code...
	   // ingat query builder CI menggunakan tanda kurung bukan kurung siku
	   $post['nuptk'] = $this->input->post('nuptk');
	   $post['nama_guru'] = $this->input->post('nama_guru');
	   $post['gender'] = $this->input->post('gender');

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
			   $post['foto'] = $this->upload->data()['file_name'] ; 
			 }

			$id = $this->Model_guru->update($id, $post);

		   if ($id) {
			   $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
			   header('guru/mahasiswa');
			   
		   } else {
			   $this->session->set_flashdata ("message", '<div class="alert alert-success">Data gagal dihapus</div>');
			   header('/','refresh');
		   }

	   }
	   $this->template->load('template','guru/edit', $data);
	}

	public function delete($id)
	{
		
		$post['is_deleted'] = "1";
		$result = $this->Model_guru->delete($id, $post);

		if($result)
			$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil dihapus</div>');
		else
			$this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal dihapus</div>');
		// $query = $this->Blog_model->getSingleBlog('id', $id);
		// $data['blog'] = $query->row_array();
		redirect('guru');

	}
}


