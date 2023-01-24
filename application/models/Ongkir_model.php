<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir_model extends CI_Model {

	public function create()
	{
		$data = array (
			'kabupaten' => $this->input->post('kabupaten'),
			'harga' => $this->input->post('harga')
		);
		$this->db->insert('tb_biaya',$data);
	}
	
	public function read()
	{
		$query = $this->db->get('tb_biaya');
		return $query->result();
	}
	
	public function read_by($id)
	{
		$this->db->where('id_biaya',$id);
		$query = $this->db->get('tb_biaya');
		return $query->row();
	}
	
	public function update($id)
	{
		$data = array (
			'kabupaten' => $this->input->post('kabupaten'),
			'harga' => $this->input->post('harga')
		);
		$this->db->where('id_biaya',$id);
		$this->db->update('tb_biaya',$data);
	}
	
	public function delete ($id)
	{
		$this->db->where('id_biaya',$id);
		$this->db->delete('tb_biaya');
	}
	
}
