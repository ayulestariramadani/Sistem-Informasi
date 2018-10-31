<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('contact_view');
	}
	//-----insert pada Get in Touch-----//
	function insert()
	{
		$data = array('firstname'=> $this->input->post('firstname', true),
						'lastname'=> $this->input->post('lastname', true),
						'email'=> $this->input->post('email', true),
						'subject'=> $this->input->post('subject', true),
						'about'=> $this->input->post('about', true)
						);
		$this->load->model('model_crud');
		$insert = $this->model_crud->insertData('contact_visit',$data);
		$title['h5'] = "thanks for visiting our website";
		if($insert > 0){
			$this->load->view('contact_view', $title);
		}else{
			echo 'Gagal disimpan';
		}
	}

}
