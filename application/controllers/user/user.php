<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//if(! $this->session->userdata('username')) redirect('Auth00/login');
		//if($this->session->userdata('usertype')!='Admin') redirect('welcome');
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['users']=$this->user_model->read();
		$this->load->view('user/user_list',$data);
	}
	
	public function add()
	{
		if($this->input->post('submit')) {
		$this->user_model->create();
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data user Berhasil Ditambah !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data user Gagal Ditambah !');
		}
		redirect('user/User');
	}
		$this->load->view('user/user_form');
	}
	
	public function edit($id)
	{
		if($this->input->post('submit')) {
		$this->user_model->update($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data user Berhasil Diupdate !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data user Gagal Diupdate !');
		}
		redirect('user/user');
	}
		$data['user']=$this->user_model->read_by($id);
		$this->load->view('user/user_form',$data);
	}
	
	public function delete($id)
	{
		$this->user_model->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Data user Berhasil Dihapus !');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Data user Gagal Dihapus !');
		}
		redirect('user/user');
	}
	
	
	//public function reset($type)
    //{
       // $this->user_model->reset($type);
		//if($this->db->affected_rows() > 0){
		//	$this->session->set_flashdata('msg','<p  style="color:green">Password Succesfully Reseted</p>');
		//}else{
		//	$this->session->set_flashdata('msg','<p  style="color:red">Password reset failed</p>');
		//}
		//redirect('user');
   // }
}
