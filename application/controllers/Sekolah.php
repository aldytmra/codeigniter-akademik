<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

    public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_sekolah');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index()
	{
        $query = $this->Model_sekolah->getSingleUser('id_sekolah', 1);
		$data['info'] = $query->row_array();

        $this->form_validation->set_rules('nama_sekolah', 'nama_sekolah', 'required', array('required' => ' Kode Nama Kurikulum Diisi.'));
        $this->form_validation->set_rules('alamat_sekolah', 'alamat_sekolah', 'required', array('required' => ' Kode Nama Kurikulum Diisi.'));
        $this->form_validation->set_rules('email', 'email', 'required', array('required' => ' Kode Nama Kurikulum Diisi.'));
        $this->form_validation->set_rules('telepon', 'telepon', 'required', array('required' => ' Kode Nama Kurikulum Diisi.'));
		$this->form_validation->set_rules('id_jenjang_sekolah', 'id_jenjang_sekolah', 'required', array('required' => ' Status Harus Diisi.'));
       
        // fungsi diatas bisa digantikan seperti berikut
	   if ($this->form_validation->run() == TRUE) {
        # code...
        // ingat query builder CI menggunakan tanda kurung bukan kurung siku
        $post['nama_sekolah'] = $this->input->post('nama_sekolah');
        $post['alamat_sekolah'] = $this->input->post('alamat_sekolah');
        $post['email'] = $this->input->post('email');
        $post['telepon'] = $this->input->post('telepon');
        $post['id_jenjang_sekolah'] = $this->input->post('id_jenjang_sekolah');

        $id = $this->Model_sekolah->updateSekolah(1, $post);

        if ($id) {
            $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
            header('kurikulum/list');
            
        } else {
            $this->session->set_flashdata ("message", '<div class="alert alert-success">Data gagal dihapus</div>');
            header('/','refresh');
        }

    }
        $this->template->load('template','info_sekolah', $data);
	}
}