<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_siswa');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index(){
		$data['siswa'] = $this->Model_siswa->getSingleUser('is_deleted', '0')->result();
		$this->template->load('template','siswa/list',$data);
	}

	public function dashboard(){
		echo '<h1>Selamat datang!</h1>';
	}

	public function login()
	{

		
		if($this->input->post()){
			$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
			$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
			$password_encrypt = md5($password);
			$cek_siswa = $this->Model_siswa->auth_user($username, $password_encrypt);

			if($cek_siswa->num_rows() > 0)
			{
				$data=$cek_siswa->row_array();
				// $this->session->set_userdata('masuk',TRUE);
						$akses = $this->session->set_userdata('masuk',TRUE);
						$this->session->set_userdata('username',$data['username']);
				// 		redirect('page');
				// $_SESSION['username'] = '$username';
				redirect('siswa');
			}
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-warning">Username/password tidak valid</div>');
				redirect('siswa/login');
		}

		}
		
		$this->load->view('siswa/login');
		

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

				$id = $this->Model_siswa->insertSiswa($data);

			if ($id) {
				$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
				redirect('siswa/mahasiswa','refresh');
				
			} else {
				$this->session->set_flashdata ("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
				redirect('/','refresh');
			}

		}
		$this->template->load('template','siswa/add');
	}

	public function edit($nim){
		$query = $this->Model_siswa->getSingleUser('nim', $nim);
		$data['user'] = $query->row_array();

		$this->form_validation->set_rules('nim', 'nim', 'required', array('required' => ' NIM Wajib Diisi.'));
		$this->form_validation->set_rules('nama', 'nama', 'required', array('required' => ' Nama Wajib Diisi.'));
		$this->form_validation->set_rules('gender', 'gender', 'required', array('required' => ' gender Wajib dipilih.'));
		$this->form_validation->set_rules('agama', 'agama', 'required', array('required' => ' agama Wajib dipilih.'));
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', array('required' => ' Tanggal lahir Wajib diisi.'));
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required', array('required' => ' judul wajib diisi.'));
	   
	   // fungsi diatas bisa digantikan seperti berikut
	   if ($this->form_validation->run() === TRUE) {
		   # code...
	   // ingat query builder CI menggunakan tanda kurung bukan kurung siku
		   $post['nim'] = $this->input->post('nim');
		   $post['nama'] = $this->input->post('nama');
		   $post['gender'] = $this->input->post('gender');
		   $post['kd_agama'] = $this->input->post('agama');
		   $post['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		   $post['tempat_lahir'] = $this->input->post('tempat_lahir');

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

			$id = $this->Model_siswa->updateUser($id, $post);

		   if ($id) {
			   $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
			   header('siswa/mahasiswa');
			   
		   } else {
			   $this->session->set_flashdata ("message", '<div class="alert alert-success">Data gagal dihapus</div>');
			   header('/','refresh');
		   }

	   }
	   $this->template->load('template','siswa/edit', $data);
	}

	public function delete($id)
	{
		
		$post['is_deleted'] = "1";
		$result = $this->Model_siswa->deleteUser($id, $post);

		if($result)
			$this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil dihapus</div>');
		else
			$this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal dihapus</div>');
		// $query = $this->Blog_model->getSingleBlog('id', $id);
		// $data['blog'] = $query->row_array();
		redirect('siswa/mahasiswa');

	}
}


