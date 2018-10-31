<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin_view');
	}

	//--------controller dosen-------//
	//----Read----//
	public function dosen()
	{
		$this->load->model('model_crud');
		$sess = ['a'=> $this->model_crud->getAllData('dosen_aimp'),
		'b'=> $this->model_crud->getAllData('dosen'),
		'c'=> $this->model_crud->getAllData('dosen_iot')
	];
	$this->load->view('dosen_view', $sess);
}

	//----Create----//
public function dosenaimp()
{
	$config = array(
		'upload_path' => 'images/dosen',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('foto_dosen')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('foto_dosen')){
		$data = array('foto_dosen' => $this->upload->file_name,
			'nama_dosen'=> $this->input->post('nama_dosen', true),
			'jabatan'=> $this->input->post('jabatan', true)
		);

		$this->model_crud->insertData('dosen_aimp',$data);
		redirect('admin/dosen');

	}
	$this->data = array('getdata' => $this->db->get('dosen'));
}

public function dosencc()
{
	$config = array(
		'upload_path' => 'images/dosen',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('foto_dosen')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('foto_dosen')){
		$data = array('foto_dosen' => $this->upload->file_name,
			'nama_dosen'=> $this->input->post('nama_dosen', true),
			'jabatan'=> $this->input->post('jabatan', true)
		);

		$this->model_crud->insertData('dosen',$data);
		redirect('admin/dosen');
	}
	$this->data = array('getdata' => $this->db->get('dosen'));
}

public function doseniot()
{
	$config = array(
		'upload_path' => 'images/dosen',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('foto_dosen')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('foto_dosen')){
		$data = array('foto_dosen' => $this->upload->file_name,
			'nama_dosen'=> $this->input->post('nama_dosen', true),
			'jabatan'=> $this->input->post('jabatan', true)
		);

		$this->model_crud->insertData('dosen_iot',$data);
		redirect('admin/dosen');
	}
	$this->data = array('getdata' => $this->db->get('dosen'));
}

	//----Delete----//
public function delete(){
	$u = $this->uri->segment(3);
	$this->load->model('model_crud');
	$this->model_crud->delete('dosen_aimp', $u, 'id_dosen');
	redirect('admin/dosen','refresh');
}

public function deletecc(){
	$u = $this->uri->segment(3);
	$this->load->model('model_crud');
	$this->model_crud->delete('dosen', $u, 'id_dosen');
	redirect('admin/dosen','refresh');
}

public function deleteiot(){
	$u = $this->uri->segment(3);
	$this->load->model('model_crud');
	$this->model_crud->delete('dosen_iot', $u, 'id_dosen');
	redirect('admin/dosen','refresh');
}

	//----Update----//
public function getDataByIdAimp($id)
{
	$this->load->model('model_crud');
	$sess = ['a'=>"updateaimp",
	'b'=> $this->model_crud->getData('dosen_aimp',$id,'id_dosen')];
	$this->load->view('editDosen_view', $sess);
}
public function getDataByIdCc($id)
{
	$this->load->model('model_crud');
	$sess = ['a'=>"updatecc",
	'b'=> $this->model_crud->getData('dosen',$id,'id_dosen')];
	$this->load->view('editDosen_view', $sess);
}
public function getDataByIdIot($id)
{
	$this->load->model('model_crud');
	$sess = ['a'=>"updateiot",
	'b'=> $this->model_crud->getData('dosen_iot',$id,'id_dosen')];
	$this->load->view('editDosen_view', $sess);
}


public function updateaimp()
{
	$config = array(
		'upload_path' => 'images/dosen',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('foto_dosen')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');


	if($this->upload->do_upload('foto_dosen')){
		$data = array('foto_dosen' => $this->upload->file_name,
			'nama_dosen'=> $this->input->post('nama_dosen', true),
			'jabatan'=> $this->input->post('jabatan', true)
		);
		$id = $this->input->post('hidden_id');
		$this->model_crud->update('dosen_aimp',$data,$id,'id_dosen');
		redirect('admin/dosen');

	}
	$data = array('nama_dosen'=> $this->input->post('nama_dosen', true),
		'jabatan'=> $this->input->post('jabatan', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_crud->update('dosen_aimp',$data,$id,'id_dosen');
	redirect('admin/dosen');
}

public function updatecc()
{
	$config = array(
		'upload_path' => 'images/dosen',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('foto_dosen')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('foto_dosen')){
		$data = array('foto_dosen' => $this->upload->file_name,
			'nama_dosen'=> $this->input->post('nama_dosen', true),
			'jabatan'=> $this->input->post('jabatan', true)
		);
		$id = $this->input->post('hidden_id');
		$this->model_crud->update('dosen',$data,$id, 'id_dosen');
		redirect('admin/dosen');

	}
	$data = array('nama_dosen'=> $this->input->post('nama_dosen', true),
		'jabatan'=> $this->input->post('jabatan', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_crud->update('dosen',$data,$id, 'id_dosen');
	redirect('admin/dosen');
}
public function updateiot()
{
	$config = array(
		'upload_path' => 'images/dosen',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('foto_dosen')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');


	if($this->upload->do_upload('foto_dosen')){
		$data = array('foto_dosen' => $this->upload->file_name,
			'nama_dosen'=> $this->input->post('nama_dosen', true),
			'jabatan'=> $this->input->post('jabatan', true)
		);
		$id = $this->input->post('hidden_id');
		$this->model_crud->update('dosen_iot',$data,$id, 'id_dosen');
		redirect('admin/dosen');

	}
	$data = array('nama_dosen'=> $this->input->post('nama_dosen', true),
		'jabatan'=> $this->input->post('jabatan', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_crud->update('dosen_iot',$data,$id, 'id_dosen');
	redirect('admin/dosen');
}

	//------controller tugas akhir-----------//
	//-----Read-----//
public function tugasakhir()
{
	$this->load->model('model_crud');
	$sess = ['a'=> $this->model_crud->getAllData('tugasakhir_aimp'),
	'b'=> $this->model_crud->getAllData('tugasakhir'),
	'c'=> $this->model_crud->getAllData('tugasakhir_iot')
];
$this->load->view('tugasakhir_view', $sess);
}

	//----Create----//
public function taaimp()
{
	$config = array(
		'upload_path' => 'images/tugasakhir',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('gambar_ta')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('gambar_ta')){
		$data = array('gambar_ta' => $this->upload->file_name,
			'judul_ta'=> $this->input->post('judul_ta', true),
			'latarbelakang'=> $this->input->post('latarbelakang', true),
			'abstract'=> $this->input->post('abstract', true),
			'tujuan'=> $this->input->post('tujuan', true),
			'penulis1'=> $this->input->post('penulis1', true),
			'penulis2'=> $this->input->post('penulis2', true),
			'pembimbing1'=> $this->input->post('pembimbing1', true),
			'pembimbing2'=> $this->input->post('pembimbing2', true)
		);

		$this->model_crud->insertData('tugasakhir_aimp',$data);
		redirect('admin/tugasakhir');
		
	}
	$this->data = array('getdata' => $this->db->get('tugasakhir_aimp'));
}

public function tacc()
{
	$config = array(
		'upload_path' => 'images/tugasakhir',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('gambar_ta')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('gambar_ta')){
		$data = array('gambar_ta' => $this->upload->file_name,
			'judul_ta'=> $this->input->post('judul_ta', true),
			'latarbelakang'=> $this->input->post('latarbelakang', true),
			'abstract'=> $this->input->post('abstract', true),
			'tujuan'=> $this->input->post('tujuan', true),
			'penulis1'=> $this->input->post('penulis1', true),
			'penulis2'=> $this->input->post('penulis2', true),
			'pembimbing1'=> $this->input->post('pembimbing1', true),
			'pembimbing2'=> $this->input->post('pembimbing2', true)
		);


		$this->model_crud->insertData('tugasakhir',$data);
		redirect('admin/tugasakhir');

	}
	$this->data = array('getdata' => $this->db->get('tugasakhir'));
}

public function taiot()
{
	$config = array(
		'upload_path' => 'images/tugasakhir',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('gambar_ta')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('gambar_ta')){
		$data = array('gambar_ta' => $this->upload->file_name,
			'judul_ta'=> $this->input->post('judul_ta', true),
			'latarbelakang'=> $this->input->post('latarbelakang', true),
			'abstract'=> $this->input->post('abstract', true),
			'tujuan'=> $this->input->post('tujuan', true),
			'penulis1'=> $this->input->post('penulis1', true),
			'penulis2'=> $this->input->post('penulis2', true),
			'pembimbing1'=> $this->input->post('pembimbing1', true),
			'pembimbing2'=> $this->input->post('pembimbing2', true)
		);

		$this->model_crud->insertData('tugasakhir_iot',$data);
		redirect('admin/tugasakhir');

	}
	$this->data = array('getdata' => $this->db->get('tugasakhir_iot'));
}

	//----Delete----//
public function deletetaaimp(){
	$u = $this->uri->segment(3);
	$this->load->model('model_crud');
	$this->model_crud->delete('tugasakhir_aimp', $u, 'id_ta');
	redirect('admin/tugasakhir','refresh');
}

public function deletetacc(){
	$u = $this->uri->segment(3);
	$this->load->model('model_crud');
	$this->model_crud->delete('tugasakhir', $u, 'id_ta');
	redirect('admin/tugasakhir','refresh');
}

public function deletetaiot(){
	$u = $this->uri->segment(3);
	$this->load->model('model_crud');
	$this->model_crud->delete('tugasakhir_iot', $u, 'id_ta');
	redirect('admin/tugasakhir','refresh');
}

	//----Update----//
public function getDataByIdtaAimp($id)
{
	$this->load->model('model_crud');
	$sess = ['a'=>"updatetaaimp",
	'b'=> $this->model_crud->getData('tugasakhir_aimp',$id,'id_ta')];
	$this->load->view('editTa_view', $sess);
}
public function getDataByIdtaCc($id)
{
	$this->load->model('model_crud');
	$sess = ['a'=>"updatetacc",
	'b'=> $this->model_crud->getData('tugasakhir',$id,'id_ta')];
	$this->load->view('editTa_view', $sess);
}
public function getDataByIdtaIot($id)
{
	$this->load->model('model_crud');
	$sess = ['a'=>"updatetaiot",
	'b'=> $this->model_crud->getData('tugasakhir_iot',$id,'id_ta')];
	$this->load->view('editTa_view', $sess);
}
public function updatetaaimp()
{
	$config = array(
		'upload_path' => 'images/tugasakhir',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('gambar_ta')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('gambar_ta')){
		$data = array('gambar_ta' => $this->upload->file_name,
			'judul_ta'=> $this->input->post('judul_ta', true),
			'latarbelakang'=> $this->input->post('latarbelakang', true),
			'abstract'=> $this->input->post('abstract', true),
			'tujuan'=> $this->input->post('tujuan', true),
			'penulis1'=> $this->input->post('penulis1', true),
			'penulis2'=> $this->input->post('penulis2', true),
			'pembimbing1'=> $this->input->post('pembimbing1', true),
			'pembimbing2'=> $this->input->post('pembimbing2', true)
		);
		$this->model_crud->update('tugasakhir_aimp',$data, $this->input->post('hidden_id'),'id_ta');
		redirect('admin/tugasakhir');

	}
	$data = array('judul_ta'=> $this->input->post('judul_ta', true),
		'latarbelakang'=> $this->input->post('latarbelakang', true),
		'abstract'=> $this->input->post('abstract', true),
		'tujuan'=> $this->input->post('tujuan', true),
		'penulis1'=> $this->input->post('penulis1', true),
		'penulis2'=> $this->input->post('penulis2', true),
		'pembimbing1'=> $this->input->post('pembimbing1', true),
		'pembimbing2'=> $this->input->post('pembimbing2', true)
	);
	$this->model_crud->update('tugasakhir_aimp',$data, $this->input->post('hidden_id'),'id_ta');
	redirect('admin/tugasakhir');
}

public function updatetacc()
{
	$config = array(
		'upload_path' => 'images/tugasakhir',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('gambar_ta')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('gambar_ta')){
		$data = array('gambar_ta' => $this->upload->file_name,
			'judul_ta'=> $this->input->post('judul_ta', true),
			'latarbelakang'=> $this->input->post('latarbelakang', true),
			'abstract'=> $this->input->post('abstract', true),
			'tujuan'=> $this->input->post('tujuan', true),
			'penulis1'=> $this->input->post('penulis1', true),
			'penulis2'=> $this->input->post('penulis2', true),
			'pembimbing1'=> $this->input->post('pembimbing1', true),
			'pembimbing2'=> $this->input->post('pembimbing2', true)
		);

		$this->model_crud->update('tugasakhir',$data, $this->input->post('hidden_id'),'id_ta');
		redirect('admin/tugasakhir');

	}
	$data = array('judul_ta'=> $this->input->post('judul_ta', true),
		'latarbelakang'=> $this->input->post('latarbelakang', true),
		'abstract'=> $this->input->post('abstract', true),
		'tujuan'=> $this->input->post('tujuan', true),
		'penulis1'=> $this->input->post('penulis1', true),
		'penulis2'=> $this->input->post('penulis2', true),
		'pembimbing1'=> $this->input->post('pembimbing1', true),
		'pembimbing2'=> $this->input->post('pembimbing2', true)
	);

	$this->model_crud->update('tugasakhir',$data, $this->input->post('hidden_id'),'id_ta');
	redirect('admin/tugasakhir');
}

public function updatetaiot()
{
	$config = array(
		'upload_path' => 'images/tugasakhir',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 0,
		'filename' => url_title($this->input->post('gambar_ta')),
		'encrypt_name'=>true
	);
	$this->load->library('upload', $config);
	$this->load->model('model_crud');

	if($this->upload->do_upload('gambar_ta')){
		$data = array('gambar_ta' => $this->upload->file_name,
			'judul_ta'=> $this->input->post('judul_ta', true),
			'latarbelakang'=> $this->input->post('latarbelakang', true),
			'abstract'=> $this->input->post('abstract', true),
			'tujuan'=> $this->input->post('tujuan', true),
			'penulis1'=> $this->input->post('penulis1', true),
			'penulis2'=> $this->input->post('penulis2', true),
			'pembimbing1'=> $this->input->post('pembimbing1', true),
			'pembimbing2'=> $this->input->post('pembimbing2', true)
		);

		$this->model_crud->update('tugasakhir_iot',$data, $this->input->post('hidden_id'),'id_ta');
		redirect('admin/tugasakhir');

	}
	$data = array('judul_ta'=> $this->input->post('judul_ta', true),
		'latarbelakang'=> $this->input->post('latarbelakang', true),
		'abstract'=> $this->input->post('abstract', true),
		'tujuan'=> $this->input->post('tujuan', true),
		'penulis1'=> $this->input->post('penulis1', true),
		'penulis2'=> $this->input->post('penulis2', true),
		'pembimbing1'=> $this->input->post('pembimbing1', true),
		'pembimbing2'=> $this->input->post('pembimbing2', true)
	);

	$this->model_crud->update('tugasakhir_iot',$data, $this->input->post('hidden_id'),'id_ta');
	redirect('admin/tugasakhir');
}

	//Admin Login
public function login()
{
	$this->load->model('model_crud');
	$sess = ['a'=> $this->model_crud->getAllData('login')];
	$this->load->view('admin_login', $sess);
}
//---------------Insert Admin-------------------//
public function admin_login()
{
	$this->load->model('model_crud');
	$data = array('username'=> $this->input->post('username', true),
		'password'=> $this->input->post('password', true),
		'level'=> $this->input->post('level', true)
	);

	$this->model_crud->insertData('login',$data);
	redirect('admin/login');
}
	//----Delete Admin----//
public function admin_delete(){
	$u = $this->uri->segment(3);
	$this->load->model('model_crud');
	$this->model_crud->delete('login', $u, 'id');
	redirect('admin/login','refresh');
}

public function admin_edit($id)
{
	$this->load->model('model_crud');
	$sess = ['b'=> $this->model_crud->getData('login',$id,'id')];
	$this->load->view('edit_view', $sess);
}
//---------------Update Admin-------------------//
public function admin_update()
{
	$this->load->model('model_crud');
	$data = array('username'=> $this->input->post('username', true),
		'password'=> $this->input->post('password', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_crud->update('login',$data,$id, 'id');
	redirect('admin/login');

}

}
