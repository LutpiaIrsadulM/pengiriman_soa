<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//if(! $this->session->userdata('username')) redirect('Auth00/login');
		//if($this->session->userdata('usertype')!='Admin') redirect('welcome');
		$this->load->model('Ongkir_model');
	}

	public function index()
	{
		$data['Ongkirs']=$this->Ongkir_model->read();
		$this->load->view('Ongkir/ongkir_list',$data);
	}
	
	public function add()
	{
		if($this->input->post('submit')) {
		$this->Ongkir_model->create();
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data Ongkir Berhasil Ditambah !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data Ongkir Gagal Ditambah !');
		}
		redirect('');
	}
		$this->load->view('Ongkir/ongkir_form');
	}
	
	public function edit($id)
	{
		if($this->input->post('submit')) {
		$this->Ongkir_model->update($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data Ongkir Berhasil Diupdate !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data Ongkir Gagal Diupdate !');
		}
		redirect('ongkir/Ongkir');
	}
		$data['ongkir']=$this->Ongkir_model->read_by($id);
		$this->load->view('Ongkir/ongkir_form',$data);
	}
	
	public function delete($id)
	{
		$this->Ongkir_model->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data Ongkir Berhasil Dihapus !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data Ongkir Gagal Dihapus !');
		}
		redirect('ongkir/Ongkir');
	}
	
}
