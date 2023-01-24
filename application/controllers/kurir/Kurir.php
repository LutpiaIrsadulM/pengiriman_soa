<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurir extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//if(! $this->session->userdata('username')) redirect('Auth00/login');
		//if($this->session->userdata('usertype')!='Admin') redirect('welcome');
		$this->load->model('Kurir_model');
	}

	public function index()
	{
		$data['kurirs']=$this->Kurir_model->read();
		$this->load->view('Kurir/kurir_list',$data);
	}
	
	public function add()
	{
		if($this->input->post('submit')) {
		$this->Kurir_model->create();
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data Kurir Berhasil Ditambah !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data Kurir Gagal Ditambah !');
		}
		redirect('');
	}
		$this->load->view('Kurir/kurir_form');
	}
	
	public function edit($id)
	{
		if($this->input->post('submit')) {
		$this->Kurir_model->update($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data user Berhasil Diupdate !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data user Gagal Diupdate !');
		}
		redirect('kurir/Kurir');
	}
		$data['kurir']=$this->Kurir_model->read_by($id);
		$this->load->view('Kurir/kurir_form',$data);
	}
	
	public function delete($id)
	{
		$this->Kurir_model->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data user Berhasil Dihapus !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data user Gagal Dihapus !');
		}
		redirect('kurir/Kurir');
	}
	
	//public function reset($type)
    //{
       // $this->Kurir_model->reset($type);
		//if($this->db->affected_rows() > 0){
		//	$this->session->set_flashdata('msg','<p  style="color:green">Password Succesfully Reseted</p>');
		//}else{
		//	$this->session->set_flashdata('msg','<p  style="color:red">Password reset failed</p>');
		//}
		//redirect('Kurir');
   // }
}
