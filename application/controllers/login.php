<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}

	public function ceklogin()
	{
		if(isset($_POST['submit'])){
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$this->load->model('model_login');
			$cek = $this->model_login->ambillogin($username,$password);
			$hasil = count($cek);
			if($hasil>0){
				$pelogin = $this->db->get_where('login', array('username' => $username, 'password' => $password))->row();
				if($pelogin->level == 'admin'){
					redirect('admin/dosen');
				}else if($pelogin->level == 'user'){
					redirect('home');
				}
			}else{
				redirect('login');
			}
		}


	}
	public function ceklogout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}