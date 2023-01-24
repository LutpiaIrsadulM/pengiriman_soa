<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurir_model extends CI_Model {

	public function create()
	{
		$data = array (
			'nama_kurir' => $this->input->post('nama_kurir'),
			'no_telp' => $this->input->post('no_telp'),
			'email_kurir' => $this->input->post('email_kurir'),
			'alamat_kurir' => $this->input->post('alamat_kurir')
		);
		$this->db->insert('tb_kurir',$data);
	}
	
	public function read()
	{
		$query = $this->db->get('tb_kurir');
		return $query->result();
	}
	
	public function read_by($id)
	{
		$this->db->where('id_kurir',$id);
		$query = $this->db->get('tb_kurir');
		return $query->row();
	}
	
	public function update($id)
	{
		$data = array (
			'nama_kurir' => $this->input->post('nama_kurir'),
			'no_telp' => $this->input->post('no_telp'),
			'email_kurir' => $this->input->post('email_kurir'),
			'alamat_kurir' => $this->input->post('alamat_kurir')
		);
		$this->db->where('id_kurir',$id);
		$this->db->update('tb_kurir',$data);
	}
	
	public function delete ($id)
	{
		$this->db->where('id_kurir',$id);
		$this->db->delete('tb_kurir');
	}
	
	// public function reset($type)
	//{
	//	$this->db->set('password_00', password_hash($type, PASSWORD_DEFAULT));
	//	$this->db->where('usertype_00',$type);
	//	$this->db->update('users_00');
	//}
	//
}
