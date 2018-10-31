<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	
	function contact()
	{
		$title['h5'] = " ";
		$this->load->view('contact_view', $title);
	}
	
	function aimp()
	{
		$this->load->model('model_crud');
		$sess = ['a'=> "Artificial Intelegence and Multimedia Processing",
					'b'=>$this->model_crud->getAllData('dosen_aimp'),
					'c'=> "A I M P",
					'd'=>$this->model_crud->getAllData('tugasakhir_aimp'),
					'e'=>"aimp1.jpg",
					'f'=>"aimp4.jpg",
					'h'=>"aimp5.png",
					'i'=>"aimp3.jpg",
					'g'=>"aimp2.jpg",
					'j'=>"aimp",
					'ai'=> "active",
					'cc'=> " ",
					'iot'=> " ",
					'info1'=> "Dr. Indrabayu, S.T., M.T., M.Bus.Sys.", 
					'info2'=> "Kampus Faktultas Teknik Universitas Hasanuddin Lantai 2",
					'info3'=> "67 Mahasiswa",
					'info4'=> "8 Dosen",
					'info5'=> "Sofie",
					'info6'=> "Lab ini adalah lab A I M P"
		];
		$this->load->view('lab_view', $sess);
	}

	function cc()
	{
		$this->load->model('model_crud');
		$sess = ['a'=> "Cloud Computing",
					'b'=>$this->model_crud->getAllData('dosen'),
					'c'=> "C C",
					'd'=>$this->model_crud->getAllData('tugasakhir'),
					'e'=>"cc1.png",
					'f'=>"cc2.jpg",
					'h'=>"cc5.jpg",
					'i'=>"cc4.jpg",
					'g'=>"cc3.jpg",
					'j'=>"cc",
					'ai'=> " ",
					'cc'=> "active",
					'iot'=> " ",
					'info1'=> "Dr. Amil Ahmad Ilham, S.T., M.IT.", 
					'info2'=> "Kampus Faktultas Teknik Universitas Hasanuddin Lantai 2",
					'info3'=> "120 Mahasiswa",
					'info4'=> "12 Dosen",
					'info5'=> "Buat Web",
					'info6'=> "Lab ini adalah lab Cloud Computing"
		];
		$this->load->view('lab_view', $sess);
	}

	function iot()
	{
		$this->load->model('model_crud');
		$sess = ['a'=> "Internet of Things",
					'b'=>$this->model_crud->getAllData('dosen_iot'),
					'c'=> "I o T",
					'd'=>$this->model_crud->getAllData('tugasakhir_iot'),
					'e'=>"iot1.jpg",
					'f'=>"iot2.png",
					'h'=>"iot3.jpg",
					'i'=>"iot4.jpg",
					'g'=>"iot5.jpg",
					'j'=>"iot",
					'ai'=> " ",
					'cc'=> " ",
					'iot'=> "active",
					'info1'=> "Dr. Adnan, S.T., M.T.", 
					'info2'=> "Kampus Faktultas Teknik Universitas Hasanuddin Lantai 2",
					'info3'=> "73 Mahasiswa",
					'info4'=> "6 Dosen",
					'info5'=> "Buat Sensor",
					'info6'=> "Lab ini adalah lab IoT"
		];
		$this->load->view('lab_view', $sess);
	}

	function insertEmail()
	{
		$data = array('email'=> $this->input->post('email', true)
						);
		$this->load->model('model_crud');
		$insert = $this->model_crud->insertData('email',$data);
		$title['h5'] = "";
		if($insert > 0){
			$this->load->view('contact_view',$title);
		}else{
			echo 'Gagal disimpan';
		}
	}
	

}
