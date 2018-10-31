<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function aimp()
	{
		$sess = $this->uri->segment(3);
		$this->load->model('model_crud');
		$data['u'] = $this->model_crud->getData('tugasakhir_aimp', $sess,'id_ta');
		$this->load->view('detail_view', $data);
	}
	public function cc()
	{
		$sess = $this->uri->segment(3);
		$this->load->model('model_crud');
		$data['u'] = $this->model_crud->getData('tugasakhir', $sess,'id_ta');
		$this->load->view('detail_view', $data);
	}
	public function iot()
	{
		$sess = $this->uri->segment(3);
		$this->load->model('model_crud');
		$data['u'] = $this->model_crud->getData('tugasakhir_iot', $sess,'id_ta');
		$this->load->view('detail_view', $data);
	}
}