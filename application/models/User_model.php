<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function create()
	{
		$data = array (
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			'usertype' => $this->input->post('usertype'),
            'password' => password_hash($this->input->post('usertype'), PASSWORD_DEFAULT)
		);
		$this->db->insert('tb_user',$data);
	}
	
	public function read()
	{
		$query = $this->db->get('tb_user');
		return $query->result();
	}
	
	public function read_by($id)
	{
		$this->db->where('id_user',$id);
		$query = $this->db->get('tb_user');
		return $query->row();
	}
	
	public function update($id)
	{
		$data = array (
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			'usertype' => $this->input->post('usertype')
		);
		$this->db->where('id_user',$id);
		$this->db->update('tb_user',$data);
	}
	
	public function delete ($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('tb_user');
	}
	public function getuser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tb_user')->row();
    }

   
    public function resetpass($id, $usertype)
    {
        $this->db->set('password', password_hash($usertype, PASSWORD_DEFAULT));
        $this->db->where('id_user', $id);
        return $this->db->update('tb_user');
    }
	
	// public function reset($type)
	//{
	//	$this->db->set('password_00', password_hash($type, PASSWORD_DEFAULT));
	//	$this->db->where('usertype_00',$type);
	//	$this->db->update('users_00');
	//}
	//
}
