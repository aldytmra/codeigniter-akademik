<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_dashboard');
		$this->load->library('form_validation');
		$this->load->library('session');

    }
    
	public function login(){
		if($this->input->post()){
			$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
			$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
			$password_encrypt = md5($password);
			$cek_dashboard = $this->Model_dashboard->auth_user($username, $password_encrypt);

			if($cek_dashboard->num_rows() > 0)
			{
				$data=$cek_dashboard->row_array();
				// $this->session->set_userdata('masuk',TRUE);
						$akses = $this->session->set_userdata('masuk',TRUE);
						$this->session->set_userdata('username',$data['username']);
				// 		redirect('page');
                // $_SESSION['username'] = '$username';
				redirect('dashboard');
			}
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-warning">Username/password tidak valid</div>');
				redirect('index.php');
		}

		}
		
		$this->load->view('index.php');
		

    }
    
    public function index(){
		$data['siswa'] = $this->Model_dashboard->getSingleUser('is_deleted', '0')->result();
		$data['jmlruang'] = $this->Model_dashboard->jumlahKelas();
		$data['jmlsiswa'] = $this->Model_dashboard->jumlahSiswa();
		$data['jmlmapel'] = $this->Model_dashboard->jumlahMapel();
		
		$this->template->load('template','dashboard.php', $data);
    }
    
    public function logout()
	{
		$this->session->sess_destroy();
		redirect('dashboard/login');
	}
}